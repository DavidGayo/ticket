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
                    'Ubunto 12'=>'Ubunto 12',
                    'Ubunto 13'=>'Ubunto 13',
                    'Ubunto 14'=>'Ubunto 14',
                    'Ubunto 15'=>'Ubunto 15',
                    'Windows 7'=>'Windows 7',
                    'Windows 8'=>'Windows 8',
                    'Windows 10'=>'Windows 10',)))
            ->add('navegador','choice',array(
                'choices'=>array(
                    'Chrome'=>'Chorme',
                    'Chromium'=>'Chromium',
                    'Safari'=>'Safari',
                    'Firefox'=>'Firefox',
                    'Explorer'=>'Windows 7',
                    )))
            ->add('url')
            ->add('descripcion')
            ->add('aplica')
            ->add('resuelto')
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
