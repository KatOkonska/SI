<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EditPasswordType
 *
 * @package Form
 */
class EditPasswordType extends AbstractType
{
    /**
     * Edit password type
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add(
            'User_password', RepeatedType::class, array
            (
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 1,
                            'max' => 32,
                        ])
                ] ,
                'type' => PasswordType::class,
                'invalid_message' => 'danger.password_dont_match',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')
            )
        );

    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'edit_password_type';
    }
}