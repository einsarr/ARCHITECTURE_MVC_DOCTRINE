<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="formation")
**/
class Formation
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    * @ORM\Column(type="string")
    */
    private $nom;
    /**
    * @ORM\Column(type="datetime", name="date")
    */
    private $date;
    /**
    * @ORM\Column(type="integer")
    */
    private $duree;
    /**
     * Many formations have one lieu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id")
     */
    private $lieu;
    

    public function __construct()
    {
       
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function getLieu()
    {
        return $this->lieu;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom." - Date : ".$this->duree." - Lieu : ".$this->lieu;
    }
}