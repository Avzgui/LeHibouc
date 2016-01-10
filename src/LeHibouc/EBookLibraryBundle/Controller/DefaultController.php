<?php

namespace LeHibouc\EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
      if ($page < 1) {
        throw $this->createNotFoundException("Page ".$page." doesn't exist.");
      }

      $nbPerPage = 3;
      
      //If user is not authenticated
      if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

        //Paginator
        $list = $this->getDoctrine()
          ->getManager()
          ->getRepository('EBookLibraryBundle:Book')
          ->getBooks($page, $nbPerPage)
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

      //If user is authenticated

      //Get the user
      $user = $this->getUser();

      $list = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:UserBook')
        ->getBooksNotBorrowedByUser($user, $page, $nbPerPage)
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
    
    public function viewBookAction($slug, Request $request)
    {
        //Find the book
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

        
        //If book doesn't exist
        if ($book === null) {
          throw $this->createNotFoundException("The book you are looking for doesn't exist.");
        }
        
        //Check if already borrowed
        $user = $this->getUser();
        $borrowed = null;
        if( $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
          
          $borrowed = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:UserBook')
            ->isAlreadyBorrowed($user, $book);
        }

        return $this->render('EBookLibraryBundle:Default:book.html.twig', array(
            'book'  => $book,
            'borrowed' => $borrowed,
        ));
    }

    public function bookReaderAction($slug, Request $request)
    {
      //Find the book
      $em = $this->getDoctrine()->getManager();
      $book = $em->getRepository('EBookLibraryBundle:Book')->findOneBySlug($slug);

      //If book doesn't exist
      if ($book === null) {
        throw $this->createNotFoundException("The book you are looking for doesn't exist.");
      }

      return $this->render('EBookLibraryBundle:Default:reader.html.twig');
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
