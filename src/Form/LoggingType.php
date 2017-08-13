<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 09.08.17
 * Time: 22:05
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class LoggingType.
 *
 * @package Form
 */
class LoggingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'username',
            TextType::class,
            [
                'label' => 'USERNAME',
                'required' => true,
                'attr' => [
                    'max_length' => 45,
                ],
            ]
        );

        $builder->add(
            'password',
            PasswordType::class,
            [
                'label' => 'PASSWORD',
                'required' => true,
                'attr' => [
                    'max_length' => 45,
                ],
            ]
        );


    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'logging_type';
    }
}