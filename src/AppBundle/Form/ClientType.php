<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateMaj')->add('unfea')->add('synafel')->add('proHelio')->add('impriFrance')->add('s')->add('e')->add('h')->add('p')->add('mng')->add('luxe')->add('activite')->add('statut')->add('societe')->add('etatCivil')->add('nomComplet')->add('fonction')->add('adresse1')->add('adresse2')->add('codePostal')->add('ville')->add('pays')->add('telephone')->add('mobile')->add('email')->add('email2')->add('etiqPack')->add('signalEtiq')->add('etiqPack3')->add('signalEtiq4');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_client';
    }


}
