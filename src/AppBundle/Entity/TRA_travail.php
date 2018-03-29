<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tra_travail
 *
 * @ORM\Table(name="tra_travail")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TRA_travailRepository")
 */
class TRA_travail
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
     * @ORM\Column(name="tra_date_rappel", type="date")
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
     * @ORM\Column(name="tra_lieux", type="string", length=60)
     */
    private $lieux;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_garantie", type="text")
     */
    private $garantie;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_devis", type="text")
     */
    private $devis;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_process_verbal", type="text")
     */
    private $processVerbal;

    /**
     * @var string
     *
     * @ORM\Column(name="tra_facture", type="text")
     */
    private $facture; 
    
    /**
     * @var string
     * 
     * @ORM\Column(name="tra_date_devis", type="date")
     */
    private $dateDevis; 
    
    /**
     * @var string
     * 
     * @ORM\Column(name="tra_note", type="text")
     */
    private $note; 

     /**
     * @ORM\ManyToOne(targetEntity="Cli_client" ,inversedBy="tra_travail")
     * @ORM\JoinColumn(name="cli_id", referencedColumnName="cli_id")
     */
    private $cliClient;

    /**    
     * @ORM\ManyToOne(targetEntity="Uti_utilisateur" ,inversedBy="tra_travail")
     * @ORM\JoinColumn(name="uti_id", referencedColumnName="uti_id")
     */
    private $utiUtilisateur;

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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * @return TRA_travail
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
     * Set cliClient
     *
     * @param \AppBundle\Entity\cli_client $cliClient
     *
     * @return TRA_travail
     */
    public function setCliClient(\AppBundle\Entity\cli_client $cliClient = null)
    {
        $this->cliClient = $cliClient;

        return $this;
    }

    /**
     * Get cliClient
     *
     * @return \AppBundle\Entity\cli_client
     */
    public function getCliClient()
    {
        return $this->cliClient;
    }

    /**
     * Set utiUtilisateur
     *
     * @param \AppBundle\Entity\uti_utilisateur $utiUtilisateur
     *
     * @return TRA_travail
     */
    public function setUtiUtilisateur(\AppBundle\Entity\uti_utilisateur $utiUtilisateur = null)
    {
        $this->utiUtilisateur = $utiUtilisateur;

        return $this;
    }

    /**
     * Get utiUtilisateur
     *
     * @return \AppBundle\Entity\uti_utilisateur
     */
    public function getUtiUtilisateur()
    {
        return $this->utiUtilisateur;
    }

}

