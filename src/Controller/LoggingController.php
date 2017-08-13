<?php

namespace Controller;

use Form\LoggingType;
use Repository\LoggingRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class LoggingController.
 *
 * @package Controller
 */
class LoggingController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction'])
            ->method('POST|GET')
            ->bind('login');

//        $controller->get('/{id}', [$this, 'viewAction'])->bind('tag_view');

        return $controller;
    }

    /**
     * Index action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function indexAction(Application $app, Request $request)
    {
        $login=[];

        $form = $app['form.factory']->createBuilder(LoggingType::class, $login)->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            $login = $form->getData();
//            dump($login);
            $username = $form["username"]->getData();
            $password = $form["password"]->getData();
            $LoggingRepository = new LoggingRepository($app['db']);
            $login = $LoggingRepository->login($username, $password);

            var_dump($login);
        }

        return $app['twig']->render(
            'login.html.twig',
            [
                'login' => $login,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * View action.
     *
     * @param \Silex\Application $app Silex application
     * @param string             $id  Element Id
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    public function viewAction(Application $app)
    {
        $tagRepository = new LoggingRepository($app['db']);

        return $app['twig']->render(
            'tag/view.html.twig',
            ['tag' => $tagRepository->findAll()]
        );
    }


}