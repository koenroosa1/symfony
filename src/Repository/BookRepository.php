<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function findAllByGenre(string $genre): array
    {
        return $this->findBy(['genre' => $genre]);
    }

    public function findByAuthor(string $name): array
    {
        $queryBuilder = $this->createQueryBuilder('book');

        return $queryBuilder
            ->select('book, author')
            ->join('book.author', 'author')
            ->where('author.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult()
        ;
    }
}
