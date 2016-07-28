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
            } else {
                $membresPHPLoupe = $membresPHPLoupe[0];
            }

            if (empty($membresJavaScriptLoupe)) {
                $membresJavaScriptLoupe = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptLoupe = $membresJavaScriptLoupe[0];
            }

            if (empty($membresRubyLoupe)) {
                $membresRubyLoupe = array('membresTotal' => 0 );
            } else {
                $membresRubyLoupe = $membresRubyLoupe[0];
            }


            if (empty($membresIOSLoupe)) {
                $membresIOSLoupe = array('membresTotal' => 0 );
            } else {
                $membresIOSLoupe = $membressIOSLoupe[0];
            }

            $membresLoupe = [$membresPHPLoupe, $membresJavaScriptLoupe, $membresRubyLoupe, $membresIOSLoupe];

            //Ville de Chartres
            $membresPHPChartres = $repository->MembersByCity('PHP', 'Chartres');
            $membresJavaScriptChartres = $repository->MembersByCity('JavaScript', 'Chartres');
            $membresRubyChartres = $repository->MembersByCity('Ruby', 'Chartres');
            $membresIOSChartres = $repository->MembersByCity('IOS', 'Chartres');

            if (empty($membresPHPChartres)) {
                $membresPHPChartres = array('membresTotal' => 0 );
            } else {
                $membresPHPChartres = $membresPHPChartres[0];
            }

            if (empty($membresJavaScriptChartres)) {
                $membresJavaScriptChartres = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptChartres = $membresJavaScriptChartres[0];
            }

            if (empty($membresRubyChartres)) {
                $membresRubyChartres = array('membresTotal' => 0 );
            } else {
                $membresRubyChartres = $membresRubyChartres[0];
            }

            if (empty($membresIOSChartres)) {
                $membresIOSChartres = array('membresTotal' => 0 );
            } else {
                $membresIOSChartres = $membresIOSChartres[0];
            }

            $membresChartres = [$membresPHPChartres, $membresJavaScriptChartres, $membresRubyChartres, $membresIOSChartres];

            //Ville de Fontainebleau
            $membresPHPFontainebleau = $repository->MembersByCity('PHP', 'Fontainebleau');
            $membresJavaScriptFontainebleau = $repository->MembersByCity('JavaScript', 'Fontainebleau');
            $membresRubyFontainebleau = $repository->MembersByCity('Ruby', 'Fontainebleau');
            $membresIOSFontainebleau = $repository->MembersByCity('IOS', 'Fontainebleau');

            if (empty($membresPHPFontainebleau)) {
                $membresPHPFontainebleau = array('membresTotal' => 0 );
            } else {
                $membresPHPFontainebleau = $membresPHPFontainebleau[0];
            }

            if (empty($membresJavaScriptFontainebleau)) {
                $membresJavaScriptFontainebleau = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptFontainebleau = $membresJavaScriptFontainebleau[0];
            }

            if (empty($membresRubyFontainebleau)) {
                $membresRubyFontainebleau = array('membresTotal' => 0 );
            } else {
                $membresRubyFontainebleau = $membresRubyFontainebleau[0];
            }

            if (empty($membresIOSFontainebleau)) {
                $membresIOSFontainebleau = array('membresTotal' => 0 );
            } else {
                $membresIOSFontainebleau = $membresIOSFontainebleau[0];
            }

            $membresFontainebleau = [$membresPHPFontainebleau, $membresJavaScriptFontainebleau, $membresRubyFontainebleau, $membresIOSFontainebleau];


            //Ville de Orleans
            $membresPHPOrleans = $repository->MembersByCity('PHP', 'Orleans');
            $membresJavaScriptOrleans = $repository->MembersByCity('JavaScript', 'Orleans');
            $membresRubyOrleans = $repository->MembersByCity('Ruby', 'Orleans');
            $membresIOSOrleans = $repository->MembersByCity('IOS', 'Orleans');

            if (empty($membresPHPOrleans)) {
                $membresPHPOrleans = array('membresTotal' => 0 );
            } else {
                $membresPHPOrleans = $membresPHPOrleans[0];
            }

            if (empty($membresJavaScriptOrleans)) {
                $membresJavaScriptOrleans = array('membresTotal' => 0 );
            } else {
                $membresJavaScriptOrleans = $membresJavaScriptOrleans[0];
            }

            if (empty($membresRubyOrleans)) {
                $membresRubyOrleans = array('membresTotal' => 0 );
            } else {
                $membresRubyOrleans = $membresRubyOrleans[0];
            }

            if (empty($membresIOSOrleans)) {
                $membresIOSOrleans = array('membresTotal' => 0 );
            } else {
                $membresIOSOrleans = $membresIOSOrleans[0];
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

            //Evolution Paris

            $evolutionParis1 = $repository->MeetupCreatedByYear('1', 'paris');
            $evolutionParis2 = $repository->MeetupCreatedByYear('2', 'paris');
            $evolutionParis3 = $repository->MeetupCreatedByYear('3', 'paris');
            $evolutionParis4 = $repository->MeetupCreatedByYear('4', 'paris');
            $evolutionParis5 = $repository->MeetupCreatedByYear('5', 'paris');
            $evolutionParis6 = $repository->MeetupCreatedByYear('6', 'paris');
            $evolutionParis7 = $repository->MeetupCreatedByYear('7', 'paris');
            $evolutionParis8 = $repository->MeetupCreatedByYear('8', 'paris');
            $evolutionParis9 = $repository->MeetupCreatedByYear('9', 'paris');
            $evolutionParis10 = $repository->MeetupCreatedByYear('10', 'paris');
            $evolutionParis11 = $repository->MeetupCreatedByYear('11', 'paris');
            $evolutionParis12 = $repository->MeetupCreatedByYear('12', 'paris');

            $evolutionParis = [$evolutionParis1, $evolutionParis2, $evolutionParis3, $evolutionParis4, $evolutionParis5, $evolutionParis6, $evolutionParis7, $evolutionParis8, $evolutionParis9, $evolutionParis10, $evolutionParis11, $evolutionParis12];

            $evoParis = [];

            for ($i=0; $i < count($evolutionParis) ; $i++) {
                array_push($evoParis, $evolutionParis[$i][0]['create']);
            }

            //Evolution Bordeaux

            $evolutionBordeaux1 = $repository->MeetupCreatedByYear('1', 'Bordeaux');
            $evolutionBordeaux2 = $repository->MeetupCreatedByYear('2', 'Bordeaux');
            $evolutionBordeaux3 = $repository->MeetupCreatedByYear('3', 'Bordeaux');
            $evolutionBordeaux4 = $repository->MeetupCreatedByYear('4', 'Bordeaux');
            $evolutionBordeaux5 = $repository->MeetupCreatedByYear('5', 'Bordeaux');
            $evolutionBordeaux6 = $repository->MeetupCreatedByYear('6', 'Bordeaux');
            $evolutionBordeaux7 = $repository->MeetupCreatedByYear('7', 'Bordeaux');
            $evolutionBordeaux8 = $repository->MeetupCreatedByYear('8', 'Bordeaux');
            $evolutionBordeaux9 = $repository->MeetupCreatedByYear('9', 'Bordeaux');
            $evolutionBordeaux10 = $repository->MeetupCreatedByYear('10', 'Bordeaux');
            $evolutionBordeaux11 = $repository->MeetupCreatedByYear('11', 'Bordeaux');
            $evolutionBordeaux12 = $repository->MeetupCreatedByYear('12', 'Bordeaux');

            $evolutionBordeaux = [$evolutionBordeaux1, $evolutionBordeaux2, $evolutionBordeaux3, $evolutionBordeaux4, $evolutionBordeaux5, $evolutionBordeaux6, $evolutionBordeaux7, $evolutionBordeaux8, $evolutionBordeaux9, $evolutionBordeaux10, $evolutionBordeaux11, $evolutionBordeaux12];

            $evoBordeaux = [];

            for ($i=0; $i < count($evolutionBordeaux) ; $i++) {
                array_push($evoBordeaux, $evolutionBordeaux[$i][0]['create']);
            }

            //Evolution Chartres

            $evolutionChartres1 = $repository->MeetupCreatedByYear('1', 'Chartres');
            $evolutionChartres2 = $repository->MeetupCreatedByYear('2', 'Chartres');
            $evolutionChartres3 = $repository->MeetupCreatedByYear('3', 'Chartres');
            $evolutionChartres4 = $repository->MeetupCreatedByYear('4', 'Chartres');
            $evolutionChartres5 = $repository->MeetupCreatedByYear('5', 'Chartres');
            $evolutionChartres6 = $repository->MeetupCreatedByYear('6', 'Chartres');
            $evolutionChartres7 = $repository->MeetupCreatedByYear('7', 'Chartres');
            $evolutionChartres8 = $repository->MeetupCreatedByYear('8', 'Chartres');
            $evolutionChartres9 = $repository->MeetupCreatedByYear('9', 'Chartres');
            $evolutionChartres10 = $repository->MeetupCreatedByYear('10', 'Chartres');
            $evolutionChartres11 = $repository->MeetupCreatedByYear('11', 'Chartres');
            $evolutionChartres12 = $repository->MeetupCreatedByYear('12', 'Chartres');

            $evolutionChartres = [$evolutionChartres1, $evolutionChartres2, $evolutionChartres3, $evolutionChartres4, $evolutionChartres5, $evolutionChartres6, $evolutionChartres7, $evolutionChartres8, $evolutionChartres9, $evolutionChartres10, $evolutionChartres11, $evolutionChartres12];

            $evoChartres = [];

            for ($i=0; $i < count($evolutionChartres) ; $i++) {
                array_push($evoChartres, $evolutionChartres[$i][0]['create']);
            }

            //Evolution La loupe

            $evolutionLoupe1 = $repository->MeetupCreatedByYear('1', 'Loupe');
            $evolutionLoupe2 = $repository->MeetupCreatedByYear('2', 'Loupe');
            $evolutionLoupe3 = $repository->MeetupCreatedByYear('3', 'Loupe');
            $evolutionLoupe4 = $repository->MeetupCreatedByYear('4', 'Loupe');
            $evolutionLoupe5 = $repository->MeetupCreatedByYear('5', 'Loupe');
            $evolutionLoupe6 = $repository->MeetupCreatedByYear('6', 'Loupe');
            $evolutionLoupe7 = $repository->MeetupCreatedByYear('7', 'Loupe');
            $evolutionLoupe8 = $repository->MeetupCreatedByYear('8', 'Loupe');
            $evolutionLoupe9 = $repository->MeetupCreatedByYear('9', 'Loupe');
            $evolutionLoupe10 = $repository->MeetupCreatedByYear('10', 'Loupe');
            $evolutionLoupe11 = $repository->MeetupCreatedByYear('11', 'Loupe');
            $evolutionLoupe12 = $repository->MeetupCreatedByYear('12', 'Loupe');

            $evolutionLoupe = [$evolutionLoupe1, $evolutionLoupe2, $evolutionLoupe3, $evolutionLoupe4, $evolutionLoupe5, $evolutionLoupe6, $evolutionLoupe7, $evolutionLoupe8, $evolutionLoupe9, $evolutionLoupe10, $evolutionLoupe11, $evolutionLoupe12];

            $evoLoupe = [];

            for ($i=0; $i < count($evolutionLoupe) ; $i++) {
                array_push($evoLoupe, $evolutionLoupe[$i][0]['create']);
            }

            //Evolution Fontainebleau

            $evolutionFontainebleau1 = $repository->MeetupCreatedByYear('1', 'Fontainebleau');
            $evolutionFontainebleau2 = $repository->MeetupCreatedByYear('2', 'Fontainebleau');
            $evolutionFontainebleau3 = $repository->MeetupCreatedByYear('3', 'Fontainebleau');
            $evolutionFontainebleau4 = $repository->MeetupCreatedByYear('4', 'Fontainebleau');
            $evolutionFontainebleau5 = $repository->MeetupCreatedByYear('5', 'Fontainebleau');
            $evolutionFontainebleau6 = $repository->MeetupCreatedByYear('6', 'Fontainebleau');
            $evolutionFontainebleau7 = $repository->MeetupCreatedByYear('7', 'Fontainebleau');
            $evolutionFontainebleau8 = $repository->MeetupCreatedByYear('8', 'Fontainebleau');
            $evolutionFontainebleau9 = $repository->MeetupCreatedByYear('9', 'Fontainebleau');
            $evolutionFontainebleau10 = $repository->MeetupCreatedByYear('10', 'Fontainebleau');
            $evolutionFontainebleau11 = $repository->MeetupCreatedByYear('11', 'Fontainebleau');
            $evolutionFontainebleau12 = $repository->MeetupCreatedByYear('12', 'Fontainebleau');

            $evolutionFontainebleau = [$evolutionFontainebleau1, $evolutionFontainebleau2, $evolutionFontainebleau3, $evolutionFontainebleau4, $evolutionFontainebleau5, $evolutionFontainebleau6, $evolutionFontainebleau7, $evolutionFontainebleau8, $evolutionFontainebleau9, $evolutionFontainebleau10, $evolutionFontainebleau11, $evolutionFontainebleau12];

            $evoFontainebleau = [];

            for ($i=0; $i < count($evolutionFontainebleau) ; $i++) {
                array_push($evoFontainebleau, $evolutionFontainebleau[$i][0]['create']);
            }

            //Evolution Orleans

            $evolutionOrleans1 = $repository->MeetupCreatedByYear('1', 'Orleans');
            $evolutionOrleans2 = $repository->MeetupCreatedByYear('2', 'Orleans');
            $evolutionOrleans3 = $repository->MeetupCreatedByYear('3', 'Orleans');
            $evolutionOrleans4 = $repository->MeetupCreatedByYear('4', 'Orleans');
            $evolutionOrleans5 = $repository->MeetupCreatedByYear('5', 'Orleans');
            $evolutionOrleans6 = $repository->MeetupCreatedByYear('6', 'Orleans');
            $evolutionOrleans7 = $repository->MeetupCreatedByYear('7', 'Orleans');
            $evolutionOrleans8 = $repository->MeetupCreatedByYear('8', 'Orleans');
            $evolutionOrleans9 = $repository->MeetupCreatedByYear('9', 'Orleans');
            $evolutionOrleans10 = $repository->MeetupCreatedByYear('10', 'Orleans');
            $evolutionOrleans11 = $repository->MeetupCreatedByYear('11', 'Orleans');
            $evolutionOrleans12 = $repository->MeetupCreatedByYear('12', 'Orleans');

            $evolutionOrleans = [$evolutionOrleans1, $evolutionOrleans2, $evolutionOrleans3, $evolutionOrleans4, $evolutionOrleans5, $evolutionOrleans6, $evolutionOrleans7, $evolutionOrleans8, $evolutionOrleans9, $evolutionOrleans10, $evolutionOrleans11, $evolutionOrleans12];

            $evoOrleans = [];

            for ($i=0; $i < count($evolutionOrleans) ; $i++) {
                array_push($evoOrleans, $evolutionOrleans[$i][0]['create']);
            }

            //Evolution Lyon

            $evolutionLyon1 = $repository->MeetupCreatedByYear('1', 'Lyon');
            $evolutionLyon2 = $repository->MeetupCreatedByYear('2', 'Lyon');
            $evolutionLyon3 = $repository->MeetupCreatedByYear('3', 'Lyon');
            $evolutionLyon4 = $repository->MeetupCreatedByYear('4', 'Lyon');
            $evolutionLyon5 = $repository->MeetupCreatedByYear('5', 'Lyon');
            $evolutionLyon6 = $repository->MeetupCreatedByYear('6', 'Lyon');
            $evolutionLyon7 = $repository->MeetupCreatedByYear('7', 'Lyon');
            $evolutionLyon8 = $repository->MeetupCreatedByYear('8', 'Lyon');
            $evolutionLyon9 = $repository->MeetupCreatedByYear('9', 'Lyon');
            $evolutionLyon10 = $repository->MeetupCreatedByYear('10', 'Lyon');
            $evolutionLyon11 = $repository->MeetupCreatedByYear('11', 'Lyon');
            $evolutionLyon12 = $repository->MeetupCreatedByYear('12', 'Lyon');

            $evolutionLyon = [$evolutionLyon1, $evolutionLyon2, $evolutionLyon3, $evolutionLyon4, $evolutionLyon5, $evolutionLyon6, $evolutionLyon7, $evolutionLyon8, $evolutionLyon9, $evolutionLyon10, $evolutionLyon11, $evolutionLyon12];

            $evoLyon = [];

            for ($i=0; $i < count($evolutionLyon) ; $i++) {
                array_push($evoLyon, $evolutionLyon[$i][0]['create']);
            }

            //Evolution Toulouse

            $evolutionToulouse1 = $repository->MeetupCreatedByYear('1', 'Toulouse');
            $evolutionToulouse2 = $repository->MeetupCreatedByYear('2', 'Toulouse');
            $evolutionToulouse3 = $repository->MeetupCreatedByYear('3', 'Toulouse');
            $evolutionToulouse4 = $repository->MeetupCreatedByYear('4', 'Toulouse');
            $evolutionToulouse5 = $repository->MeetupCreatedByYear('5', 'Toulouse');
            $evolutionToulouse6 = $repository->MeetupCreatedByYear('6', 'Toulouse');
            $evolutionToulouse7 = $repository->MeetupCreatedByYear('7', 'Toulouse');
            $evolutionToulouse8 = $repository->MeetupCreatedByYear('8', 'Toulouse');
            $evolutionToulouse9 = $repository->MeetupCreatedByYear('9', 'Toulouse');
            $evolutionToulouse10 = $repository->MeetupCreatedByYear('10', 'Toulouse');
            $evolutionToulouse11 = $repository->MeetupCreatedByYear('11', 'Toulouse');
            $evolutionToulouse12 = $repository->MeetupCreatedByYear('12', 'Toulouse');

            $evolutionToulouse = [$evolutionToulouse1, $evolutionToulouse2, $evolutionToulouse3, $evolutionToulouse4, $evolutionToulouse5, $evolutionToulouse6, $evolutionToulouse7, $evolutionToulouse8, $evolutionToulouse9, $evolutionToulouse10, $evolutionToulouse11, $evolutionToulouse12];

            $evoToulouse = [];

            for ($i=0; $i < count($evolutionToulouse) ; $i++) {
                array_push($evoToulouse, $evolutionToulouse[$i][0]['create']);
            }

            //Evolution Strasbourg

            $evolutionStrasbourg1 = $repository->MeetupCreatedByYear('1', 'Strasbourg');
            $evolutionStrasbourg2 = $repository->MeetupCreatedByYear('2', 'Strasbourg');
            $evolutionStrasbourg3 = $repository->MeetupCreatedByYear('3', 'Strasbourg');
            $evolutionStrasbourg4 = $repository->MeetupCreatedByYear('4', 'Strasbourg');
            $evolutionStrasbourg5 = $repository->MeetupCreatedByYear('5', 'Strasbourg');
            $evolutionStrasbourg6 = $repository->MeetupCreatedByYear('6', 'Strasbourg');
            $evolutionStrasbourg7 = $repository->MeetupCreatedByYear('7', 'Strasbourg');
            $evolutionStrasbourg8 = $repository->MeetupCreatedByYear('8', 'Strasbourg');
            $evolutionStrasbourg9 = $repository->MeetupCreatedByYear('9', 'Strasbourg');
            $evolutionStrasbourg10 = $repository->MeetupCreatedByYear('10', 'Strasbourg');
            $evolutionStrasbourg11 = $repository->MeetupCreatedByYear('11', 'Strasbourg');
            $evolutionStrasbourg12 = $repository->MeetupCreatedByYear('12', 'Strasbourg');

            $evolutionStrasbourg = [$evolutionStrasbourg1, $evolutionStrasbourg2, $evolutionStrasbourg3, $evolutionStrasbourg4, $evolutionStrasbourg5, $evolutionStrasbourg6, $evolutionStrasbourg7, $evolutionStrasbourg8, $evolutionStrasbourg9, $evolutionStrasbourg10, $evolutionStrasbourg11, $evolutionStrasbourg12];

            $evoStrasbourg = [];

            for ($i=0; $i < count($evolutionStrasbourg) ; $i++) {
                array_push($evoStrasbourg, $evolutionStrasbourg[$i][0]['create']);
            }

            //Evolution Nantes

            $evolutionNantes1 = $repository->MeetupCreatedByYear('1', 'Nantes');
            $evolutionNantes2 = $repository->MeetupCreatedByYear('2', 'Nantes');
            $evolutionNantes3 = $repository->MeetupCreatedByYear('3', 'Nantes');
            $evolutionNantes4 = $repository->MeetupCreatedByYear('4', 'Nantes');
            $evolutionNantes5 = $repository->MeetupCreatedByYear('5', 'Nantes');
            $evolutionNantes6 = $repository->MeetupCreatedByYear('6', 'Nantes');
            $evolutionNantes7 = $repository->MeetupCreatedByYear('7', 'Nantes');
            $evolutionNantes8 = $repository->MeetupCreatedByYear('8', 'Nantes');
            $evolutionNantes9 = $repository->MeetupCreatedByYear('9', 'Nantes');
            $evolutionNantes10 = $repository->MeetupCreatedByYear('10', 'Nantes');
            $evolutionNantes11 = $repository->MeetupCreatedByYear('11', 'Nantes');
            $evolutionNantes12 = $repository->MeetupCreatedByYear('12', 'Nantes');

            $evolutionNantes = [$evolutionNantes1, $evolutionNantes2, $evolutionNantes3, $evolutionNantes4, $evolutionNantes5, $evolutionNantes6, $evolutionNantes7, $evolutionNantes8, $evolutionNantes9, $evolutionNantes10, $evolutionNantes11, $evolutionNantes12];

            $evoNantes = [];

            for ($i=0; $i < count($evolutionNantes) ; $i++) {
                array_push($evoNantes, $evolutionNantes[$i][0]['create']);
            }

            //Evolution Nice

            $evolutionNice1 = $repository->MeetupCreatedByYear('1', 'Nice');
            $evolutionNice2 = $repository->MeetupCreatedByYear('2', 'Nice');
            $evolutionNice3 = $repository->MeetupCreatedByYear('3', 'Nice');
            $evolutionNice4 = $repository->MeetupCreatedByYear('4', 'Nice');
            $evolutionNice5 = $repository->MeetupCreatedByYear('5', 'Nice');
            $evolutionNice6 = $repository->MeetupCreatedByYear('6', 'Nice');
            $evolutionNice7 = $repository->MeetupCreatedByYear('7', 'Nice');
            $evolutionNice8 = $repository->MeetupCreatedByYear('8', 'Nice');
            $evolutionNice9 = $repository->MeetupCreatedByYear('9', 'Nice');
            $evolutionNice10 = $repository->MeetupCreatedByYear('10', 'Nice');
            $evolutionNice11 = $repository->MeetupCreatedByYear('11', 'Nice');
            $evolutionNice12 = $repository->MeetupCreatedByYear('12', 'Nice');

            $evolutionNice = [$evolutionNice1, $evolutionNice2, $evolutionNice3, $evolutionNice4, $evolutionNice5, $evolutionNice6, $evolutionNice7, $evolutionNice8, $evolutionNice9, $evolutionNice10, $evolutionNice11, $evolutionNice12];

            $evoNice = [];

            for ($i=0; $i < count($evolutionNice) ; $i++) {
                array_push($evoNice, $evolutionNice[$i][0]['create']);
            }

            //Evolution Montpellier

            $evolutionMontpellier1 = $repository->MeetupCreatedByYear('1', 'Montpellier');
            $evolutionMontpellier2 = $repository->MeetupCreatedByYear('2', 'Montpellier');
            $evolutionMontpellier3 = $repository->MeetupCreatedByYear('3', 'Montpellier');
            $evolutionMontpellier4 = $repository->MeetupCreatedByYear('4', 'Montpellier');
            $evolutionMontpellier5 = $repository->MeetupCreatedByYear('5', 'Montpellier');
            $evolutionMontpellier6 = $repository->MeetupCreatedByYear('6', 'Montpellier');
            $evolutionMontpellier7 = $repository->MeetupCreatedByYear('7', 'Montpellier');
            $evolutionMontpellier8 = $repository->MeetupCreatedByYear('8', 'Montpellier');
            $evolutionMontpellier9 = $repository->MeetupCreatedByYear('9', 'Montpellier');
            $evolutionMontpellier10 = $repository->MeetupCreatedByYear('10', 'Montpellier');
            $evolutionMontpellier11 = $repository->MeetupCreatedByYear('11', 'Montpellier');
            $evolutionMontpellier12 = $repository->MeetupCreatedByYear('12', 'Montpellier');

            $evolutionMontpellier = [$evolutionMontpellier1, $evolutionMontpellier2, $evolutionMontpellier3, $evolutionMontpellier4, $evolutionMontpellier5, $evolutionMontpellier6, $evolutionMontpellier7, $evolutionMontpellier8, $evolutionMontpellier9, $evolutionMontpellier10, $evolutionMontpellier11, $evolutionMontpellier12];

            $evoMontpellier = [];

            for ($i=0; $i < count($evolutionMontpellier) ; $i++) {
                array_push($evoMontpellier, $evolutionMontpellier[$i][0]['create']);
            }

            //Evolution Rennes

            $evolutionRennes1 = $repository->MeetupCreatedByYear('1', 'Rennes');
            $evolutionRennes2 = $repository->MeetupCreatedByYear('2', 'Rennes');
            $evolutionRennes3 = $repository->MeetupCreatedByYear('3', 'Rennes');
            $evolutionRennes4 = $repository->MeetupCreatedByYear('4', 'Rennes');
            $evolutionRennes5 = $repository->MeetupCreatedByYear('5', 'Rennes');
            $evolutionRennes6 = $repository->MeetupCreatedByYear('6', 'Rennes');
            $evolutionRennes7 = $repository->MeetupCreatedByYear('7', 'Rennes');
            $evolutionRennes8 = $repository->MeetupCreatedByYear('8', 'Rennes');
            $evolutionRennes9 = $repository->MeetupCreatedByYear('9', 'Rennes');
            $evolutionRennes10 = $repository->MeetupCreatedByYear('10', 'Rennes');
            $evolutionRennes11 = $repository->MeetupCreatedByYear('11', 'Rennes');
            $evolutionRennes12 = $repository->MeetupCreatedByYear('12', 'Rennes');

            $evolutionRennes = [$evolutionRennes1, $evolutionRennes2, $evolutionRennes3, $evolutionRennes4, $evolutionRennes5, $evolutionRennes6, $evolutionRennes7, $evolutionRennes8, $evolutionRennes9, $evolutionRennes10, $evolutionRennes11, $evolutionRennes12];

            $evoRennes = [];

            for ($i=0; $i < count($evolutionRennes) ; $i++) {
                array_push($evoRennes, $evolutionRennes[$i][0]['create']);
            }

            //Evolution Lille

            $evolutionLille1 = $repository->MeetupCreatedByYear('1', 'Lille');
            $evolutionLille2 = $repository->MeetupCreatedByYear('2', 'Lille');
            $evolutionLille3 = $repository->MeetupCreatedByYear('3', 'Lille');
            $evolutionLille4 = $repository->MeetupCreatedByYear('4', 'Lille');
            $evolutionLille5 = $repository->MeetupCreatedByYear('5', 'Lille');
            $evolutionLille6 = $repository->MeetupCreatedByYear('6', 'Lille');
            $evolutionLille7 = $repository->MeetupCreatedByYear('7', 'Lille');
            $evolutionLille8 = $repository->MeetupCreatedByYear('8', 'Lille');
            $evolutionLille9 = $repository->MeetupCreatedByYear('9', 'Lille');
            $evolutionLille10 = $repository->MeetupCreatedByYear('10', 'Lille');
            $evolutionLille11 = $repository->MeetupCreatedByYear('11', 'Lille');
            $evolutionLille12 = $repository->MeetupCreatedByYear('12', 'Lille');

            $evolutionLille = [$evolutionLille1, $evolutionLille2, $evolutionLille3, $evolutionLille4, $evolutionLille5, $evolutionLille6, $evolutionLille7, $evolutionLille8, $evolutionLille9, $evolutionLille10, $evolutionLille11, $evolutionLille12];

            $evoLille = [];

            for ($i=0; $i < count($evolutionLille) ; $i++) {
                array_push($evoLille, $evolutionLille[$i][0]['create']);
            }

            //Evolution Bruxelles

            $evolutionBruxelles1 = $repository->MeetupCreatedByYear('1', 'Brussels');
            $evolutionBruxelles2 = $repository->MeetupCreatedByYear('2', 'Brussels');
            $evolutionBruxelles3 = $repository->MeetupCreatedByYear('3', 'Brussels');
            $evolutionBruxelles4 = $repository->MeetupCreatedByYear('4', 'Brussels');
            $evolutionBruxelles5 = $repository->MeetupCreatedByYear('5', 'Brussels');
            $evolutionBruxelles6 = $repository->MeetupCreatedByYear('6', 'Brussels');
            $evolutionBruxelles7 = $repository->MeetupCreatedByYear('7', 'Brussels');
            $evolutionBruxelles8 = $repository->MeetupCreatedByYear('8', 'Brussels');
            $evolutionBruxelles9 = $repository->MeetupCreatedByYear('9', 'Brussels');
            $evolutionBruxelles10 = $repository->MeetupCreatedByYear('10', 'Brussels');
            $evolutionBruxelles11 = $repository->MeetupCreatedByYear('11', 'Brussels');
            $evolutionBruxelles12 = $repository->MeetupCreatedByYear('12', 'Brussels');

            $evolutionBruxelles = [$evolutionBruxelles1, $evolutionBruxelles2, $evolutionBruxelles3, $evolutionBruxelles4, $evolutionBruxelles5, $evolutionBruxelles6, $evolutionBruxelles7, $evolutionBruxelles8, $evolutionBruxelles9, $evolutionBruxelles10, $evolutionBruxelles11, $evolutionBruxelles12];

            $evoBruxelles = [];

            for ($i=0; $i < count($evolutionBruxelles) ; $i++) {
                array_push($evoBruxelles, $evolutionBruxelles[$i][0]['create']);
            }

            //Evolution Luxembourg

            $evolutionLuxembourg1 = $repository->MeetupCreatedByYear('1', 'Luxembourg');
            $evolutionLuxembourg2 = $repository->MeetupCreatedByYear('2', 'Luxembourg');
            $evolutionLuxembourg3 = $repository->MeetupCreatedByYear('3', 'Luxembourg');
            $evolutionLuxembourg4 = $repository->MeetupCreatedByYear('4', 'Luxembourg');
            $evolutionLuxembourg5 = $repository->MeetupCreatedByYear('5', 'Luxembourg');
            $evolutionLuxembourg6 = $repository->MeetupCreatedByYear('6', 'Luxembourg');
            $evolutionLuxembourg7 = $repository->MeetupCreatedByYear('7', 'Luxembourg');
            $evolutionLuxembourg8 = $repository->MeetupCreatedByYear('8', 'Luxembourg');
            $evolutionLuxembourg9 = $repository->MeetupCreatedByYear('9', 'Luxembourg');
            $evolutionLuxembourg10 = $repository->MeetupCreatedByYear('10', 'Luxembourg');
            $evolutionLuxembourg11 = $repository->MeetupCreatedByYear('11', 'Luxembourg');
            $evolutionLuxembourg12 = $repository->MeetupCreatedByYear('12', 'Luxembourg');

            $evolutionLuxembourg = [$evolutionLuxembourg1, $evolutionLuxembourg2, $evolutionLuxembourg3, $evolutionLuxembourg4, $evolutionLuxembourg5, $evolutionLuxembourg6, $evolutionLuxembourg7, $evolutionLuxembourg8, $evolutionLuxembourg9, $evolutionLuxembourg10, $evolutionLuxembourg11, $evolutionLuxembourg12];

            $evoLuxembourg = [];

            for ($i=0; $i < count($evolutionLuxembourg) ; $i++) {
                array_push($evoLuxembourg, $evolutionLuxembourg[$i][0]['create']);
            }

            //Evolution Geneve

            $evolutionGeneve1 = $repository->MeetupCreatedByYear('1', 'Geneve');
            $evolutionGeneve2 = $repository->MeetupCreatedByYear('2', 'Geneve');
            $evolutionGeneve3 = $repository->MeetupCreatedByYear('3', 'Geneve');
            $evolutionGeneve4 = $repository->MeetupCreatedByYear('4', 'Geneve');
            $evolutionGeneve5 = $repository->MeetupCreatedByYear('5', 'Geneve');
            $evolutionGeneve6 = $repository->MeetupCreatedByYear('6', 'Geneve');
            $evolutionGeneve7 = $repository->MeetupCreatedByYear('7', 'Geneve');
            $evolutionGeneve8 = $repository->MeetupCreatedByYear('8', 'Geneve');
            $evolutionGeneve9 = $repository->MeetupCreatedByYear('9', 'Geneve');
            $evolutionGeneve10 = $repository->MeetupCreatedByYear('10', 'Geneve');
            $evolutionGeneve11 = $repository->MeetupCreatedByYear('11', 'Geneve');
            $evolutionGeneve12 = $repository->MeetupCreatedByYear('12', 'Geneve');

            $evolutionGeneve = [$evolutionGeneve1, $evolutionGeneve2, $evolutionGeneve3, $evolutionGeneve4, $evolutionGeneve5, $evolutionGeneve6, $evolutionGeneve7, $evolutionGeneve8, $evolutionGeneve9, $evolutionGeneve10, $evolutionGeneve11, $evolutionGeneve12];

            $evoGeneve = [];

            for ($i=0; $i < count($evolutionGeneve) ; $i++) {
                array_push($evoGeneve, $evolutionGeneve[$i][0]['create']);
            }

            //Franck

            $em = $this->getDoctrine()->getManager();
        	$user = $this->container->get('security.context')->getToken()->getUser();
        	 $request = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());


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

            'membresGeneve'           =>$membresGeneve,

            'evoParis'                =>$evoParis,

            'evoBordeaux'             =>$evoBordeaux,

            'evoLoupe'                =>$evoLoupe,

            'evoChartres'             =>$evoChartres,

            'evoFontainebleau'        =>$evoFontainebleau,

            'evoOrleans'              =>$evoOrleans,

            'evoLyon'                 =>$evoLyon,

            'evoToulouse'             =>$evoToulouse,

            'evoStrasbourg'           =>$evoStrasbourg,

            'evoNantes'               =>$evoNantes,

            'evoNice'                 =>$evoNice,

            'evoMontpellier'          =>$evoMontpellier,

            'evoRennes'               =>$evoRennes,

            'evoLille'                =>$evoLille,

            'evoBruxelles'            =>$evoBruxelles,

            'evoLuxembourg'           =>$evoLuxembourg,

            'evoGeneve'               =>$evoGeneve,

            'requete' => $request
        )
    );

    }
}
