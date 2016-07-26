<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

use Symfony\Component\HttpFoundation\Response;

use UserBundle\Entity\Datauser;

class PageController extends Controller
{
    public function showAction()
    {

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MeetupBundle:GroupesPHP')
            ;
            //Ville de Paris
            $membresPHPParis = $repository->MembersByCity('PHP', 'paris');
            $membresJavaScriptParis = $repository->MembersByCity('JavaScript', 'paris');
            $membresRubyParis = $repository->MembersByCity('Ruby', 'paris');
            $membresIOSParis = $repository->MembersByCity('IOS', 'paris');

            $membresPHPParis = $membresPHPParis[0];
            $membresJavaScriptParis = $membresJavaScriptParis[0];
            $membresRubyParis = $membresRubyParis[0];
            $membresIOSParis = $membresIOSParis[0];

            $membresParis = [$membresPHPParis, $membresJavaScriptParis, $membresRubyParis, $membresIOSParis];


            //Ville de la Loupe
            $membresPHPLoupe = $repository->MembersByCity('PHP', 'la+loupe');
            $membresJavaScriptLoupe = $repository->MembersByCity('JavaScript', 'la+loupe');
            $membresRubyLoupe = $repository->MembersByCity('Ruby', 'la+loupe');
            $membresIOSLoupe = $repository->MembersByCity('IOS', 'la+loupe');

            if (empty($membresPHPLoupe)) {
                $membresPHPLoupe = array('membresTotal' => 0 );
            }

            if (empty($membresJavaScriptLoupe)) {
                $membresJavaScriptLoupe = array('membresTotal' => 0 );
            }

            if (empty($membresRubyLoupe)) {
                $membresRubyLoupe = array('membresTotal' => 0 );
            }

            if (empty($membresIOSLoupe)) {
                $membresIOSLoupe = array('membresTotal' => 0 );
            }

            $membresLoupe = [$membresPHPLoupe, $membresJavaScriptLoupe, $membresRubyLoupe, $membresIOSLoupe];

            //Ville de Chartres
            $membresPHPChartres = $repository->MembersByCity('PHP', 'Chartres');
            $membresJavaScriptChartres = $repository->MembersByCity('JavaScript', 'Chartres');
            $membresRubyChartres = $repository->MembersByCity('Ruby', 'Chartres');
            $membresIOSChartres = $repository->MembersByCity('IOS', 'Chartres');

            if (empty($membresPHPChartres)) {
                $membresPHPChartres = array('membresTotal' => 0 );
            }

            if (empty($membresJavaScriptChartres)) {
                $membresJavaScriptChartres = array('membresTotal' => 0 );
            }

            if (empty($membresRubyChartres)) {
                $membresRubyChartres = array('membresTotal' => 0 );
            }

            if (empty($membresIOSChartres)) {
                $membresIOSChartres = array('membresTotal' => 0 );
            }

            $membresChartres = [$membresPHPChartres, $membresJavaScriptChartres, $membresRubyChartres, $membresIOSChartres];

            //Ville de Fontainebleau
            $membresPHPFontainebleau = $repository->MembersByCity('PHP', 'Fontainebleau');
            $membresJavaScriptFontainebleau = $repository->MembersByCity('JavaScript', 'Fontainebleau');
            $membresRubyFontainebleau = $repository->MembersByCity('Ruby', 'Fontainebleau');
            $membresIOSFontainebleau = $repository->MembersByCity('IOS', 'Fontainebleau');

            if (empty($membresPHPFontainebleau)) {
                $membresPHPFontainebleau = array('membresTotal' => 0 );
            }

            if (empty($membresJavaScriptFontainebleau)) {
                $membresJavaScriptFontainebleau = array('membresTotal' => 0 );
            }

            if (empty($membresRubyFontainebleau)) {
                $membresRubyFontainebleau = array('membresTotal' => 0 );
            }

            if (empty($membresIOSFontainebleau)) {
                $membresIOSFontainebleau = array('membresTotal' => 0 );
            }

            $membresFontainebleau = [$membresPHPFontainebleau, $membresJavaScriptFontainebleau, $membresRubyFontainebleau, $membresIOSFontainebleau];

            //Ville de Orléans
            $membresPHPOrleans = $repository->MembersByCity('PHP', 'Orleans');
            $membresJavaScriptOrleans = $repository->MembersByCity('JavaScript', 'Orleans');
            $membresRubyOrleans = $repository->MembersByCity('Ruby', 'Orleans');
            $membresIOSOrleans = $repository->MembersByCity('IOS', 'Orleans');

            if (empty($membresPHPOrleans)) {
                $membresPHPOrleans = array('membresTotal' => 0 );
            }

            if (empty($membresJavaScriptOrleans)) {
                $membresJavaScriptOrleans = array('membresTotal' => 0 );
            }

            if (empty($membresRubyOrleans)) {
                $membresRubyOrleans = array('membresTotal' => 0 );
            }

            if (empty($membresIOSOrleans)) {
                $membresIOSOrleans = array('membresTotal' => 0 );
            }

            $membresOrleans = [$membresPHPOrleans, $membresJavaScriptOrleans, $membresRubyOrleans, $membresIOSOrleans];

            //Ville de Lyon
            $membresPHPLyon = $repository->MembersByCity('PHP', 'Lyon');
            $membresJavaScriptLyon = $repository->MembersByCity('JavaScript', 'Lyon');
            $membresRubyLyon = $repository->MembersByCity('Ruby', 'Lyon');
            $membresIOSLyon = $repository->MembersByCity('IOS', 'Lyon');

            if (empty($membresPHPLyon)) {
                $membresPHPLyon = array('membresTotal' => 0 );
            } else {
                $membresPHPLyon = $membresPHPLyon[0];
            }

            if (empty($membresJavaScriptLyon)) {
                $membresJavaScriptLyon = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptLyon = $membresJavaScriptLyon[0];
            }

            if (empty($membresRubyLyon)) {
                $membresRubyLyon = array('membresTotal' => 0 );
            } else {
                $membresRubyLyon = $membresRubyLyon[0];
            }

            if (empty($membresIOSLyon)) {
                $membresIOSLyon = array('membresTotal' => 0 );
            } else {
                $membresIOSLyon = $membresIOSLyon[0];
            }

            $membresLyon = [$membresPHPLyon, $membresJavaScriptLyon, $membresRubyLyon, $membresIOSLyon];

            //Ville de Bordeaux
            $membresPHPBordeaux = $repository->MembersByCity('PHP', 'Bordeaux');
            $membresJavaScriptBordeaux = $repository->MembersByCity('JavaScript', 'Bordeaux');
            $membresRubyBordeaux = $repository->MembersByCity('Ruby', 'Bordeaux');
            $membresIOSBordeaux = $repository->MembersByCity('IOS', 'Bordeaux');

            if (empty($membresPHPBordeaux)) {
                $membresPHPBordeaux = array('membresTotal' => 0 );
            } else {
                $membresPHPBordeaux = $membresPHPBordeaux[0];
            }

            if (empty($membresJavaScriptBordeaux)) {
                $membresJavaScriptBordeaux = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptBordeaux = $membresJavaScriptBordeaux[0];
            }

            if (empty($membresRubyBordeaux)) {
                $membresRubyBordeaux = array('membresTotal' => 0 );
            } else {
                $membresRubyBordeaux = $membresRubyBordeaux[0];
            }

            if (empty($membresIOSBordeaux)) {
                $membresIOSBordeaux = array('membresTotal' => 0 );
            } else {
                $membresIOSBordeaux = $membresIOSBordeaux[0];
            }

            $membresBordeaux = [$membresPHPBordeaux, $membresJavaScriptBordeaux, $membresRubyBordeaux, $membresIOSBordeaux];

            //Ville de Toulouse
            $membresPHPToulouse = $repository->MembersByCity('PHP', 'Toulouse');
            $membresJavaScriptToulouse = $repository->MembersByCity('JavaScript', 'Toulouse');
            $membresRubyToulouse = $repository->MembersByCity('Ruby', 'Toulouse');
            $membresIOSToulouse = $repository->MembersByCity('IOS', 'Toulouse');

            if (empty($membresPHPToulouse)) {
                $membresPHPToulouse = array('membresTotal' => 0 );
            } else {
                $membresPHPToulouse = $membresPHPToulouse[0];
            }

            if (empty($membresJavaScriptToulouse)) {
                $membresJavaScriptToulouse = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptToulouse = $membresJavaScriptToulouse[0];
            }

            if (empty($membresRubyToulouse)) {
                $membresRubyToulouse = array('membresTotal' => 0 );
            } else {
                $membresRubyToulouse = $membresRubyToulouse[0];
            }

            if (empty($membresIOSToulouse)) {
                $membresIOSToulouse = array('membresTotal' => 0 );
            } else {
                $membresIOSToulouse = $membresIOSToulouse[0];
            }

            $membresToulouse = [$membresPHPToulouse, $membresJavaScriptToulouse, $membresRubyToulouse, $membresIOSToulouse];

            //Ville de Strasbourg
            $membresPHPStrasbourg = $repository->MembersByCity('PHP', 'Strasbourg');
            $membresJavaScriptStrasbourg = $repository->MembersByCity('JavaScript', 'Strasbourg');
            $membresRubyStrasbourg = $repository->MembersByCity('Ruby', 'Strasbourg');
            $membresIOSStrasbourg = $repository->MembersByCity('IOS', 'Strasbourg');

            if (empty($membresPHPStrasbourg)) {
                $membresPHPStrasbourg = array('membresTotal' => 0 );
            } else {
                $membresPHPStrasbourg = $membresPHPStrasbourg[0];
            }

            if (empty($membresJavaScriptStrasbourg)) {
                $membresJavaScriptStrasbourg = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptStrasbourg = $membresJavaScriptStrasbourg[0];
            }

            if (empty($membresRubyStrasbourg)) {
                $membresRubyStrasbourg = array('membresTotal' => 0 );
            } else {
                $membresRubyStrasbourg = $membresRubyStrasbourg[0];
            }

            if (empty($membresIOSStrasbourg)) {
                $membresIOSStrasbourg = array('membresTotal' => 0 );
            } else {
                $membresIOSStrasbourg = $membresIOSStrasbourg[0];
            }

            $membresStrasbourg = [$membresPHPStrasbourg, $membresJavaScriptStrasbourg, $membresRubyStrasbourg, $membresIOSStrasbourg];

            //Ville de Nantes
            $membresPHPNantes = $repository->MembersByCity('PHP', 'Nantes');
            $membresJavaScriptNantes = $repository->MembersByCity('JavaScript', 'Nantes');
            $membresRubyNantes = $repository->MembersByCity('Ruby', 'Nantes');
            $membresIOSNantes = $repository->MembersByCity('IOS', 'Nantes');

            if (empty($membresPHPNantes)) {
                $membresPHPNantes = array('membresTotal' => 0 );
            } else {
                $membresPHPNantes = $membresPHPNantes[0];
            }

            if (empty($membresJavaScriptNantes)) {
                $membresJavaScriptNantes = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptNantes = $membresJavaScriptNantes[0];
            }

            if (empty($membresRubyNantes)) {
                $membresRubyNantes = array('membresTotal' => 0 );
            } else {
                $membresRubyNantes = $membresRubyNantes[0];
            }

            if (empty($membresIOSNantes)) {
                $membresIOSNantes = array('membresTotal' => 0 );
            } else {
                $membresIOSNantes = $membresIOSNantes[0];
            }

            $membresNantes = [$membresPHPNantes, $membresJavaScriptNantes, $membresRubyNantes, $membresIOSNantes];

            //Ville de Nice
            $membresPHPNice = $repository->MembersByCity('PHP', 'Nice');
            $membresJavaScriptNice = $repository->MembersByCity('JavaScript', 'Nice');
            $membresRubyNice = $repository->MembersByCity('Ruby', 'Nice');
            $membresIOSNice = $repository->MembersByCity('IOS', 'Nice');

            if (empty($membresPHPNice)) {
                $membresPHPNice = array('membresTotal' => 0 );
            } else {
                $membresPHPNice = $membresPHPNice[0];
            }

            if (empty($membresJavaScriptNice)) {
                $membresJavaScriptNice = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptNice = $membresJavaScriptNice[0];
            }

            if (empty($membresRubyNice)) {
                $membresRubyNice = array('membresTotal' => 0 );
            } else {
                $membresRubyNice = $membresRubyNice[0];
            }

            if (empty($membresIOSNice)) {
                $membresIOSNice = array('membresTotal' => 0 );
            } else {
                $membresIOSNice = $membresIOSNice[0];
            }

            $membresNice = [$membresPHPNice, $membresJavaScriptNice, $membresRubyNice, $membresIOSNice];

            //Ville de Montpellier
            $membresPHPMontpellier = $repository->MembersByCity('PHP', 'Montpellier');
            $membresJavaScriptMontpellier = $repository->MembersByCity('JavaScript', 'Montpellier');
            $membresRubyMontpellier = $repository->MembersByCity('Ruby', 'Montpellier');
            $membresIOSMontpellier = $repository->MembersByCity('IOS', 'Montpellier');

            if (empty($membresPHPMontpellier)) {
                $membresPHPMontpellier = array('membresTotal' => 0 );
            } else {
                $membresPHPMontpellier = $membresPHPMontpellier[0];
            }

            if (empty($membresJavaScriptMontpellier)) {
                $membresJavaScriptMontpellier = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptMontpellier = $membresJavaScriptMontpellier[0];
            }

            if (empty($membresRubyMontpellier)) {
                $membresRubyMontpellier = array('membresTotal' => 0 );
            } else {
                $membresRubyMontpellier = $membresRubyMontpellier[0];
            }

            if (empty($membresIOSMontpellier)) {
                $membresIOSMontpellier = array('membresTotal' => 0 );
            } else {
                $membresIOSMontpellier = $membresIOSMontpellier[0];
            }

            $membresMontpellier = [$membresPHPMontpellier, $membresJavaScriptMontpellier, $membresRubyMontpellier, $membresIOSMontpellier];

            //Ville de Rennes
            $membresPHPRennes = $repository->MembersByCity('PHP', 'Rennes');
            $membresJavaScriptRennes = $repository->MembersByCity('JavaScript', 'Rennes');
            $membresRubyRennes = $repository->MembersByCity('Ruby', 'Rennes');
            $membresIOSRennes = $repository->MembersByCity('IOS', 'Rennes');

            if (empty($membresPHPRennes)) {
                $membresPHPRennes = array('membresTotal' => 0 );
            } else {
                $membresPHPRennes = $membresPHPRennes[0];
            }

            if (empty($membresJavaScriptRennes)) {
                $membresJavaScriptRennes = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptRennes = $membresJavaScriptRennes[0];
            }

            if (empty($membresRubyRennes)) {
                $membresRubyRennes = array('membresTotal' => 0 );
            } else {
                $membresRubyRennes = $membresRubyRennes[0];
            }

            if (empty($membresIOSRennes)) {
                $membresIOSRennes = array('membresTotal' => 0 );
            } else {
                $membresIOSRennes = $membresIOSRennes[0];
            }

            $membresRennes = [$membresPHPRennes, $membresJavaScriptRennes, $membresRubyRennes, $membresIOSRennes];

            //Ville de Lille
            $membresPHPLille = $repository->MembersByCity('PHP', 'Lille');
            $membresJavaScriptLille = $repository->MembersByCity('JavaScript', 'Lille');
            $membresRubyLille = $repository->MembersByCity('Ruby', 'Lille');
            $membresIOSLille = $repository->MembersByCity('IOS', 'Lille');

            if (empty($membresPHPLille)) {
                $membresPHPLille = array('membresTotal' => 0 );
            } else {
                $membresPHPLille = $membresPHPLille[0];
            }

            if (empty($membresJavaScriptLille)) {
                $membresJavaScriptLille = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptLille = $membresJavaScriptLille[0];
            }

            if (empty($membresRubyLille)) {
                $membresRubyLille = array('membresTotal' => 0 );
            } else {
                $membresRubyLille = $membresRubyLille[0];
            }

            if (empty($membresIOSLille)) {
                $membresIOSLille = array('membresTotal' => 0 );
            } else {
                $membresIOSLille = $membresIOSLille[0];
            }

            $membresLille = [$membresPHPLille, $membresJavaScriptLille, $membresRubyLille, $membresIOSLille];

            //Ville de Brussels
            $membresPHPBrussels = $repository->MembersByCity('PHP', 'Brussels');
            $membresJavaScriptBrussels = $repository->MembersByCity('JavaScript', 'Brussels');
            $membresRubyBrussels = $repository->MembersByCity('Ruby', 'Brussels');
            $membresIOSBrussels = $repository->MembersByCity('IOS', 'Brussels');

            if (empty($membresPHPBrussels)) {
                $membresPHPBrussels = array('membresTotal' => 0 );
            } else {
                $membresPHPBrussels = $membresPHPBrussels[0];
            }

            if (empty($membresJavaScriptBrussels)) {
                $membresJavaScriptBrussels = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptBrussels = $membresJavaScriptBrussels[0];
            }

            if (empty($membresRubyBrussels)) {
                $membresRubyBrussels = array('membresTotal' => 0 );
            } else {
                $membresRubyBrussels = $membresRubyBrussels[0];
            }

            if (empty($membresIOSBrussels)) {
                $membresIOSBrussels = array('membresTotal' => 0 );
            } else {
                $membresIOSBrussels = $membresIOSBrussels[0];
            }

            $membresBrussels = [$membresPHPBrussels, $membresJavaScriptBrussels, $membresRubyBrussels, $membresIOSBrussels];

            //Ville de Luxembourg
            $membresPHPLuxembourg = $repository->MembersByCity('PHP', 'Luxembourg');
            $membresJavaScriptLuxembourg = $repository->MembersByCity('JavaScript', 'Luxembourg');
            $membresRubyLuxembourg = $repository->MembersByCity('Ruby', 'Luxembourg');
            $membresIOSLuxembourg = $repository->MembersByCity('IOS', 'Luxembourg');

            if (empty($membresPHPLuxembourg)) {
                $membresPHPLuxembourg = array('membresTotal' => 0 );
            } else {
                $membresPHPLuxembourg = $membresPHPLuxembourg[0];
            }

            if (empty($membresJavaScriptLuxembourg)) {
                $membresJavaScriptLuxembourg = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptLuxembourg = $membresJavaScriptLuxembourg[0];
            }

            if (empty($membresRubyLuxembourg)) {
                $membresRubyLuxembourg = array('membresTotal' => 0 );
            } else {
                $membresRubyLuxembourg = $membresRubyLuxembourg[0];
            }

            if (empty($membresIOSLuxembourg)) {
                $membresIOSLuxembourg = array('membresTotal' => 0 );
            } else {
                $membresIOSLuxembourg = $membresIOSLuxembourg[0];
            }

            $membresLuxembourg = [$membresPHPLuxembourg, $membresJavaScriptLuxembourg, $membresRubyLuxembourg, $membresIOSLuxembourg];

            //Ville de Geneve
            $membresPHPGeneve = $repository->MembersByCity('PHP', 'Geneve');
            $membresJavaScriptGeneve = $repository->MembersByCity('JavaScript', 'Geneve');
            $membresRubyGeneve = $repository->MembersByCity('Ruby', 'Geneve');
            $membresIOSGeneve = $repository->MembersByCity('IOS', 'Geneve');

            if (empty($membresPHPGeneve)) {
                $membresPHPGeneve = array('membresTotal' => 0 );
            } else {
                $membresPHPGeneve = $membresPHPGeneve[0];
            }

            if (empty($membresJavaScriptGeneve)) {
                $membresJavaScriptGeneve = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptGeneve = $membresJavaScriptGeneve[0];
            }

            if (empty($membresRubyGeneve)) {
                $membresRubyGeneve = array('membresTotal' => 0 );
            } else {
                $membresRubyGeneve = $membresRubyGeneve[0];
            }

            if (empty($membresIOSGeneve)) {
                $membresIOSGeneve = array('membresTotal' => 0 );
            } else {
                $membresIOSGeneve = $membresIOSGeneve[0];
            }

            $membresGeneve = [$membresPHPGeneve, $membresJavaScriptGeneve, $membresRubyGeneve, $membresIOSGeneve];

        return $this->render('MeetupBundle:Default:accueil.html.twig',
        array(
            'membresParis'            =>$membresParis,

            'membresLoupe'            =>$membresLoupe,

            'membresChartres'         =>$membresChartres,

            'membresFontainebleau'    =>$membresFontainebleau,

            'membresOrleans'          =>$membresOrleans,

            'membresLyon'             =>$membresLyon,

            'membresBordeaux'         =>$membresBordeaux,

            'membresToulouse'         =>$membresToulouse,

            'membresStrasbourg'       =>$membresStrasbourg,

            'membresNantes'           =>$membresNantes,

            'membresNice'             =>$membresNice,

            'membresMontpellier'      =>$membresMontpellier,

            'membresRennes'           =>$membresRennes,

            'membresLille'            =>$membresLille,

            'membresBrussels'         =>$membresBrussels,

            'membresLuxembourg'       =>$membresLuxembourg,

            'membresGeneve'           =>$membresGeneve
        )
    );

        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $request = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());
       return $this->render('MeetupBundle:Default:accueil.html.twig', array(
            'requete' => $request,
        ));

    }
}
