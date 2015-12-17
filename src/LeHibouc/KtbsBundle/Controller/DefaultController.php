<?php

namespace LeHibouc\KtbsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KtbsBundle:Default:index.html.twig');
    }
}
