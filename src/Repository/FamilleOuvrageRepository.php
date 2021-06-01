<?php

namespace App\Repository;

use App\Entity\FamilleOuvrage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FamilleOuvrage|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamilleOuvrage|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamilleOuvrage[]    findAll()
 * @method FamilleOuvrage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilleOuvrageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamilleOuvrage::class);
    }

    // /**
    //  * @return FamilleOuvrage[] Returns an array of FamilleOuvrage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FamilleOuvrage
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
