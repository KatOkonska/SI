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

use Form\DeleteUserType;
use Form\EditUserType;
use Form\LoginType;
use Form\RegisterType;
use Form\TrainingType;
use Form\SportNameType;
use Form\EditPasswordType;
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
        $controller->match('edit_user/{id}', [$this, 'editUserAction'])
            ->method('GET|POST')
            ->bind('edit_user');
        $controller->match('edit_password/{id}', [$this, 'editPasswordAction'])
            ->method('GET|POST')
            ->bind('edit_password');
        $controller->match('delete_user/{id}', [$this, 'deleteUserAction'])
            ->method('GET|POST')
            ->bind('delete_user');

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


        $adminRepository = new AdminRepository($app['db']);
        $data = $adminRepository->findOneUserById($id);
        $data['choice'] = array(
            'Użytkownik' => 2,
            'Admin' => 1

        );
        $form = $app['form.factory']->createBuilder(EditUserType::class, $data)->getForm();

        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $adminRepository = new AdminRepository($app['db']);
                $editUser = $adminRepository->editUser($id, $form);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'admin/edit_user.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

    public function editPasswordAction(Application $app, $id, Request $request)
    {
//

        $form = $app['form.factory']->createBuilder(EditPasswordType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $adminRepository = new AdminRepository($app['db']);
                $editPassword = $adminRepository->editPassword($id, $form, $app);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'admin/edit_password.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }



    public function editRoleAction()
    {

        //edytuj rolę użytkownika
    }


    public function editSportNameAction()
    {

        //edytuj rolę użytkownika
    }

    public function deleteSportNameAction()
    {

        //edytuj rolę użytkownika
    }


    public function deleteUserAction(Application $app, $id, Request $request)
    {
        $form = $app['form.factory']->createBuilder(DeleteUserType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $adminRepository = new AdminRepository($app['db']);
                $editPassword = $adminRepository->deleteUser($id);

                return $app->redirect($app['url_generator']->generate('show_all_users'), 301);

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'admin/delete_user.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }




}