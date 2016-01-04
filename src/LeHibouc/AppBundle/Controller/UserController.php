<?php

namespace LeHibouc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use LeHibouc\EBookLibraryBundle\Entity\Book;
use LeHibouc\EBookLibraryBundle\Form\BookType;
use LeHibouc\AppBundle\Entity\UserBook;

/**
 * @Security("has_role('ROLE_USER')")
 */
class UserController extends Controller
{
    public function indexAction(Request $request)
    {
    	//Get the user
    	$user = $this->getUser();
    	
    	//Get list of books borrowed by the user
    	$list = $this->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:UserBook')
          ->getBooksBorrowedByUser($user)
        ;

        return $this->render('AppBundle:User:index.html.twig', array(
        	'list' => $list
        ));
    }

    public function borrowAction($slug, Request $request)
    {
    	//Get the user
    	$user = $this->getUser();

    	//Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        //Check if the book aren't already borrowed
        $borrowed = $this->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:UserBook')
          ->isAlreadyBorrowed($user, $book)
        ;

        //Create empty form with just CSRF
        $form = $this->createFormBuilder()->getForm();

        if (!$borrowed) {

	        if ($form->handleRequest($request)->isValid()) {

	          $userBook = new UserBook();
	          $userBook->setBook($book);
	          $userBook->setUser($user);

	          //TODO : set the number of pages already read

	          $em->persist($userBook);
	          $em->flush();

	          $request->getSession()->getFlashBag()->add('info', "".$book->getTitle()." borrowed");

	          return $this->redirect($this->generateUrl('user_index'));
	        }
    	}

        return $this->render('AppBundle:User:borrow.html.twig', array(
        	'book' => $book,
        	'borrowed' => $borrowed,
        	'form' => $form->createView()
        ));
    }

    public function returnBookAction($slug, Request $request)
    {
    	//Get the user
    	$user = $this->getUser();

    	//Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        //Check if the book aren't already borrowed
        $borrowed = $this->getDoctrine()
          ->getManager()
          ->getRepository('AppBundle:UserBook')
          ->isAlreadyBorrowed($user, $book)
        ;

        //Create empty form with just CSRF
        $form = $this->createFormBuilder()->getForm();

        if ($borrowed) {

	        if ($form->handleRequest($request)->isValid()) {

		      $borrowed->setReturned(new \DateTime('now'));

	          //TODO : set the number of pages already read

	          $em->flush();

	          $request->getSession()->getFlashBag()->add('info', "".$book->getTitle()." returned");

	          return $this->redirect($this->generateUrl('user_index'));
	        }
    	}

        return $this->render('AppBundle:User:return.html.twig', array(
        	'book' => $book,
        	'borrowed' => $borrowed,
        	'form' => $form->createView()
        ));
    }

}
