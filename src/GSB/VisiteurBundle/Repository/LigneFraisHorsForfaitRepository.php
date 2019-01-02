<?php

namespace GSB\VisiteurBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * LigneFraisHorsForfaitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LigneFraisHorsForfaitRepository extends \Doctrine\ORM\EntityRepository
{
    function listerLigneFraisHorsForfait($fichefrais)
    {
    $qb = $this->_em->createQueryBuilder();
    $qb->select('v')
    ->from('GSBVisiteurBundle:LigneFraisHorsForfait', 'v')
    ->where ($qb->expr()->eq('v.fichefrais',':val'))
    ->setParameter('val',$fichefrais);
    $query = $qb->getQuery();
    $resultat = $query->getResult();
    return $resultat;
    }
    
}
