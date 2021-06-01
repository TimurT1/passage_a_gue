<?php

namespace App\Repository;

use App\Entity\Submersion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Submersion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Submersion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Submersion[]    findAll()
 * @method Submersion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubmersionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Submersion::class);
    }

    // /**
    //  * @return Submersion[] Returns an array of Submersion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Submersion
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
