<?php

namespace Controller;

use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\CalendarRepository;

/**
 * Class CalendarController.
 *
 * @package Controller
 */
class CalendarController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction'])
            ->method('POST|GET')
            ->bind('calendar');

//        $controller->get('/', [$this, 'showName'])
//            ->method('POST|GET')
//            ->bind('calendar');

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
    public function indexAction(Application $app)
    {
        $calendar=[];

        $CalendarRepository = new CalendarRepository($app['db']);
        $calendar = $CalendarRepository->showAll();

        return $app['twig']->render(
            'calendar.html.twig',
            ['calendar' => $calendar]

        );
    }

//    public function welcomeAction(Application $app)
//    {
//        $name ='';
//
//        $CalendarRepository = new CalendarRepository($app['db']);
//        $name = $CalendarRepository->showName();
//
//        return $app['twig']->render(
//            'calendar.html.twig',
//            ['name' => $name]
//
//        );
//    }





    /**
     * View action.
     *
     * @param \Silex\Application $app Silex application
     * @param string             $id  Element Id
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
//    public function viewAction(Application $app)
//    {
//        $tagRepository = new UserRepository($app['db']);
//
//        return $app['twig']->render(
//            'tag/view.html.twig',
//            ['tag' => $tagRepository->findAll()]
//        );
//    }


}