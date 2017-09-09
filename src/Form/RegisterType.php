<?php
/**
 * Register form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class RegisterType
 *
 * @package Form
 */
class RegisterType extends AbstractType
{
    /**
     * Register type
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'login',
            TextType::class,
            [
                'label' => 'label.login',
                'required' => true,
                'attr' => [
                    'max_length' => 32,

                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(
                        [
                            'min' => 1,
                            'max' => 32,
                        ]
                    ),
                ],
            ]
        );
        $builder->add('password', RepeatedType::class, array(
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
        return 'login_type';
    }
}