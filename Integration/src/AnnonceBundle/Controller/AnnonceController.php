<?php

namespace AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceController extends Controller
{
    public function AfficheAnnonceAction()
    {
        return $this->render('@Annonce/Annonce.html.twig');
    }
}
