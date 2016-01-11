<?php

namespace LeHibouc\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Admin:index.html.twig');
    }

    public function usersAction(Request $request)
    {
    	$userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('AppBundle:Admin:users_list.html.twig', 
            array('users' =>   $users));
    }
}
