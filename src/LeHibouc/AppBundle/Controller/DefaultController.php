<?php

namespace LeHibouc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	//If the user is connected
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

    		//If the user is an admin
    		if ($this->get('security.context')->isGranted('ROLE_ADMIN')){
    			return $this->redirectToRoute('admin_index');
    		}

    		return $this->redirectToRoute('user_index');
    	}

        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function menuAction()
    {
    	return $this->render('AppBundle:Default:menu.html.twig');
    }
}
