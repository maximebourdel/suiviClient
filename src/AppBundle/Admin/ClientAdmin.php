<?php

// src/Admin/ClientAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ClientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->with('Entreprise', ['class' => 'col-md-4'])
            ->add('activite', TextareaType::class, ['required' => false])
            ->add('statut',TextType::class, ['required' => false])
            ->add('societe',TextType::class, ['required' => false])
            ->add('etiqPack', TextareaType::class, ['required' => false])
            ->add('signalEtiq', TextareaType::class, ['required' => false])
            ->add('etiqPack3')
            ->add('signalEtiq4')
            ->add('dateMaj')
        ->end()

        ->with('Contact', ['class' => 'col-md-5'])
            ->add('etatCivil')
            ->add('nomComplet')
            ->add('fonction')
            ->add('adresse1')
            ->add('adresse2')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telephone', TextareaType::class, ['required' => false])
            ->add('email')
            ->add('email2')
        ->end()

        ->with('Evenements', ['class' => 'col-md-3'])
            ->add('unfea')
            ->add('synafel')
            ->add('proHelio')
            ->add('impriFrance')
            ->add('s')
            ->add('e')
            ->add('h')
            ->add('p')
            ->add('mng')
            ->add('luxe')
        ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('activite')
            ->add('statut')
            ->add('societe')
            ->add('etiqPack')
            ->add('signalEtiq')
            ->add('etiqPack3')
            ->add('signalEtiq4')
            ->add('dateMaj')
            ->add('etatCivil')
            ->add('nomComplet')
            ->add('fonction')
            ->add('adresse1')
            ->add('adresse2')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telephone')
            ->add('email')
            ->add('email2')
            ->add('unfea')
            ->add('synafel')
            ->add('proHelio')
            ->add('impriFrance')
            ->add('s')
            ->add('e')
            ->add('h')
            ->add('p')
            ->add('mng')
            ->add('luxe')
    ;

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('dateMaj')
            ->add('activite')
            ->add('statut')
            ->add('societe')
            ->add('etatCivil')
            ->add('nomComplet')
            ->add('fonction')->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
            ));
    }

        /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
        ->with('Entreprise', ['class' => 'col-md-4'])
            ->add('activite', TextareaType::class)
            ->add('statut')
            ->add('societe')
            ->add('etiqPack', TextareaType::class)
            ->add('signalEtiq', TextareaType::class)
            ->add('etiqPack3')
            ->add('signalEtiq4')
        ->end()

        ->with('Contact', ['class' => 'col-md-5'])
            ->add('etatCivil')
            ->add('nomComplet')
            ->add('fonction')
            ->add('adresse1')
            ->add('adresse2')
            ->add('codePostal')
            ->add('ville')
            ->add('pays')
            ->add('telephone', TextareaType::class)
            ->add('email')
            ->add('email2')
        ->end()

        ->with('Evenements', ['class' => 'col-md-3'])
            ->add('unfea')
            ->add('synafel')
            ->add('proHelio')
            ->add('impriFrance')
            ->add('s')
            ->add('e')
            ->add('h')
            ->add('p')
            ->add('mng')
            ->add('luxe')
        ->end()
        ->with('Technique', ['class' => 'col-md-12'])
            ->add('dateMaj')
        ->end();
        ;
    }
}
