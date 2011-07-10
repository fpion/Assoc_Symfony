<?php

namespace MyApp\AssociationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Member
 *
 * @author pionf
 */

/**
 * @ORM\Entity
 */
class Member {


    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length="255")
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */    
    private $firstname;

    /**
     * @ORM\Column(type="string",length="500")
     * @Assert\MinLength(limit = 3, message = "Le nom de famille doit avoir au moins {{ limit }} caractères")
     */    
    private $lastname;

    /**
     * @ORM\Column(type="string",length="1")
     * @Assert\NotBlank(message = "Veuillez spécifier le sexe du membre")
     * @Assert\Choice(choices = {"M", "F"})
     */    
    private $sexe;
    
        /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */    
    private $birthday;
    /**
     * @ORM\ManyToOne(targetEntity="Category")
     */    
    private $category;

    /**
 * Inverse Side
  * @ORM\ManyToMany(targetEntity="Contact", mappedBy="members")
 */
    private $contacts;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * Get sexe
     *
     * @return string $sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Get sexe
     *
     * @return string $firstname & $lastname
     */
    public function getPrenomNom()
    {
        return $this->firstname.' '.$this->lastname; 
    }
    
    
    /**
     * Set birthday
     *
     * @param date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return date $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set category
     *
     * @param MyApp\AssociationBundle\Entity\Category $category
     */
    public function setCategory(\MyApp\AssociationBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return MyApp\AssociationBundle\Entity\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    public function __construct()
    {
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add contacts
     *
     * @param MyApp\AssociationBundle\Entity\Contact $contacts
     */
    public function addContacts(\MyApp\AssociationBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;
    }

    /**
     * Get contacts
     *
     * @return Doctrine\Common\Collections\Collection $contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}