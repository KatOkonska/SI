<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class DeleteTrainingType
 *
 * @package Form
 */
class DeleteTrainingDayType extends AbstractType
{
    /**
     * Delete training day type
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add
        (
            'Training_day_day_number', HiddenType::class, array()
        );

    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'delete_training_day_type';
    }
}