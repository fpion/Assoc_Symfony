<?php

namespace MyApp\AssociationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MemberForm extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('birthday', 'birthday');
        $builder->add('sexe', 'choice', array('choices' => array('F' => 'Féminin', 'M' => 'Masculin')));
        $builder->add('contacts', 'entity', array(
            'class' => 'MyApp\AssociationBundle\Entity\Contact',
            'property' => 'PrenomNom',
            'expanded' => false,
            'multiple' => true,
            'required' => false
        ));
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'MyApp\AssociationBundle\Entity\Member',
        );
    }

}
