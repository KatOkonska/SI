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

use Form\LoginType;
use Form\RegisterType;
use Form\TrainingType;
use Form\SportNameType;
use Repository\AdminRepository;
use Repository\UserRepository;
use Repository\SportNameRepository;
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
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add_sport', [$this, 'addSportAction'])
            ->method('GET|POST')
            ->bind('add_sport');

        return $controller;
    }


    public function addSportAction (Application $app, Request $request)
    {
        $form = $app['form.factory']->createBuilder(SportNameType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $AdminRepository = new AdminRepository($app['db']);
                $register = $AdminRepository->addSportName($form, $app);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }


        return $app['twig']->render(
            'admin/add_sport.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }
}