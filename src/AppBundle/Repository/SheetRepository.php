<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SheetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SheetRepository extends EntityRepository
{

    public function getPersonneByPrenon(){

        $qb=$this->createQueryBuilder("p");

        $query=$qb
            ->where("p.prenom = :prenom")
            ->setParameter("prenom","Dali");

        $resultat= $query;

        var_dump($resultat);

        return $resultat ;


    }
}
