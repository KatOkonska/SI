<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * Auth controller.
 *
 */
namespace Controller;

use Form\EditPasswordType;
use Form\LoginType;
use Form\RegisterType;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AuthController
 *
 * @package Controller
 */
class AuthController implements ControllerProviderInterface
{

    /**
     * Connect
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('login', [$this, 'loginAction'])
            ->method('GET|POST')
            ->bind('auth_login');
        $controller->get('logout', [$this, 'logoutAction'])
            ->bind('auth_logout');
        $controller->match('register', [$this, 'registerAction'])
            ->method('GET|POST')
            ->bind('auth_register');
        $controller->match('edit_own_password', [$this, 'editOwnPasswordAction'])
            ->method('GET|POST')
            ->bind('auth_edit_own_password');
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
    /**
     * Login
     * @param Application $app
     * @param Request $request
     * @return mixed
     */
    public function loginAction(Application $app, Request $request)
    {
        $user = ['login' => $app['session']->get('_security.last_username')];
        $form = $app['form.factory']->createBuilder(LoginType::class, $user)->getForm();

        return $app['twig']->render
        (
            'auth/login.html.twig',
            [
                'form' => $form->createView(),
                'error' => $app['security.last_error']($request),
            ]
        );
    }

    /**
     * Logout action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    /** Logout
     * @param Application $app
     * @return mixed
     */
    public function logoutAction(Application $app)
    {
        $app['session']->clear();

        return $app['twig']->render('auth/logout.html.twig', []);
    }

    /**
     * Register
     * @param Application $app
     * @param Request $request
     * @return mixed
     */
    public function registerAction (Application $app, Request $request)
    {
        $form = $app['form.factory']->createBuilder(RegisterType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $userRepository = new UserRepository($app['db']);
                $checkIfUserOriginal = $userRepository->getUserByLogin($form['login']->getData());

                if (!$checkIfUserOriginal)
                {
                    $register = $userRepository->register($form, $app);

                    $app['session']->getFlashBag()->add(
                        'messages',
                        [
                            'type' => 'success',
                            'message' => 'message.created_account',
                        ]
                    );
                }
                else
                {
                    $app['session']->getFlashBag()->add(
                        'messages',
                        [
                            'type' => 'error',
                            'message' => 'error.login_exists',
                        ]
                    );
                }



            }
            else
            {
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render
        (
            'auth/register.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }

    /**
     * Edit own password
     * @param Application $app
     * @param Request $request
     * @return mixed
     */
    public function editOwnPasswordAction(Application $app,  Request $request)
    {
        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());


        $form = $app['form.factory']->createBuilder(EditPasswordType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                $userRepository = new UserRepository($app['db']);
                $editOwnPassword = $userRepository->editOwnPassword($user['User_ID'], $form, $app);
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
            'auth/edit_own_password.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,


            ]
        );
    }
}