<?php

namespace MeetupBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('ville')
                ->add('topics');
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefault(array('data_class'=>'MeetupBundle\Entity\Event'));
    }
    
}
