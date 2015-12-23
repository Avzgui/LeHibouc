<?php

namespace LeHibouc\EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EBookLibraryBundle:Default:index.html.twig');
    }

    public function addBookAction()
    {
    	return new Response("TODO ! (add)");
    }
    
    public function viewBookAction($slug)
    {
    	return new Response("TODO ! (book)");
    }

    public function viewBooksAction()
    {
    	return new Response("TODO ! (books)");
    }
}
