<?php

namespace LeHibouc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function menuAction()
    {
    	return $this->render('UserBundle:Default:menu.html.twig');
    }
}
