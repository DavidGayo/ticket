<?php

namespace Software\TicketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proyecto')
            ->add('sistemaOperativo','choice',array(
                'choices'=>array(
                    'Ubuntu 12'=>'Ubuntu 12',
                    'Ubuntu 13'=>'Ubuntu 13',
                    'Ubuntu 14'=>'Ubuntu 14',
                    'Ubuntu 15'=>'Ubuntu 15',
                    'Windows 7'=>'Windows 7',
                    'Windows 8'=>'Windows 8',
                    'Windows 10'=>'Windows 10',)))
            ->add('navegador','choice',array(
                'choices'=>array(
                    'Chrome'=>'Chrome',
                    'Chromium'=>'Chromium',
                    'Safari'=>'Safari',
                    'Firefox'=>'Firefox',
                    'Explorer'=>'Explorer',
                    )))
            ->add('url')
            ->add('descripcion')
            ->add('aplica')
            ->add('resuelto')
            ->add('imagen', new ImagenType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Software\TicketBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'software_ticketbundle_ticket';
    }
}
