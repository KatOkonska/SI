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
class DeleteTrainingType extends AbstractType
{
    /**
     * Delete training type
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add
        (
            'Sport_ID', HiddenType::class, array()
        );

    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'delete_training_type';
    }
}