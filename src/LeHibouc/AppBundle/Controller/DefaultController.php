<?php

namespace LeHibouc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function menuAction()
    {
    	return $this->render('AppBundle:Default:menu.html.twig');
    }
}
