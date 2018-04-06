<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travail
 *
 * @ORM\Table(name="Travail")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TravailRepository")
 */
class Travail
{
    /**
     * @var int
     *
     * @ORM\Column(name="tra_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_titre", type="string", length=50)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="tra_prix", type="float")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tra_date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tra_date_rappel", type="date", nullable=true)
     */
    private $dateRappel;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_mode_paiment", type="string", length=20)
     */
    private $modePaiment;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_lieux", type="string", length=60, nullable=true)
     */
    private $lieux;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_garantie", type="text", nullable=true)
     */
    private $garantie;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_devis", type="text", nullable=true)
     */
    private $devis;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_process_verbal", type="text", nullable=true)
     */
    private $processVerbal;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_facture", type="text", nullable=true)
     */
    private $facture; 
    
    /**
     * @var string
     * 
     * @ORM\Column(name="tra_date_devis", type="date")
     */
    private $dateDevis; 
    
     /**
     * @ORM\ManyToOne(targetEntity="Client" ,inversedBy="travail")
     * @ORM\JoinColumn(name="cli_id", referencedColumnName="cli_id")
     */
    private $client;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Travail
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Travail
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Travail
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Travail
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateRappel
     *
     * @param \DateTime $dateRappel
     *
     * @return Travail
     */
    public function setDateRappel($dateRappel)
    {
        $this->dateRappel = $dateRappel;

        return $this;
    }

    /**
     * Get dateRappel
     *
     * @return \DateTime
     */
    public function getDateRappel()
    {
        return $this->dateRappel;
    }

    /**
     * Set modePaiment
     *
     * @param string $modePaiment
     *
     * @return Travail
     */
    public function setModePaiment($modePaiment)
    {
        $this->modePaiment = $modePaiment;

        return $this;
    }

    /**
     * Get modePaiment
     *
     * @return string
     */
    public function getModePaiment()
    {
        return $this->modePaiment;
    }

    /**
     * Set lieux
     *
     * @param string $lieux
     *
     * @return Travail
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get lieux
     *
     * @return string
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set garantie
     *
     * @param string $garantie
     *
     * @return Travail
     */
    public function setGarantie($garantie)
    {
        $this->garantie = $garantie;

        return $this;
    }

    /**
     * Get garantie
     *
     * @return string
     */
    public function getGarantie()
    {
        return $this->garantie;
    }

    /**
     * Set devis
     *
     * @param string $devis
     *
     * @return Travail
     */
    public function setDevis($devis)
    {
        $this->devis = $devis;

        return $this;
    }

    /**
     * Get devis
     *
     * @return string
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * Set processVerbal
     *
     * @param string $processVerbal
     *
     * @return Travail
     */
    public function setProcessVerbal($processVerbal)
    {
        $this->processVerbal = $processVerbal;

        return $this;
    }

    /**
     * Get processVerbal
     *
     * @return string
     */
    public function getProcessVerbal()
    {
        return $this->processVerbal;
    }

    /**
     * Set facture
     *
     * @param string $facture
     *
     * @return Travail
     */
    public function setFacture($facture)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return string
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set dateDevis
     *
     * @param \DateTime $dateDevis
     *
     * @return Travail
     */
    public function setDateDevis($dateDevis)
    {
        $this->dateDevis = $dateDevis;

        return $this;
    }

    /**
     * Get dateDevis
     *
     * @return \DateTime
     */
    public function getDateDevis()
    {
        return $this->dateDevis;
    }
    

    /**
     * Set client
     *
     * @param \AppBundle\Entity\client $client
     *
     * @return Travail
     */
    public function setClient(\AppBundle\Entity\client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\client
     */
    public function getClient()
    {
        return $this->client;
    }

}

