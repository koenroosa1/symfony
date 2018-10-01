<?php

namespace App\Repository;

use App\Entity\Jukebox;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jukebox|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jukebox|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jukebox[]    findAll()
 * @method Jukebox[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JukeboxRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jukebox::class);
    }

//    /**
//     * @return Jukebox[] Returns an array of Jukebox objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jukebox
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
