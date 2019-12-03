<?php


namespace ProduitBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class CategoryProduit
{


    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private  $IdCategoryProd;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private  $LibelleProd;

    /**
     * @return mixed
     */
    public function getIdCategoryProd()
    {
        return $this->IdCategoryProd;
    }

    /**
     * @param mixed $IdCategoryProd
     */
    public function setIdCategoryProd($IdCategoryProd)
    {
        $this->IdCategoryProd = $IdCategoryProd;
    }

    /**
     * @return mixed
     */
    public function getLibelleProd()
    {
        return $this->LibelleProd;
    }

    /**
     * @param mixed $LibelleProd
     */
    public function setLibelleProd($LibelleProd)
    {
        $this->LibelleProd = $LibelleProd;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string) $this->getLibelleProd();
    }


}