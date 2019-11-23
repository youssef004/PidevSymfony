<?php


namespace DeliveryBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Livraison
{
    /**
     * @ORM\column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private  $IdLivraison;
    /**
     * @ORM\column(type="string",length=255)
     *
     */
    private  $DescriptionLivraison;
    /**
     * @ORM\column(type="date")
     *
     */
    private $DateLivraison;
    /**
     * @ORM\column(type="string")
     *
     */
    private $StateLivraison;

    /**
     * @return mixed
     */
    public function getIdLivraison()
    {
        return $this->IdLivraison;
    }

    /**
     * @param mixed $IdLivraison
     */
    public function setIdLivraison($IdLivraison)
    {
        $this->IdLivraison = $IdLivraison;
    }

    /**
     * @return mixed
     */
    public function getDescriptionLivraison()
    {
        return $this->DescriptionLivraison;
    }

    /**
     * @param mixed $DescriptionLivraison
     */
    public function setDescriptionLivraison($DescriptionLivraison)
    {
        $this->DescriptionLivraison = $DescriptionLivraison;
    }

    /**
     * @return mixed
     */
    public function getDateLivraison()
    {
        return $this->DateLivraison;
    }

    /**
     * @param mixed $DateLivraison
     */
    public function setDateLivraison($DateLivraison)
    {
        $this->DateLivraison = $DateLivraison;
    }

    /**
     * @return mixed
     */
    public function getStateLivraison()
    {
        return $this->StateLivraison;
    }

    /**
     * @param mixed $StateLivraison
     */
    public function setStateLivraison($StateLivraison)
    {
        $this->StateLivraison = $StateLivraison;
    }


}