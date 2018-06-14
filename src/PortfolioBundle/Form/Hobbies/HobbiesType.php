<?php
/**
 * Created by PhpStorm.
 * User: dabee
 * Date: 19-05-18
 * Time: 15:14
 */

namespace PortfolioBundle\Form\Hobbies;


use PortfolioBundle\Entity\hobbies;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HobbiesType extends AbstractType
{
    public function getBlockPrefix()
    {
        return 'Hobbies_Type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class',hobbies::class);
        $resolver->setDefault('attr',array('novalidate'=>true));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('entitled',TextType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'entitled')));
        $builder->add('descriptive',TextareaType::class,
            array('attr'=>array('class'=>'style_input','placeholder'=>'descriptive')));

        $builder->add('save',SubmitType::class,
            array('label'=>'Valider',
                  'attr'=>array('class'=>'bouton')));
    }
}