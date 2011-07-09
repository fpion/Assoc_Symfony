<?php

namespace MyApp\AssociationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoryForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('nom');

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'MyApp\AssociationBundle\Entity\Category',
        );
    }
}
