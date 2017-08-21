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

use Form\LoginType;
use Form\RegisterType;
use Form\TrainingType;
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
     * {@inheritdoc}
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
        $controller->match('training', [$this, 'addTrainingAction'])
            ->method('GET|POST')
            ->bind('auth_add_training');


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
    public function loginAction(Application $app, Request $request)
    {
        $user = ['login' => $app['session']->get('_security.last_username')];
        $form = $app['form.factory']->createBuilder(LoginType::class, $user)->getForm();

        return $app['twig']->render(
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
    public function logoutAction(Application $app)
    {
        $app['session']->clear();

        return $app['twig']->render('auth/logout.html.twig', []);
    }

    public function registerAction (Application $app, Request $request)
    {
        $form = $app['form.factory']->createBuilder(RegisterType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $UserRepository = new UserRepository($app['db']);
                $register = $UserRepository->register($form, $app);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render(
            'auth/register.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }

//    public function addTrainingAction(Application $app, Request $request)
//    {
//        $tag = [];
//
//        $form = $app['form.factory']->createBuilder(TrainingType::class, $tag)->getForm();
//        $form->handleRequest($request);
//
//        $errors ='';
//
//        if ($form->isSubmitted()) {
//
//            if ($form->isValid()) {
//                $UserRepository = new UserRepository($app['db']);
//                $register = $UserRepository->register($form);
//
//                echo 'Wyslano do bazy';
//
//            } else{
//                $errors = $form->getErrors();
//            }
//        }
//
//        return $app['twig']->render(
//            'auth/training.html.twig',
//            [
//                'form' => $form->createView(),
//                'error' => $errors,
//            ]
//        );
//    }
}