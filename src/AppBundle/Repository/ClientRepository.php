<?php

namespace AppBundle\Repository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends \Doctrine\ORM\EntityRepository
{
    public function findClient( $search  ) 
    {
        $qb = $this->createQueryBuilder('client'); 

        $qb->where('client.nom LIKE :nom')
        ->orWhere('client.prenom LIKE :nom')
            ->setParameter('nom', '%'.$search.'%'); 

        return $qb->getQuery()->getResult(); 

    }
}
