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
    	return new Response("Hello World ! (add)");
    }
    
    public function viewBookAction($slug)
    {
    	return new Response("Hello World ! (book)");
    }

    public function viewBooksAction()
    {
    	return new Response("Hello World ! (books)");
    }
}
