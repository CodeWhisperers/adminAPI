<?php

namespace eQuest\Api\QuestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PointsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('details')
            ->add('x')
            ->add('y')
            ->add('map_id')
            ->add('type')
            ->add('qr_code')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eQuest\Api\QuestBundle\Entity\Points'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'equest_api_questbundle_points';
    }
}
