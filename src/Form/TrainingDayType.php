<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class TrainingDayType
 *
 * @package Form
 */
class TrainingDayType extends AbstractType
{
    /** Training day type
     * @param FormBuilderInterface $builder
     * @param array $options
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
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'training_day_type';
    }
}