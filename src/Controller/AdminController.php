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

use Form\DeleteSportNameType;
use Form\DeleteUserType;
use Form\EditSportNameType;
use Form\EditUserType;
use Form\SportNameType;
use Form\EditPasswordType;
use Repository\AdminRepository;
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
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add_sport', [$this, 'addSportAction'])
            ->method('GET|POST')
            ->bind('add_sport');
        $controller->get('show_all_users/{page}', [$this, 'indexUsersAction'])
            ->value('page', 1)
            ->bind('show_all_users');
        $controller->get('show_all_trainings/{page}', [$this, 'indexTrainingsAction'])
            ->value('page', 1)
            ->bind('show_all_trainings');
        $controller->get('show_all_training_days/{page}', [$this, 'indexTrainingDaysAction'])
            ->value('page', 1)
            ->bind('show_all_training_days');
        $controller->get('show_all_sport_names/{page}', [$this, 'indexSportNameAction'])
            ->value('page', 1)
            ->bind('show_all_sport_names');
        $controller->match('edit_user/{id}', [$this, 'editUserAction'])
            ->method('GET|POST')
            ->bind('edit_user');
        $controller->match('edit_password/{id}', [$this, 'editPasswordAction'])
            ->method('GET|POST')
            ->bind('edit_password');
        $controller->match('edit_sport_name/{id}', [$this, 'editSportNameAction'])
            ->method('GET|POST')
            ->bind('edit_sport_name');
        $controller->match('delete_user/{id}', [$this, 'deleteUserAction'])
            ->method('GET|POST')
            ->bind('delete_user');
        $controller->match('delete_sport_name/{id}', [$this, 'deleteSportNameAction'])
            ->method('GET|POST')
            ->bind('delete_sport_name');

        return $controller;
    }

    /**
     * Show all users (paginated)
     * @param Application $app
     * @param int $page
     * @return mixed
     */
    public function indexUsersAction(Application $app, $page = 1)
    {
        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllUsers($app);

        $adminRepository = new AdminRepository($app['db']);

        return $app['twig']->render
        (
            'admin/show_all_users.html.twig',
            ['paginator' => $adminRepository->findAllUsersPaginated($page)]

        );
    }

    /**
     * Show all trainings (paginated)
     * @param Application $app
     * @param int $page
     * @return mixed
     */
    public function indexTrainingsAction(Application $app, $page = 1)
    {
        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllTrainings($app);

        $adminRepository = new AdminRepository($app['db']);

        return $app['twig']->render
        (
            'admin/show_all_trainings.html.twig',
            ['paginator' => $adminRepository->findAllTrainingsPaginated($page)]

        );
    }

    /**
     * Show all training days (paginated)
     * @param Application $app
     * @param int $page
     * @return mixed
     */
    public function indexTrainingDaysAction(Application $app, $page = 1)
    {
        $table =[];

        $adminRepository = new AdminRepository($app['db']);
        $table = $adminRepository->showAllTrainingDays($app);

        $adminRepository = new AdminRepository($app['db']);

        return $app['twig']->render
        (
            'admin/show_all_training_days.html.twig',
            ['paginator' => $adminRepository->findAllTrainingDaysPaginated($page)]

        );
    }

    /**
     * Show all sport names (paginated)
     * @param Application $app
     * @param int $page
     * @return mixed
     */
    public function indexSportNameAction(Application $app, $page = 1)
    {
            $table =[];

            $adminRepository = new AdminRepository($app['db']);
            $table = $adminRepository->showAllSportNames($app);

        $adminRepository = new AdminRepository($app['db']);

        return $app['twig']->render
        (
            'admin/show_all_sport_names.html.twig',
            ['paginator' => $adminRepository->findAllSportNamePaginated($page)]

        );
    }


    /**
     * Add sport name
     * @param Application $app
     * @param Request $request
     * @return mixed
     */
    public function addSportAction (Application $app, Request $request)
    {


        $form = $app['form.factory']->createBuilder(SportNameType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $register = $adminRepository->addSportName($form, $app);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.added',
                    ]
                );

            }
            else
            {
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render
        (
            'admin/add_sport_name.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }


    /**
     * Edit user
     * @param Application $app
     * @param $id
     * @param Request $request
     */
    public function editUserAction(Application $app, $id, Request $request)
    {
        $adminRepository = new AdminRepository($app['db']);
        $data = $adminRepository->findOneUserById($id);
        if(!$data)
        {
            return $app->abort('404', 'message.cant_edit_user');
        }

        $data['choice'] = array
        (
            'User' => 2,
            'Admin' => 1
        );
        $form = $app['form.factory']->createBuilder(EditUserType::class, $data)->getForm();

        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $editUser = $adminRepository->editUser($id, $form);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.edited',
                    ]
                );
            }
            else
                {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'admin/edit_user.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

    /**
     * Edit password
     * @param Application $app
     * @param $id
     * @param Request $request
     */
    public function editPasswordAction(Application $app, $id, Request $request)
    {
        $adminRepository = new AdminRepository($app['db']);
        $data = $adminRepository->findOneUserById($id);
        if(!$data)
        {
            return $app->abort('404', 'message.cant_edit_user_password');
        }

        $form = $app['form.factory']->createBuilder(EditPasswordType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $editPassword = $adminRepository->editPassword($id, $form, $app);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.edited',
                    ]
                );

            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'admin/edit_password.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

    /**
     * Edit sport name
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    public function editSportNameAction(Application $app, $id, Request $request)
    {

        $adminRepository = new AdminRepository($app['db']);
        $sportname = $adminRepository->findOneSportNameById($id);
        if(!$sportname)
        {
            return $app->abort('404', 'message.cant_edit_sportname');
        }


        $form = $app['form.factory']->createBuilder(EditSportNameType::class, $sportname)->getForm();
        $form->handleRequest($request);

        $errors ='';



        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $editSportName = $adminRepository->editSportName($id, $form, $app);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.edited',
                    ]
                );


                return $app->redirect($app['url_generator']->generate('show_all_sport_names'), 301);
            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'admin/edit_sport_name.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

    /**
     * Delete sport name
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteSportNameAction(Application $app, $id, Request $request)
    {
        $adminRepository = new AdminRepository($app['db']);
        $sportname = $adminRepository->findOneSportNameById($id);
        if(!$sportname)
        {
            return $app->abort('404', 'message.cant_delete_sportname');
        }

        $form = $app['form.factory']->createBuilder(DeleteSportNameType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $sportNameIsNotRelated = $adminRepository->findAllTrainingsBySportName($id);
                if (!$sportNameIsNotRelated)
                {
                    $deleteSportName = $adminRepository->deleteSportName($id);

                    $app['session']->getFlashBag()->add(
                        'messages',
                        [
                            'type' => 'info',
                            'message' => 'message.deleted',
                        ]
                    );
                }
                else
                {
                    $app['session']->getFlashBag()->add(
                        'messages',
                        [
                            'type' => 'info',
                            'message' => 'message.cant_be_deleted',
                        ]
                    );
                }

                return $app->redirect($app['url_generator']->generate('show_all_sport_names'), 301);

            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'admin/delete_sport_name.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

    /**
     * Delete user
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteUserAction(Application $app, $id, Request $request)
    {
        $adminRepository = new AdminRepository($app['db']);
        $data = $adminRepository->findOneUserById($id);
        if(!$data)
        {
            return $app->abort('404', 'message.cant_delete_user');
        }

        $form = $app['form.factory']->createBuilder(DeleteUserType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $adminRepository = new AdminRepository($app['db']);
                $deletePassword = $adminRepository->deleteUser($id);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'info',
                        'message' => 'message.deleted',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('show_all_users'), 301);

            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'admin/delete_user.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }
}