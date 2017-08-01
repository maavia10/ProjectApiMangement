<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ApiAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('endpointName')
            ->add('endpointUrl')
            ->add('endpointMethod')
            ->add('request')
            ->add('response')
            ->add('note')
            ->add('created')
            ->add('updated')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('project')
            ->add('endpointName')
            ->add('endpointUrl')
            ->add('endpointMethod')
            ->add('request')
            ->add('response')
            ->add('note')
            ->add('created')
            ->add('updated')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('endpointName')
            ->add('endpointUrl')
            ->add('endpointMethod')
            ->add('request')
            ->add('response')
            ->add('note')
            ->add('project','sonata_type_model',array(
                'class' => 'AppBundle\Entity\Project',
                'property' => 'name',
                'required'=>false
            ))
             ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('project')
            ->add('endpointName')
            ->add('endpointUrl')
            ->add('endpointMethod')
            ->add('request')
            ->add('response')
            ->add('note')
            ->add('created')
            ->add('updated')
        ;
    }
}
