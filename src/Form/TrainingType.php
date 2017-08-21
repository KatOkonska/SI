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
 * Class TrainingType
 *
 * @package Form
 */
class TrainingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function __construct($tag)
    {
//        $this->db = $db;
        var_dump($tag);
        die;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'time',
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
            'kcal',
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
            'distance',
            TextType::class,
            [
                'label' => 'label.distance',
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
            'name',
            ChoiceType::class,
            [
                'label' => 'label.name',
                'required' => true,
                'attr' => [


                ],
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
        return 'training_type';
    }
}