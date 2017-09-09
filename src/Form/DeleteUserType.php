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
 * Class DeleteUserType
 *
 * @package Form
 */
class DeleteUserType extends AbstractType
{
    /**
     * Delete user type
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add
        (
            'User_password', HiddenType::class, array()
        );

    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'edit_user_type';
    }
}