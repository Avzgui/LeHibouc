<?php

namespace EBookLibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EBookLibraryBundle:Default:index.html.twig');
    }
}
