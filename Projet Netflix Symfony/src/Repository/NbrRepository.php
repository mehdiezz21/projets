<?php

namespace App\Repository;

use App\Entity\Nbr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nbr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nbr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nbr[]    findAll()
 * @method Nbr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NbrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nbr::class);
    }

    // /**
    //  * @return Nbr[] Returns an array of Nbr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nbr
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
