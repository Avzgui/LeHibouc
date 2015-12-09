<?php

namespace Avzgui\LeHiboucBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LeHiboucBundle:Default:index.html.twig');
    }
}
