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
//        echo 'test1';
//        var_dump($app['user']->getUsername());
//        var_dump($app['user']->getRoles());
//        foreach ($app as $k=>$v)
//        {
//            var_dump($app['user']);
//            var_dump('lalala');
//        }
//        echo 'test2';

//        $usr= $app->get('security.context')->getToken()->getUser();
//        var_dump($usr->getUsername());
//       die;

        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());


        $tag = 'kaczka';

        $sportNameRepository = new SportNameRepository($app['db']);
        $choice['choice'] = $sportNameRepository->showAllSportName();
//        var_dump($choice);
//        die;



//        $form = $app['form.factory']->createBuilder(new TrainingType($tag))->getForm();
        $form = $app['form.factory']->createBuilder(TrainingType::class, $choice, array(
            'data' => $choice,
        ))->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $TrainingRepository = new TrainingRepository($app['db']);
                $addTraining = $TrainingRepository->addTraining($form, $user['User_ID']);

                echo 'Wyslano do bazy';

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

        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());

        $TrainingRepository = new TrainingRepository($app['db']);
        $table = $TrainingRepository->showAllTraining($user['User_ID']);

//        var_dump($table);
//        die;

        return $app['twig']->render(
            'training/training_show_all.html.twig',
            ['table' => $table]

        );
    }

    public function showWeekTrainingAction(Application $app)
    {
        $table =[];

        $TrainingRepository = new TrainingRepository($app['db']);
        $table = $TrainingRepository->showWeekTraining();

        return $app['twig']->render(
            'training/training_show_week.html.twig',
            ['table' => $table]

        );
    }

    public function editTrainingAction(Application $app, $id, Request $request)
    {

        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());


        $sportNameRepository = new SportNameRepository($app['db']);
        $choice = $sportNameRepository->showAllSportName();

        $TrainingRepository = new TrainingRepository($app['db']);
        $one_training = $TrainingRepository->findOneTrainingById($id);

        $one_training['choice'] = $choice;

        $form = $app['form.factory']->createBuilder(TrainingType::class, $one_training, array())->getForm();

        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $TrainingRepository = new TrainingRepository($app['db']);
                $editTraining = $TrainingRepository->editTraining($id, $form, $user['User_ID']);

                echo 'Wyslano do bazy';

            } else{
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
        $form = $app['form.factory']->createBuilder(DeleteTrainingType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $trainingRepository = new TrainingRepository($app['db']);
                $deleteTraining = $trainingRepository->deleteTraining($id);

                return $app->redirect($app['url_generator']->generate('show_all_training'), 301);
                //przydałoby się dla admina inne przekierowanie

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'training/training_delete.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

}