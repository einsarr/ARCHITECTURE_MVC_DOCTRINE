<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity()
* @ORM\Table(name="roles")
**/
class Roles
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
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getUsers()
    {
        return $this->users;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setUsers($users)
    {
        $this->users = $users;
    }
   
    public function toString()
    {
        return "Id : ".$this->id." - Nom : ".$this->nom;
    }
}