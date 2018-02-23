<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pho_photo
 *
 * @ORM\Table(name="pho_photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Pho_photoRepository")
 */
class Pho_photo
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
     * @ORM\ManyToOne(targetEntity="tra_travail")
     * @ORM\JoinColumn(name="tra_id" , referencedColumnName="tra_id")
     */
    private $traTravaux; 

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
     * @return Pho_photo
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
}

