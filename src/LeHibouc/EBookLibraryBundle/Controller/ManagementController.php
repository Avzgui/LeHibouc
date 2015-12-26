<?php

namespace LeHibouc\EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use LeHibouc\EBookLibraryBundle\Entity\Book;
use LeHibouc\EBookLibraryBundle\Form\BookType;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class ManagementController extends Controller
{

    /* --- Books Management --- */

    public function addBookAction(Request $request)
    {
    	$book = new Book();
	    $form = $this->get('form.factory')->create(new BookType(), $book);

	    if ($form->handleRequest($request)->isValid()) {

	      $em = $this->getDoctrine()->getManager();
	      $em->persist($book);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Book uploaded');

	      return $this->redirect($this->generateUrl('library_book', array('slug' => $book->getSlug())));
	    }

	    return $this->render('EBookLibraryBundle:Management:add.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }

    public function editBookAction($slug, Request $request)
    {
        //Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        //Create the form
        $form = $this->createForm(new BookType(), $book);

        //Check if form is valid
        if ($form->handleRequest($request)->isValid()) {
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Book metadata updated');

          return $this->redirect($this->generateUrl('library_book', array('slug' => $book->getSlug())));
        }

        return $this->render('EBookLibraryBundle:Management:edit.html.twig', array(
            'form' => $form->createView(),
            'book' => $book
        ));
    }

    public function deleteBookAction($slug, Request $request)
    {
        //Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        return $this->render('EBookLibraryBundle:Management:delete.html.twig', array(
            'book' => $book
        ));
    }

    /* --- Authors Management (TODO later) --- */
}
