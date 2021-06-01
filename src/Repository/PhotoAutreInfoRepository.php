<?php

namespace App\Repository;

use App\Entity\PhotoAutreInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PhotoAutreInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoAutreInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoAutreInfo[]    findAll()
 * @method PhotoAutreInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoAutreInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotoAutreInfo::class);
    }

    // /**
    //  * @return PhotoAutreInfo[] Returns an array of PhotoAutreInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PhotoAutreInfo
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
