<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * TrainingController.
 *
 */
namespace Controller;

use Form\RegisterType;
use Form\TrainingType;
use Repository\TrainingRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AuthController
 *
 * @package Controller
 */
class TrainingController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add', [$this, 'addTrainingAction'])
            ->method('POST|GET')
            ->bind('add_training');


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

    public function addTrainingAction(Application $app, Request $request)
    {
        $tag = 'kaczka';

        $form = $app['form.factory']->createBuilder(new TrainingType($tag))->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $TrainingRepository = new TrainingRepository($app['db']);
                $addTraining = $TrainingRepository->addTraining($form);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
            'training.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }
}