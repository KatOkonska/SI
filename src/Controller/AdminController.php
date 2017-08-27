<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * AdminController.
 *
 */
namespace Controller;

use Form\EditUserType;
use Form\LoginType;
use Form\RegisterType;
use Form\TrainingType;
use Form\SportNameType;
use Repository\AdminRepository;
use Repository\CalendarRepository;
use Repository\UserRepository;
use Repository\TrainingRepository;
use Repository\SportNameRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AdminController
 *
 * @package Controller
 */
class AdminController implements ControllerProviderInterface
{



    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add_sport', [$this, 'addSportAction'])
            ->method('GET|POST')
            ->bind('add_sport');
        $controller->match('show_all_users', [$this, 'showAllUsersAction'])
                    ->method('GET|POST')
                    ->bind('show_all_users');
        $controller->match('show_all_trainings', [$this, 'showAllTrainingsAction'])
            ->method('GET|POST')
            ->bind('show_all_trainings');
        $controller->match('show_all_training_days', [$this, 'showAllTrainingDaysAction'])
            ->method('GET|POST')
            ->bind('show_all_training_days');
        $controller->match('edit_user', [$this, 'editUserAction'])
            ->method('GET|POST')
            ->bind('edit_user');

        return $controller;
    }


    public function addSportAction (Application $app, Request $request)
    {


        $form = $app['form.factory']->createBuilder(SportNameType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $register = $adminRepository->addSportName($form, $app);

                echo 'Wyslano do bazy';
            }
            else
            {
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render(
            'admin/add_sport.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }

    public function showAllUsersAction(Application $app)
    {
        $table =[];

        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllUsers($app);


        return $app['twig']->render(
            'admin/show_all_users.html.twig',
            ['table' => $table]

        );
    }

    public function showAllTrainingsAction(Application $app)
    {
        $table =[];

        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllTrainings($app);


        return $app['twig']->render(
            'admin/show_all_trainings.html.twig',
            ['table' => $table]

        );
    }

    public function showAllTrainingDaysAction(Application $app)
    {
        $table =[];

        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllTrainingDays($app);


        return $app['twig']->render(
            'admin/show_all_training_days.html.twig',
            ['table' => $table]

        );
    }

    public function editUserAction(Application $app, $id, Request $request)
    {
//
//        $choice = array(
//            'jeden' => 1,
//            'dwa' => 2
//        );

        $adminRepository = new AdminRepository($app['db']);
        $one_user = $adminRepository->findOneUserById($id);
        var_dump($one_user);
        die;


//        $UserRepository = new UserRepository($app['db']);
//        $kaczka = $UserRepository->getUserByID($app['id']->getID());

//        $one_user['choice'] = $choice;

//        $form = $app['form.factory']->createBuilder(TrainingType::class, $one_training, array())->getForm();
        $form = $app['form.factory']->createBuilder(EditUserType::class, $choice, array(
            'data' => $choice,
        ))->getForm();

        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $adminRepository = new AdminRepository($app['db']);
                $editUser = $adminRepository->editUser($id, $form, $user['User_ID']);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'edit_user.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }





}