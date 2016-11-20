<?php

namespace EvalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlbumType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('artiste')
                ->add('genre', ChoiceType::class, array(
                    'choices' => array(
                        'Hip-Hop',
                        'Soul',
                        'Rock',
                    )))
                ->add('support', ChoiceType::class, array(
                    'choices' => array(
                        'Vinyl',
                        'CD',
                        'Cassette',
                    )))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EvalBundle\Entity\Album'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'evalbundle_album';
    }


}
