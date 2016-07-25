<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class VilleController extends Controller
{
    public function showAction()
    {
        // replace this example code with whatever you need
        return $this->render('MeetupBundle:Default:ville.html.twig');
    }
}