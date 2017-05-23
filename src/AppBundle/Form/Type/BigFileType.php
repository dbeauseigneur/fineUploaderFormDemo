<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Sonata\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

/**
 * Description of bigfile
 *
 * @author TRAITEMENT 5
 */
class BigFileType extends AbstractType
{
    //put your code here
    public function getParent()
    {
	return FileType::class;
    }
    
    public function getName()
    {
	return 'bigfile';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
	
	$resolver->setDefault('max_file', 1);
	$resolver->setRequired(array('id'));
		    
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
	$view->vars['max_file'] = $options['max_file'];
	$view->vars['subject_id'] = $options['id'];
	$view->vars['name'] = $form->getName();
	$view->vars['data'] = $form->getData();

    }
}
