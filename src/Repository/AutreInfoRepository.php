<?php

namespace App\Repository;

use App\Entity\AutreInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AutreInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutreInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutreInfo[]    findAll()
 * @method AutreInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutreInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutreInfo::class);
    }

    // /**
    //  * @return AutreInfo[] Returns an array of AutreInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AutreInfo
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
