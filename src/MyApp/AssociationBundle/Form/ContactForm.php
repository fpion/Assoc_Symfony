<?php

namespace MyApp\AssociationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('birthday', 'birthday');
        $builder->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')));
        $builder->add('email');
        $builder->add('tel');
        

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\AssociationBundle\Entity\Contact',
        );
    }
}
