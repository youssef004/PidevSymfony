<?php


namespace DeliveryBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Livreur
{
    /**
     * @ORM\column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $IdLivreur;
    /**
     * @ORM\column(type="string")
     *
     */
    private $NomLivreur;
    /**
     * @ORM\column(type="integer")
     */
    private $NumeroLivreur;

    /**
     * @return mixed
     */
    public function getIdLivreur()
    {
        return $this->IdLivreur;
    }

    /**
     * @param mixed $IdLivreur
     */
    public function setIdLivreur($IdLivreur)
    {
        $this->IdLivreur = $IdLivreur;
    }

    /**
     * @return mixed
     */
    public function getNomLivreur()
    {
        return $this->NomLivreur;
    }

    /**
     * @param mixed $NomLivreur
     */
    public function setNomLivreur($NomLivreur)
    {
        $this->NomLivreur = $NomLivreur;
    }

    /**
     * @return mixed
     */
    public function getNumeroLivreur()
    {
        return $this->NumeroLivreur;
    }

    /**
     * @param mixed $NumeroLivreur
     */
    public function setNumeroLivreur($NumeroLivreur)
    {
        $this->NumeroLivreur = $NumeroLivreur;
    }

}