<?php
/**
 * Sport name form.
 */

namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SportNameType
 *
 * @package Form
 */
class SportNameType extends AbstractType
{
    /**
     * Sport name type
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'Sport_Name',
            TextType::class,
            [
                'label' => 'label.Sport_Name',
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
    }


    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'add_sport_type';
    }
}