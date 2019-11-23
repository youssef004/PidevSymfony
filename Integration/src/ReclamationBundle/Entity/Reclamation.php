<?php
namespace ReclamationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reclamation")
 */
class Reclamation
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idRec;
    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $subject;
    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $description;
    /**
     *
     * @ORM\Column(type="date")
     *
     */
    private $date;
    /**
     *
     * @ORM\Column(type="string", length=255)
     *
     */
    private $state;

    /**
     *@ORM\Column(type="string", length=255)
     *@ORM\ManyToOne(targetEntity="CategoryReclamation")
     *@ORM\JoinColumn(name="CategoryR",
     *referencedColumnName="idCategoryRec")
     */
    private $CategoryR;

    /**
     * @return mixed
     */
    public function getIdRec()
    {
        return $this->idRec;
    }

    /**
     * @param mixed $idRec
     */
    public function setIdRec($idRec)
    {
        $this->idRec = $idRec;
    }


    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCategoryR()
    {
        return $this->CategoryR;
    }

    /**
     * @param mixed $CategoryR
     */
    public function setCategoryR($CategoryR)
    {
        $this->CategoryR = $CategoryR;
    }

}
