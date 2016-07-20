<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
    public function showAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MeetupBundle:GroupesPHP')
            ;

            // $membresPHPParis = $repository->MembersByCity('PHP', 'paris');
            // $membresJavaScriptParis = $repository->MembersByCity('JavaScript', 'paris');
            // $membresRubyParis = $repository->MembersByCity('Ruby', 'paris');
            // $membresIOSParis = $repository->MembersByCity('IOS', 'paris');
            //
            // $membresPHPParis = $membresPHPParis[0];
            // $membresJavaScriptParis = $membresJavaScriptParis[0];
            // $membresRubyParis = $membresRubyParis[0];
            // $membresIOSParis = $membresIOSParis[0];
            $graph = $repository->Graph();

            $response = new Response();
            $response->setContent(json_encode($graph));
            $response->headers->set('Content-Type', 'application/json');
            var_dump($response); exit;

        return $this->render('MeetupBundle:Default:accueil.html.twig'
        // array(
        //     'membresPHPParis'       =>$membresPHPParis,
        //     'membresJavaScriptParis'=>$membresJavaScriptParis,
        //     'membresRubyParis'      =>$membresRubyParis,
        //     'membresIOSParis'    =>$membresIOSParis
        // )
    );
    }
}
