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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EditUserType
 *
 * @package Form
 */
class EditUserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = $options['data']['choice'];

        $builder->add(
            'User_login',
            TextType::class,
            [
                'label' => 'label.time',
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

        $builder->add(
            'User_password',
            TextType::class,
            [
                'label' => 'label.kcal',
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

        $builder->add(
            'Role_ID',
            ChoiceType::class,
            [
                'label' => 'label.rola',
                'required' => true,
                'attr' => [],
                'choices' => $choices,
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
        return 'edit_user_type';
    }
}