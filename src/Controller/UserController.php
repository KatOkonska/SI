<?php
/**
 * Calendar controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */
namespace Controller;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserController.
 *
 * @package Controller
 */
class UserController implements ControllerProviderInterface
{
    /**
     * Routing settings.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Silex\ControllerCollection Result
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction']);
        return $controller;
    }



    /**
     * Index action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request Request object
     *
     * @return string Response
     */
    public function indexAction(Application $app, Request $request)
    {
        //return 'Witaj'.'{zmienna-imie}'.'!<br>'.$this->todayDate();
        $name = '{zmienna-imie}';
        $current_day = $this->todayDate();
        echo 'Test User 12345';
        return $app['twig']->render('welcome/index.html.twig', ['name' => $name]);

    }

    private function todayDate()
    {
        $weekdays = array('niedziela', 'poniedzialek', 'wtorek', 'sroda', 'czwartek', 'piatek','sobota');
        return 'Dzisiaj jest '.$weekdays[date('w')].'!';
    }

    public function nextTrainingDay()
    {
        echo 'Twój następny trening odbędzie się'.'!';
    }

    public function lastTraining()
    {

    }
}