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
     * {@inheritdoc}
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
                            'min' => 8,
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
                            'min' => 8,
                            'max' => 32,
                        ])
            ] ,
            'type' => PasswordType::class,
            'invalid_message' => 'The password fields must match.',
            'options' => array('attr' => array('class' => 'password-field')),
            'required' => true,
            'first_options'  => array('label' => 'Password'),
            'second_options' => array('label' => 'Repeat Password')
            )
        );

//        $builder->add(
//            'password',
//            PasswordType::class,
//            [
//                'label' => 'label.password',
//                'required' => true,
//                'attr' => [
//                    'max_length' => 32,
//
//                ],
//                'constraints' => [
//                    new Assert\NotBlank(),
//                    new Assert\Length(
//                        [
//                            'min' => 8,
//                            'max' => 32,
//                        ]
//                    ),
//                ],
//            ]
//        );
//
//        $builder->add(
//            'password2',
//            PasswordType::class,
//            [
//                'label' => 'label.password2',
//                'required' => true,
//                'attr' => [
//                    'max_length' => 32,
//
//                ],
//                'constraints' => [
//                    new Assert\NotBlank(),
//                    new Assert\Length(
//                        [
//                            'min' => 8,
//                            'max' => 32,
//                        ]
//                    ),
//                ],
//            ]
//        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'login_type';
    }
}