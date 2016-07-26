<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class VilleController extends Controller
{
    public function showAction()
    {
        
    	 $em = $this->getDoctrine()->getManager();

    	 $user = $this->container->get('security.context')->getToken()->getUser();

    	 $request = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());
    	return $this->render('MeetupBundle:Default:ville.html.twig', array(
    	     'requete' => $request,
    	 ));
    }
}