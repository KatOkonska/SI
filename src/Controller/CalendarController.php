<?php

namespace Controller;

use Repository\TrainingDayRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;

/**
 * Class CalendarController.
 *
 * @package Controller
 */
class CalendarController implements ControllerProviderInterface
{
    /**
     * @param Application $app
     * @return mixed
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'showNextTrainingsAction'])
            ->method('POST|GET')
            ->bind('calendar');
        return $controller;
    }

    /**
     * Index action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */
    /**
     * Show next trainings
     * @param Application $app
     * @return mixed
     */
    public function showNextTrainingsAction(Application $app)
    {
        $calendar=[];

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $TrainingDayRepository = new TrainingDayRepository($app['db']);
        $calendar = $TrainingDayRepository->showNextTrainings($user['User_ID']);

        return $app['twig']->render(
            'calendar.html.twig',
            ['calendar' => $calendar]

        );
    }

}