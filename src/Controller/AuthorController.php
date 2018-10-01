<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/author")
 */
class AuthorController extends AbstractController
{
    /**
     * @Route("/{name}/books", name="author_books", methods="GET")
     */
    public function authorBooks(string $name, BookRepository $bookRepository): Response
    {
        return $this->render(
            'book/author.html.twig',
            ['name' => $name, 'books' => $bookRepository->findByAuthor($name)]
        );
    }
}
