<?php

namespace App\Form;

use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeEtablissement')
            ->add('nomDuRestaurant')
            ->add('denominationCommerciale')
            ->add('siret')
            ->add('restaurantAdress')
            ->add('codePostal')
            ->add('ville')
            ->add('departement')
            ->add('GPS')
            ->add('telephone')
            ->add('email')
            ->add('siteWeb')
            ->add('restaurantType')
            ->add('serviceProposes')
            ->add('categoriesRestaurant')
            ->add('nbrCategoriesProduitRestaurant')
            ->add('urlLogoRestaurant')
            ->add('urlLogoMenu')
            ->add('urlLogoCompoProduit')
            ->add('JoursOuverture')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
