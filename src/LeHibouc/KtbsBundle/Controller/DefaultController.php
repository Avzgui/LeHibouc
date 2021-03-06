<?php

namespace LeHibouc\KtbsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{	
	/**
     * @Route("/ktbs/post", name="ktbs_post")
     * @Method({"POST","GET"})
     */
    public function postTraceAction()
    {
    	return new Response('<h1>POST marche</h1>');
    }
    
    /**
     * @Route("/ktbs/put", name="ktbs_put")
     * @Method({"PUT","GET"})
     */
    public function putTraceAction()
    {
        return new Response('<h1>PUT marche</h1>');
    }
    
    /**
     * @Route("/ktbs/get", name="ktbs_get")
     */
    public function getTraceAction()
    {
    	$slug = "dd";
        return new Response('<h1>GET marche : '.$slug.'</h1>');
    }
    
    public function indexAction()
    {
        return $this->render('KtbsBundle:Default:index.html.twig');
    }
}
