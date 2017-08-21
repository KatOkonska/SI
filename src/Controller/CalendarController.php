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

        var_dump($calendar);

        return $app['twig']->render(
            'calendar.html.twig'

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