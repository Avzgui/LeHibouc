<?php

namespace LeHibouc\EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use LeHibouc\EBookLibraryBundle\Entity\Book;
use LeHibouc\EBookLibraryBundle\Form\BookType;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        if ($page < 1) {
          throw $this->createNotFoundException("Page ".$page." doesn't exist.");
        }

        $nbPerPage = 3;

        //Paginator
        $list = $this->getDoctrine()
          ->getManager()
          ->getRepository('EBookLibraryBundle:Book')
          ->getAdverts($page, $nbPerPage)
        ;

        $nbPages = ceil(count($list)/$nbPerPage);

        // If page doesn't exist -> 404
        if ($nbPages != 0 && $page > $nbPages) {
          throw $this->createNotFoundException("Page ".$page." doesn't exist.");
        }

        return $this->render('EBookLibraryBundle:Default:index.html.twig', array(
          'list' => $list,
          'nbPages'     => $nbPages,
          'page'        => $page
        ));
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
