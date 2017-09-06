<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
use Doctrine\DBAL\Connection;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TrainingDayType
 *
 * @package Form
 */
class TrainingDayType extends AbstractType
{
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'Training_day_day_number',
            DateType::class,
            [
                'label' => 'label.Training_day',
                'required' => true,

                'constraints' => [
                    new Assert\NotBlank(),

                ],
            ]
        );


    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'training_day_type';
    }
}