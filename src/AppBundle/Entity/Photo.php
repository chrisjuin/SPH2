<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pho_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pho_url", type="string", length=255)
     */
    private $url;


    /**
     * @ORM\ManyToOne(targetEntity="Travail" ,inversedBy="photos")
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
     * Set url
     *
     * @param string $url
     *
     * @return Photo
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set travaux
     *
     * @param \AppBundle\Entity\travail $travail
     *
     * @return Photo
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
    public function getTraTravail()
    {
        return $this->travail;
    }
}
