<?php

namespace App\Repository;

use App\Entity\Faw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Faw|null find($id, $lockMode = null, $lockVersion = null)
 * @method Faw|null findOneBy(array $criteria, array $orderBy = null)
 * @method Faw[]    findAll()
 * @method Faw[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FawRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Faw::class);
    }

//    /**
//     * @return Faw[] Returns an array of Faw objects
//     */
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
    public function findOneBySomeField($value): ?Faw
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
