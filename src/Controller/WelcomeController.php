<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * Welcome controller.
 *
 */
namespace Controller;

use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Repository\WelcomeRepository;

/**
 * Class WelcomeController.
 *
 * @package Controller
 */
class WelcomeController implements ControllerProviderInterface
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
        $controller->get('/index', [$this, 'indexAction'])->bind('index');
//        $controller->get('/1', [$this, 'welcomeAction'])->bind('index1');
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
     //   $name = '{zmienna-imie}';
//        $current_day = $this->todayDate();
//        echo 'Test 333';
        return $app['twig']->render('index.html.twig');

    }

//    public function welcomeAction(Application $app)
//    {
//        $name ='';
//
//        $login='';
//
//        $WelcomeRepository = new WelcomeRepository($app['db']);
//        $name = $WelcomeRepository->showName($login);
//
//        return $app['twig']->render(
//            'index.html.twig',
//            ['name' => $name]
//
//        );
//    }

//    private function todayDate(Application $app)
//    {
//        $weekdays = array('niedziela', 'poniedzialek', 'wtorek', 'sroda', 'czwartek', 'piatek','sobota');
//
//
//        $today = $weekdays[date('w')];
//
//        return $app['twig']->render(
//            'index.html.twig',
//            ['today' => $today]
//
//        );
//    }
//
//    public function nextTrainingDay()
//    {
//        echo 'Twój następny trening odbędzie się'.'!';
//    }
//
//    public function lastTraining()
//    {
//
//    }
}