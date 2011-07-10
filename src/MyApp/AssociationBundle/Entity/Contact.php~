<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Contact
 *
 * @author pionf
 */

/**
 * @ORM\Entity
 */
class Contact {

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
     */
    private $lastname;
    /**
     * @ORM\Column(type="string",length="1")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"M", "F"})
     */
    private $sexe;
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $birthday;
    /**
     * @ORM\Column(type="string",length="255")
     * @Assert\Email
     */
    private $email;
    /**
     * @ORM\Column(type="string",length="12")
     */
    private $tel;
   
    /**
     * Owning Side
     *
     * @ORM\ManyToMany(targetEntity="Member", inversedBy="contacts")
     * @ORM\JoinTable(name="contacts_member",
     *      joinColumns={@ORM\JoinColumn(name="contact_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="member_id", referencedColumnName="id")}
     *      )
     */
    private $members;

    public function __construct()
    {
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * Get tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add members
     *
     * @param MyApp\AssociationBundle\Entity\Member $members
     */
    public function addMembers(\MyApp\AssociationBundle\Entity\Member $members)
    {
        $this->members[] = $members;
    }

    /**
     * Get members
     *
     * @return Doctrine\Common\Collections\Collection $members
     */
    public function getMembers()
    {
        return $this->members;
    }
    
    public function getPrenomNom()
    {
        return $this->firstname.' '.$this->lastname; 
    }
}