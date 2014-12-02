<?php

namespace Croangels\ESV\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Croangels\ESV\UtilisateurBundle\Entity\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Votre prénom doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre prénom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="dateNaissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="adrRue", type="string", length=255, nullable=true)
     */
    private $adrRue;

    /**
     * @var string
     *
     * @ORM\Column(name="adrVille", type="string", length=255, nullable=true)
     */
    private $adrVille;

    /**
     * @var string
     *
     * @ORM\Column(name="adrPays", type="string", length=255, nullable=true)
     */
    private $adrPays;

    /**
     * @var string
     *
     * @ORM\Column(name="adrCodePostal", type="string", length=255, nullable=true)
     */
    private $adrCodePostal;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set adrRue
     *
     * @param string $adrRue
     * @return Utilisateur
     */
    public function setAdrRue($adrRue)
    {
        $this->adrRue = $adrRue;

        return $this;
    }

    /**
     * Get adrRue
     *
     * @return string
     */
    public function getAdrRue()
    {
        return $this->adrRue;
    }

    /**
     * Set adrVille
     *
     * @param string $adrVille
     * @return Utilisateur
     */
    public function setAdrVille($adrVille)
    {
        $this->adrVille = $adrVille;

        return $this;
    }

    /**
     * Get adrVille
     *
     * @return string
     */
    public function getAdrVille()
    {
        return $this->adrVille;
    }

    /**
     * Set adrPays
     *
     * @param string $adrPays
     * @return Utilisateur
     */
    public function setAdrPays($adrPays)
    {
        $this->adrPays = $adrPays;

        return $this;
    }

    /**
     * Get adrPays
     *
     * @return string
     */
    public function getAdrPays()
    {
        return $this->adrPays;
    }

    /**
     * Set adrCodePostal
     *
     * @param string $adrCodePostal
     * @return Utilisateur
     */
    public function setAdrCodePostal($adrCodePostal)
    {
        $this->adrCodePostal = $adrCodePostal;

        return $this;
    }

    /**
     * Get adrCodePostal
     *
     * @return string
     */
    public function getAdrCodePostal()
    {
        return $this->adrCodePostal;
    }
}
