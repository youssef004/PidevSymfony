<?php
namespace CommandeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Favoris")
 */
class Favoris
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $idFavoris;

    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $libelleFav;

    /**
     * @return mixed
     */
    public function getIdFavoris()
    {
        return $this->idFavoris;
    }

    /**
     * @param mixed $idFavoris
     */
    public function setIdFavoris($idFavoris)
    {
        $this->idFavoris = $idFavoris;
    }

    /**
     * @return mixed
     */
    public function getLibelleFav()
    {
        return $this->libelleFav;
    }

    /**
     * @param mixed $libelleFav
     */
    public function setLibelleFav($libelleFav)
    {
        $this->libelleFav = $libelleFav;
    }


}
?>