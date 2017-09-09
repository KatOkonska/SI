<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 19.08.17
 * Time: 15:08
 */


namespace Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class EditSportNameType
 *
 * @package Form
 */
class EditSportNameType extends AbstractType
{
    /**
     * Edit sport name type
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder->add(
            'Sport_Name',
            TextType::class,
            [
                'label' => 'table.sport_name',
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
        return 'edit_user_type';
    }
}