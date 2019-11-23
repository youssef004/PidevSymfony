<?php
namespace ReclamationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoryReclamation")
 *
 */
class CategoryReclamation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idCategoryRec;
    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $libelle;

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getIdCategoryRec()
    {
        return $this->idCategoryRec;
    }

    /**
     * @param mixed $idCategoryRec
     */
    public function setIdCategoryRec($idCategoryRec)
    {
        $this->idCategoryRec = $idCategoryRec;
    }


}
