<?php

namespace LeHibouc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use LeHibouc\EBookLibraryBundle\Entity\Book;
use LeHibouc\EBookLibraryBundle\Form\BookType;

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
    	//Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        return $this->render('AppBundle:User:borrow.html.twig', array(
        	'book' => $book
        ));
    }

    public function returnBookAction($slug, Request $request)
    {
    	//Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        //Check if not null before continue
        if ($book == null) {
          throw $this->createNotFoundException("There is no book with slug : " . $slug . " in base");
        }

        return $this->render('AppBundle:User:return.html.twig', array(
        	'book' => $book
        ));
    }

}
