<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Controller\WelcomeController;
use Controller\CalendarController;
use Controller\AuthController;
use Controller\TrainingController;
use Controller\AdminController;
use Controller\TrainingDayController;


$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;

$app->get('/index', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
    ->bind('index')
;

$app->mount('/index', new WelcomeController());

$app->mount('/calendar', new CalendarController());

$app->mount('/auth', new AuthController());

$app->mount('/training', new TrainingController());

$app->mount('/training_day', new TrainingDayController());

$app->mount('/admin', new AdminController());



$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
