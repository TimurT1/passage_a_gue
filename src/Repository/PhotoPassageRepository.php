<?php

namespace App\Repository;

use App\Entity\PhotoPassage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PhotoPassage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoPassage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoPassage[]    findAll()
 * @method PhotoPassage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoPassageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotoPassage::class);
    }

    // /**
    //  * @return PhotoPassage[] Returns an array of PhotoPassage objects
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
    public function findOneBySomeField($value): ?PhotoPassage
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
