<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * FOSUser
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FOSUserRepository")
 */
class FOSUser extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="fos_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fos_identifiant", type="string", length=50)
     */
    protected $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="fos_mot_de_passe", type="string", length=50)
     */
    protected $MotDePasse;


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
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return FOSUser
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set MotDePasse
     *
     * @param string $MotDePasse
     *
     * @return FOSUser
     */
    public function setMotDePasse($MotDePasse)
    {
        $this->MotDePasse = $MotDePasse;

        return $this;
    }

    /**
     * Get MotDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }
}

