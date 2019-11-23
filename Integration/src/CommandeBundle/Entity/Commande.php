<?php
// src/AppBundle/Entity/User.php

namespace CommandeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Commande")
*/
class Commande
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idcommande;

    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $nomcommande;
    /**
     * @ORM\Column(type="integer")
     *
     */
    private $prixcommande;
    /**
     * @ORM\Column(type="date")
     */
    private $datecommande;

    /**
     * @return mixed
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * @param mixed $idcommande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;
    }

    /**
     * @return mixed
     */
    public function getNomcommande()
    {
        return $this->nomcommande;
    }

    /**
     * @param mixed $nomcommande
     */
    public function setNomcommande($nomcommande)
    {
        $this->nomcommande = $nomcommande;
    }

    /**
     * @return mixed
     */
    public function getPrixcommande()
    {
        return $this->prixcommande;
    }

    /**
     * @param mixed $prixcommande
     */
    public function setPrixcommande($prixcommande)
    {
        $this->prixcommande = $prixcommande;
    }

    /**
     * @return mixed
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * @param mixed $datecommande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;
    }

}