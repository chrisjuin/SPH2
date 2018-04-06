<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * FOSUser
 *
 * @ORM\Table(name="Fos_user")
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
    }
    
}
