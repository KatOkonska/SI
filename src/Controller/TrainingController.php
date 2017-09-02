<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * TrainingController.
 *
 */
namespace Controller;


use Form\DeleteTrainingType;
use Form\TrainingType;
use Repository\TrainingRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\SportNameRepository;

/**
 * Class AuthController
 *
 * @package Controller
 */
class TrainingController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add', [$this, 'addTrainingAction'])
            ->method('POST|GET')
            ->bind('add_training');
        $controller->match('show_all', [$this, 'showAllTrainingAction'])
            ->method('POST|GET')
            ->bind('show_all_training');
        $controller->match('show_week', [$this, 'showWeekTrainingAction'])
            ->method('POST|GET')
            ->bind('show_week_training');
        $controller->match('edit/{id}', [$this, 'editTrainingAction'])
            ->method('POST|GET')
            ->bind('edit_training');
        $controller->match('delete_training/{id}', [$this, 'deleteTrainingAction'])
            ->method('GET|POST')
            ->bind('delete_training');


        return $controller;
    }

    /**
     * Login action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP Request
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */

    public function addTrainingAction(Application $app, Request $request)
    {
        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());


        $sportNameRepository = new SportNameRepository($app['db']);
        $choice['choice'] = $sportNameRepository->showAllSportName();
        $form = $app['form.factory']->createBuilder(TrainingType::class, $choice, array(
            'data' => $choice,
        ))->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $trainingRepository = new TrainingRepository($app['db']);
                $addTraining = $trainingRepository->addTraining($form, $user['User_ID']);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.element_successfully_added',
                    ]
                );

            } else{
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render(
            'training/training_add.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }

        public function showAllTrainingAction(Application $app)
    {
        $table =[];

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingRepository = new TrainingRepository($app['db']);
        $table = $trainingRepository->showAllTraining($user['User_ID']);


        return $app['twig']->render(
            'training/training_show_all.html.twig',
            ['table' => $table]

        );
    }

    public function showWeekTrainingAction(Application $app)
    {
        $table =[];

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingRepository = new TrainingRepository($app['db']);
        $table = $trainingRepository->showWeekTraining($user['User_ID']);

        return $app['twig']->render(
            'training/training_show_week.html.twig',
            ['table' => $table]

        );
    }

    public function editTrainingAction(Application $app, $id, Request $request)
    {

        $chosenTraining= new TrainingRepository($app['db']);

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());


        if(in_array('ROLE_ADMIN', $userRepository->getUserRoles($user['User_ID'])) )
        {
            $oneTraining = $chosenTraining->findOneTrainingById($id);
        }
        else
        {
            $oneTraining = $chosenTraining->findOneTrainingByIdAndUser($id, $user['User_ID']);
        }

        if (!$oneTraining)
        {
                return $app->abort('404', 'message.cant_edit_training');
        }

        $sportNameRepository = new SportNameRepository($app['db']);
        $choice = $sportNameRepository->showAllSportName();

        $oneTraining['choice'] = $choice;

        $form = $app['form.factory']->createBuilder(TrainingType::class, $oneTraining, array())->getForm();

        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $trainingRepository = new TrainingRepository($app['db']);
                $editTraining = $trainingRepository->editTraining($id, $form, $user['User_ID']);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.element_successfully_edited',
                    ]
                );

            }
            else
            {
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render(
            'training/training_edit.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );


    }

    /**
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteTrainingAction(Application $app, $id, Request $request)
    {
        $chosenTraining= new TrainingRepository($app['db']);

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $oneTraining = $chosenTraining->findOneTrainingByIdAndUser($id, $user['User_ID']);

        if(!in_array('ROLE_ADMIN', $userRepository->getUserRoles($user['User_ID'])) )
        {
            if (!$oneTraining)
            {
                return $app->abort('404', 'message.cant_delete_training');
            }
        }

        $form = $app['form.factory']->createBuilder(DeleteTrainingType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $trainingRepository = new TrainingRepository($app['db']);
                $deleteTraining = $trainingRepository->deleteTraining($id);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'info',
                        'message' => 'message.deleted',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('show_all_training'), 301);

            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'training/training_delete.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

}