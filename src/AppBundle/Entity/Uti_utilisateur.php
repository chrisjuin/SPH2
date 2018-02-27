<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Uti_utilisateur
 *
 * @ORM\Table(name="uti_utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Uti_utilisateurRepository")
 */
class Uti_utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="uti_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity="TRA_travail", mappedBy="uti_utilisateur")
     */
    private $traTravails;

    public function __construct()
    {
        $this->traTravails = new ArrayCollection();
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
     * @return Uti_utilisateur
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
     * @return Uti_utilisateur
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
     * Add traTravail
     *
     * @param \AppBundle\Entity\Tra_travail $traTravail
     *
     * @return Uti_utilisateur
     */
    public function addTraTravail(\AppBundle\Entity\Tra_travail $traTravail)
    {
        $this->traTravail[] = $traTravail;

        return $this;
    }

    /**
     * Remove traTravail
     *
     * @param \AppBundle\Entity\Tra_travail $traTravail
     */
    public function removeTraTravail(\AppBundle\Entity\Tra_travail $traTravail)
    {
        $this->traTravail->removeElement($traTravail);
    }

    /**
     * Get traTravail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraTravail()
    {
        return $this->traTravail;
    }
}
