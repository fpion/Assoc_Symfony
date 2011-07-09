<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemberFindForm
 *
 * @author pionf
 */
namespace MyApp\AssociationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FindForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('motcle', 'text', array('label' => 'Mot-clé'));
    }
}

?>
