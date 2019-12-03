<?php


namespace ProduitBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produit
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
 private  $IdProduit;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
 private  $NameProduit;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
 private $TypeProduit;
    /**
     * @ORM\Column(type="integer")
     *
     */
 private $QuantityProduit;
    /**
     * @ORM\Column(type="integer")
     *
     */
 private $PriceProduit;
    /**
     * @ORM\Column(type="string",length=255)
     * @var string
     */
 private $PictureProduit;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
 private $DescriptionProduit;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    private $DateProduit;
    /**
     * @ORM\ManyToOne(targetEntity="CategoryProduit")
     * @ORM\JoinColumn(name="Category",referencedColumnName="id_category_prod")
     */
    private $Category;

    /**

     * @ORM\Column(name="Promotion", type="boolean", nullable=true, options={"default":false})
     */
    protected $Promotion;


    /**

     *
     * @return mixed
     */
    public function getDateProduit()
    {
        return $this->DateProduit;
    }

    /**
     * @param mixed $DateProduit
     */
    public function setDateProduit($DateProduit)
    {
        $this->DateProduit = $DateProduit;
    }

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->IdProduit;
    }

    /**
     * @param mixed $IdProduit
     */
    public function setIdProduit($IdProduit)
    {
        $this->IdProduit = $IdProduit;
    }

    /**
     * @return mixed
     */
    public function getNameProduit()
    {
        return $this->NameProduit;
    }

    /**
     * @param mixed $NameProduit
     */
    public function setNameProduit($NameProduit)
    {
        $this->NameProduit = $NameProduit;
    }

    /**
     * @return mixed
     */
    public function getTypeProduit()
    {
        return $this->TypeProduit;
    }

    /**
     * @param mixed $TypeProduit
     */
    public function setTypeProduit($TypeProduit)
    {
        $this->TypeProduit = $TypeProduit;
    }

    /**
     * @return mixed
     */
    public function getQuantityProduit()
    {
        return $this->QuantityProduit;
    }

    /**
     * @param mixed $QuantityProduit
     */
    public function setQuantityProduit($QuantityProduit)
    {
        $this->QuantityProduit = $QuantityProduit;
    }

    /**
     * @return mixed
     */
    public function getPriceProduit()
    {
        return $this->PriceProduit;
    }

    /**
     * @param mixed $PriceProduit
     */
    public function setPriceProduit($PriceProduit)
    {
        $this->PriceProduit = $PriceProduit;
    }

    /**
     * @return mixed
     */
    public function getPictureProduit()
    {
        return $this->PictureProduit;
    }

    /**
     * @param mixed $PictureProduit
     */
    public function setPictureProduit($PictureProduit)
    {
        $this->PictureProduit = $PictureProduit;
    }

    /**
     * @return mixed
     */
    public function getDescriptionProduit()
    {
        return $this->DescriptionProduit;
    }

    /**
     * @param mixed $DescriptionProduit
     */
    public function setDescriptionProduit($DescriptionProduit)
    {
        $this->DescriptionProduit = $DescriptionProduit;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param mixed $Category
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
    }

    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->Promotion;
    }

    /**
     * @param mixed $Promotion
     */
    public function setPromotion($Promotion)
    {
        $this->Promotion = $Promotion;
    }




}