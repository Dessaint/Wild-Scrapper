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

            $membresPHPParis = $repository->MembersByCity('PHP', 'paris');
            $membresJavaScriptParis = $repository->MembersByCity('JavaScript', 'paris');
            $membresRubyParis = $repository->MembersByCity('Ruby', 'paris');
            $membresIOSParis = $repository->MembersByCity('IOS', 'paris');

            $membresPHPParis = $membresPHPParis[0];
            $membresJavaScriptParis = $membresJavaScriptParis[0];
            $membresRubyParis = $membresRubyParis[0];
            $membresIOSParis = $membresIOSParis[0];

            $membresParis = [$membresPHPParis, $membresJavaScriptParis, $membresRubyParis, $membresIOSParis];

            //var_dump($membresParis); exit;

            $membresPHPLoupe = $repository->MembersByCity('PHP', 'la+loupe');
            $membresJavaScriptLoupe = $repository->MembersByCity('JavaScript', 'la+loupe');
            $membresRubyLoupe = $repository->MembersByCity('Ruby', 'la+loupe');
            $membresIOSLoupe = $repository->MembersByCity('IOS', 'la+loupe');

            $membresPHPLoupe = $membresPHPLoupe[0];
            $membresJavaScriptLoupe = $membresJavaScriptLoupe[0];
            $membresRubyLoupe = $membresRubyLoupe[0];
            $membresIOSLoupe = $membresIOSLoupe[0];

        return $this->render('MeetupBundle:Default:accueil.html.twig',
        array(
            'membresPHPParis'       =>$membresPHPParis,
            'membresJavaScriptParis'=>$membresJavaScriptParis,
            'membresRubyParis'      =>$membresRubyParis,
            'membresIOSParis'       =>$membresIOSParis,

            'membresPHPLoupe'       =>$membresPHPLoupe,
            'membresJavaScriptLoupe'=>$membresJavaScriptLoupe,
            'membresRubyLoupe'      =>$membresRubyLoupe,
            'membresIOSLoupe'       =>$membresIOSLoupe
        )
    );
    }
}
