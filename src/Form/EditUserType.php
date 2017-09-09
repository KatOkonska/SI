<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
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
     * Edit user type
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = $options['data']['choice'];

        $builder->add(
            'User_login',
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


        $builder->add(
            'Role_ID',
            ChoiceType::class,
            [
                'label' => 'table.role',
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
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'edit_user_type';
    }
}