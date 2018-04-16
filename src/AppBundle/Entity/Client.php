<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="cli_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_prenom", type="string", length=50)
     */
    private $prenom;


    /**
     * @var string
     *
     * @ORM\Column(name="cli_provenance", type="string" , length=15)
     */
    private $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_email", type="string", length=60)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_adresse", type="string", length=80)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_code_postal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_ville", type="string", length=60)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_note", type="text")
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_telephone", type="string", length=10)
     */
    private $telephone;

    /**
     * @ORM\OneToMany(targetEntity="Travail" ,mappedBy="client")
     */
    private $travaux;

    public function __construct()
    {
        $this->travaux = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
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
     *
     * @return Client
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
     * Set provenance
     *
     * @param string $provenance
     *
     * @return Client
     */
    public function setProvenance($provenance)
    {
        $this->provenance = $provenance;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return string
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Client
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Add travail
     *
     * @param \AppBundle\Entity\Travail $travail
     *
     * @return Client
     */
    public function addTravail(\AppBundle\Entity\Travail $travail)
    {
        $this->travaux[] = $travail;

        return $this;
    }

    /**
     * Remove travail
     *
     * @param \AppBundle\Entity\Travail $travail
     */
    public function removeTravail(\AppBundle\Entity\Travail $travail)
    {
        $this->travaux->removeTravail($travail);
    }

    /**
     * Get travail
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTravaux()
    {
        return $this->travaux;
    }
}
