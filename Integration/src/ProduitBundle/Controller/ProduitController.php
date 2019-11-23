<?php

namespace ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function affichageAction()
    {
        return $this->render('@Produit/afficheProduit.html.twig');
    }
}
