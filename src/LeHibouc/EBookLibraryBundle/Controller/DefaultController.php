<?php

namespace LeHibouc\EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use LeHibouc\EBookLibraryBundle\Entity\Book;
use LeHibouc\EBookLibraryBundle\Form\BookType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EBookLibraryBundle:Default:index.html.twig');
    }

    public function addBookAction(Request $request)
    {
    	$book = new Book();
	    $form = $this->get('form.factory')->create(new BookType(), $book);

	    if ($form->handleRequest($request)->isValid()) {

	      $em = $this->getDoctrine()->getManager();
	      $em->persist($book);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Book saved');

	      return $this->redirect($this->generateUrl('library_book', array('slug' => $book->getSlug())));
	    }

	    return $this->render('EBookLibraryBundle:Default:add.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }
    
    public function viewBookAction($slug, Request $request)
    {
    	return new Response("TODO ! (book)");
    }

    public function viewBooksAction(Request $request)
    {
    	return new Response("TODO ! (books)");
    }

    public function latestAction($limit = 3)
    {
        $list = $this->getDoctrine()
          ->getManager()
          ->getRepository('EBookLibraryBundle:Book')
          ->findBy(
            array(),
            array('date' => 'desc'),
            $limit,
            0
        );

        return $this->render('EBookLibraryBundle:Default:latest.html.twig', array(
          'list' => $list
        ));
    }
}
