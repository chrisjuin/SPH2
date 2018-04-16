<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\ManyToOne(targetEntity="Travail" ,inversedBy="commentaires")
     * @ORM\JoinColumn(name="tra_id" , referencedColumnName="tra_id")
     */
    private $travail; 

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
     * @return Commentaire
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
     * Set travail
     *
     * @param \AppBundle\Entity\travail $travail
     *
     * @return Commentaire
     */
    public function setTravail(\AppBundle\Entity\travail $travail = null)
    {
        $this->travail = $travail;

        return $this;
    }

    /**
     * Get travail
     *
     * @return \AppBundle\Entity\travail
     */
    public function getTravail()
    {
        return $this->travail;
    }
}
