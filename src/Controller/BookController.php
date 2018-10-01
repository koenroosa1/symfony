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
 * @Route("/book")
 */
class BookController extends AbstractController
{
    /**
     * @Route("/", name="book_index", methods="GET")
     * @param BookRepository $bookRepository
     *
     * @return Response
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', ['books' => $bookRepository->findAll()]);
    }

    /**
     * @Route("/new", name="book_new", methods="GET|POST")
     * @param Request $request
     *
     * @return Response
     */
    public function new(Request $request): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book_index');
        }

        return $this->render('book/new.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/total", name="book_total", methods="GET")
     * @param BookRepository $bookRepository
     *
     * @return Response
     */
    public function total(BookRepository $bookRepository)
    {
        $books = $bookRepository->findAll();
        $total = 0;
        foreach ($books as $book) {
            $total += $book->getPrice();
        }
        return $this->render('book/total.html.twig', ['total' => $total]);
    }

    /**
     * @Route("/{id}", name="book_show", methods="GET")
     * @param Book $book
     *
     * @return Response
     */
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', ['book' => $book]);
    }

    /**
     * @Route("/{id}/edit", name="book_edit", methods="GET|POST")
     * @param Request $request
     * @param Book    $book
     *
     * @return Response
     */
    public function edit(Request $request, Book $book): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('book_edit', ['id' => $book->getId()]);
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="book_delete", methods="DELETE")
     * @param Request $request
     * @param Book    $book
     *
     * @return Response
     */
    public function delete(Request $request, Book $book): Response
    {
        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
        }

        return $this->redirectToRoute('book_index');
    }

    /**
     * @Route("/filter/{genre}", name="book_filter", methods="GET")
     * @param string         $genre
     * @param BookRepository $bookRepository
     *
     * @return Response
     */
    public function filter(string $genre, BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', ['books' => $bookRepository->findAllByGenre($genre)]);
    }
}
