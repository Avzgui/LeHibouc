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

	      $request->getSession()->getFlashBag()->add('notice', 'Book saved');

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

        return $this->render('EBookLibraryBundle:Management:edit.html.twig');
    }

    public function deleteBookAction($slug, Request $request)
    {
        //Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);
        
        return $this->render('EBookLibraryBundle:Management:delete.html.twig');
    }

    /* --- Authors Management (TODO later) --- */
}
