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
use Form\TrainingDayType;
use Form\TrainingType;
use Repository\TrainingDayRepository;
use Repository\TrainingRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\SportNameRepository;

/**
 * Class TrainingController
 *
 * @package Controller
 */
class TrainingController implements ControllerProviderInterface
{
    /**
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add', [$this, 'addTrainingAction'])
            ->method('POST|GET')
            ->bind('add_training');
        $controller->get('show_all/{page}', [$this, 'indexAction'])
            ->value('page', 1)
            ->bind('show_all_training');
        $controller->get('show_last_5/{page}', [$this, 'showLast5TrainingAction'])
            ->value('page', 1)
            ->bind('show_last_5_training');
        $controller->match('edit/{id}', [$this, 'editTrainingAction'])
            ->method('POST|GET')
            ->bind('edit_training');
        $controller->match('delete_training/{id}', [$this, 'deleteTrainingAction'])
            ->method('GET|POST')
            ->bind('delete_training');


        return $controller;
    }

    /**
     * Show user's trainings
     *
     * @param \Silex\Application $app  Silex application
     * @param int                $page Current page number
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function indexAction(Application $app, $page = 1)
    {
        $userRepository = new UserRepository($app['db']);
        $userID = $userRepository->getUserByLogin($app['user']->getUsername())['User_ID'];

        $trainingRepository = new TrainingRepository($app['db']);
        return $app['twig']->render(
            'training/training_show_all.html.twig',
            ['paginator' => $trainingRepository->findAllPaginated($page, $userID)]
        );
    }

    /**
     * Show user's last 5 trainings
     * @param Application $app
     * @return mixed
     */
    public function showLast5TrainingAction(Application $app)
    {
        $userRepository = new UserRepository($app['db']);
        $userID = $userRepository->getUserByLogin($app['user']->getUsername())['User_ID'];

        $trainingRepository = new TrainingRepository($app['db']);
        return $app['twig']->render(
            'training/training_show_last_5.html.twig',
            ['paginator' => $trainingRepository->showLast5Training($userID)]
        );
    }

    /**
     * Add training
     * @param Application $app
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function addTrainingAction(Application $app, Request $request)
    {
        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());


        $sportNameRepository = new SportNameRepository($app['db']);
        $choice['choice'] = $sportNameRepository->showAllSportName();
        $formTraining = $app['form.factory']->createBuilder(TrainingType::class, $choice, array(
            'data' => $choice,
        ))->getForm();
        $formDate = $app['form.factory']->createBuilder(TrainingDayType::class)->getForm();


        $formTraining->handleRequest($request);
        $formDate->handleRequest($request);

        $errors ='';

        if ($formTraining->isSubmitted() && $formDate->isSubmitted()) {

            if ($formTraining->isValid() && $formDate->isValid()) {
                $trainingRepository = new TrainingRepository($app['db']);
                $trainingDayRepository = new TrainingDayRepository($app['db']);
                $addDate = $trainingDayRepository->addTrainingDay($formDate, $user['User_ID']);
                $addTraining = $trainingRepository->addTraining($formTraining, $user['User_ID'], $addDate);


                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.added',
                    ]
                );
                return $app->redirect($app['url_generator']->generate('show_all_training'), 301);


            } else{
                $errors = $formTraining->getErrors();
                $errors[] = $formDate->getErrors();
            }
        }


        return $app['twig']->render(
            'training/training_add.html.twig',
            [
                'formTraining' => $formTraining->createView(),
                'formDate' => $formDate->createView(),
                'error' => $errors,
            ]
        );
    }

    /**
     * Edit training
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
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
                return $app->abort('404', 'message.cant_edit_it');
        }


        $sportNameRepository = new SportNameRepository($app['db']);
        $choice = $sportNameRepository->showAllSportName();
        $oneTraining['choice'] = $choice;
        $form = $app['form.factory']->createBuilder(TrainingType::class, $oneTraining, array())->getForm();


        $trainingDayRepository = new TrainingDayRepository($app['db']);
        $oneTrainingDay = $trainingDayRepository->findOneTrainingDayById($oneTraining['Training_day_ID']);
        $formDate = $app['form.factory']->createBuilder(TrainingDayType::class, $oneTrainingDay)->getForm();



        $form->handleRequest($request);
        $formDate->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $trainingRepository = new TrainingRepository($app['db']);
                $editTraining = $trainingRepository->editTraining($id, $form, $user['User_ID']);

                $editTrainingDay = $trainingDayRepository->editTrainingDay($oneTraining['Training_day_ID'], $formDate);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.edited',
                    ]
                );
                return $app->redirect($app['url_generator']->generate('show_all_training'), 301);

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
                'formDate' => $formDate->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );


    }

    /**
     * Delete training
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
                return $app->abort('404', 'message.cant_delete_it');
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

                $trainingDayRepository = new TrainingDayRepository($app['db']);
                $trainingDayRepository->deleteTrainingDay($oneTraining['Training_day_ID']);

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