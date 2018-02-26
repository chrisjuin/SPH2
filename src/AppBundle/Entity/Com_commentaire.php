<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Com_commentaire
 *
 * @ORM\Table(name="com_commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Com_commentaireRepository")
 */
class Com_commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="com_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="com_commentaire", type="text")
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="uti_utilisateur")
     * @ORM\JoinColumn(name="uti_id" , referencedColumnName="uti_id")
     */
    private $utiUtilisateur; 
    
    /**
     * @ORM\ManyToOne(targetEntity="tra_travail")
     * @ORM\JoinColumn(name="tra_id" , referencedColumnName="tra_id")
     */
    private $traTravail; 

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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Com_commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set utiUtilisateur
     *
     * @param \AppBundle\Entity\uti_utilisateur $utiUtilisateur
     *
     * @return Com_commentaire
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

    /**
     * Set traTravail
     *
     * @param \AppBundle\Entity\tra_travail $traTravail
     *
     * @return Com_commentaire
     */
    public function setTraTravail(\AppBundle\Entity\tra_travail $traTravail = null)
    {
        $this->traTravail = $traTravail;

        return $this;
    }

    /**
     * Get traTravail
     *
     * @return \AppBundle\Entity\tra_travail
     */
    public function getTraTravail()
    {
        return $this->traTravail;
    }
}
