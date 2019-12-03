<?php

namespace ProduitBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NameProduit')
            ->add('Category',
                EntityType::Class,array(
                    'class'=>"ProduitBundle:CategoryProduit",
                    'choice_label'=>'LibelleProd',
                    'multiple'=>false))
            ->add('TypeProduit')
            ->add('QuantityProduit')
            ->add('PriceProduit')
            ->add('Promotion')
            ->add('imageName',FileType::class,[
                'mapped'=> false,
                'label' =>'choose picture '
            ])
            ->add('DescriptionProduit')
           // ->add('DateProduit')

            ->add('Save',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProduitBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'produitbundle_produit';
    }


}
