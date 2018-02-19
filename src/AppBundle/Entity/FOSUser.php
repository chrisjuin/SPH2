<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * FOSUser
 *
 * @ORM\Table(name="f_o_s_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FOSUserRepository")
 */
class FOSUser extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=40)
     */
    protected $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60)
     */
    protected $password;


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
     * Set password
     *
     * @param string $password
     *
     * @return FOSUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}

