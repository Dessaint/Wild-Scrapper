<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use MeetupBundle\Entity\GroupesPHP;
use MeetupBundle\Entity\Event;

class VilleController extends Controller
{
    public function showAction($ville)
    {

    	 $em = $this->getDoctrine()->getManager();

    	 $user = $this->container->get('security.context')->getToken()->getUser();

    	 $request = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());

    	 $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MeetupBundle:GroupesPHP')
            ;
         // Boite 1
            //Ville de Paris

        $membresPHPParis = $repository->MembersByCity('PHP', $ville);
        $membresJavaScriptParis = $repository->MembersByCity('JavaScript', $ville);
        $membresRubyParis = $repository->MembersByCity('Ruby', $ville);
        $membresIOSParis = $repository->MembersByCity('IOS', $ville);

        $membresVille = $repository->MembersOrderByCity($ville);
        $membresPHPVille = $repository->MembersByCity('php', $ville);
        if (empty($membresPHPVille)) {
            $array[0] = array('membresTotal' => 0, 'topic' => 'php', 'city' => $ville);
            $membresVille = array_merge($membresVille, $array);
        }
         $membresJavaScriptVille = $repository->MembersByCity('javascript', $ville);
        if (empty($membresJavaScriptVille)) {
            $array[0] = array('membresTotal' => 0, 'topic' => 'javascript', 'city' => $ville);
            $membresVille = array_merge($membresVille, $array);
        }
        $membresRubyVille = $repository->MembersByCity('ruby', $ville);
        if (empty($membresRubyVille)) {
            $array[0] = array('membresTotal' => 0, 'topic' => 'ruby', 'city' => $ville);
            $membresVille = array_merge($membresVille, $array);
        }
        $membresIOSVille = $repository->MembersByCity('ios', $ville);
        if (empty($membresIOSVille)) {
            $array[0] = array('membresTotal' => 0, 'topic' => 'ios', 'city' => $ville);
            $membresVille = array_merge($membresVille, $array);
        }


        //var_dump($membresPHPVille); exit;
        $membresVilleTotal = $membresVille[0]['membresTotal'] + $membresVille[1]['membresTotal'] + $membresVille[2]['membresTotal'] + $membresVille[3]['membresTotal'];


        if (!empty($membresVilleTotal)) {
            $membresVilleLangagePourcent = round((($membresVille[0]['membresTotal']/$membresVilleTotal)*100), 2);
        } else {
            $membresVilleLangagePourcent = 0;
        }

         // Boite 2
        $request1 = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
        $request1
        	->select('g.members')
		   	->addSelect('g.name')
            ->where('g.city = ?1')
		   	->orderBy('g.members', 'DESC')
            ->setParameters(array( 1=> $ville))
		   	->setMaxResults(1);

		$query = $request1->getQuery();

		$result = $query->getResult();

        if (empty($result)) {
            $topGroup1 = 'Aucune données';
        } else {
		$topGroup = ($result[0]["name"]);

		$topGroup1 = substr($topGroup,0, 14 );
        }

         // Boite 3
		$request2 = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
        $request2
        	->select('g.members')
		   	->addSelect('g.name')
            ->where('g.city = ?1')
		   	->orderBy('g.members', 'ASC')
            ->setParameters(array( 1=> $ville))
		   	->setMaxResults(1);

		$query = $request2->getQuery();

		$result = $query->getResult();
        if (empty($result)) {
            $flopGroup1 = 'Aucune données';
        } else {
		$flopGroup = ($result[0]["name"]);

		$flopGroup1 = substr($flopGroup,0, 14 );
        }

         // Boite 4

		$request3 = $em->getRepository('MeetupBundle:Event')->createQueryBuilder('e');
		$request3
			->select('SUM(e.rsvp) AS groupesDyn')
            ->addSelect('e.nameGroup')
            ->where('e.ville = ?1')
            ->groupBy('e.nameGroup')
			->orderBy('groupesDyn', 'DESC')
            ->setParameters(array( 1=> $ville))
			->setMaxResults(1);

		$query2 = $request3->getQuery();

		$result = $query2->getResult();
        if (empty($result)) {
            $dynagroupe1 = "Aucune données";
        } else {
        $dynagroupe = ($result[0]["nameGroup"]);

        $dynagroupe1 = substr($dynagroupe,0, 14 );
        }


		// Nuage de mots

		$repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MeetupBundle:Topics')
            ;

        $countVille = $repository->WordCloudByCity($ville);

        // Evenements TOP

        $request_dyn = $em->getRepository('MeetupBundle:Event')->createQueryBuilder('e');
        $request_dyn
            ->select ('e.rsvp')
            ->addSelect('e.name')
            ->distinct('e.id')
            ->where('e.ville = ?1')
            ->orderBy('e.rsvp', 'DESC')
            ->setParameters(array( 1=> $ville))
            ->setMaxResults(5);

        $query_dyn = $request_dyn->getQuery();

        $result_dyn = $query_dyn->getResult();
        if (empty($result_dyn[4])) {
        $result_dyn[4]['rsvp'] = 0;
        $result_dyn[4]['name'] = 'vide';
        }
        if (empty($result_dyn[3])) {
        $result_dyn[3]['rsvp'] = 0;
        $result_dyn[3]['name'] = 'vide';
        }
        if (empty($result_dyn[2])) {
        $result_dyn[2]['rsvp'] = 0;
        $result_dyn[2]['name'] = 'vide';
        }
        if (empty($result_dyn[1])) {
        $result_dyn[1]['rsvp'] = 0;
        $result_dyn[1]['name'] = 'vide';
        }
        if (empty($result_dyn[0])) {
        $result_dyn[0]['rsvp'] = 0;
        $result_dyn[0]['name'] = 'vide';
        }
        $topevent = $result_dyn;


        // Evenements FLOP

        $request_nodyn = $em->getRepository('MeetupBundle:Event')->createQueryBuilder('e');
        $request_nodyn
            ->select ('e.rsvp')
            ->addSelect('e.name')
            ->distinct('e.id')
            ->where('e.ville = ?1')
            ->orderBy('e.rsvp', 'ASC')
            ->setParameters(array( 1=> $ville))
            ->setMaxResults(5);

        $query_nodyn = $request_nodyn->getQuery();

        $result_nodyn = $query_nodyn->getResult();
        if (empty($result_nodyn[4])) {
        $result_nodyn[4]['rsvp'] = 0;
        $result_nodyn[4]['name'] = 'vide';
        }
        if (empty($result_nodyn[3])) {
        $result_nodyn[3]['rsvp'] = 0;
        $result_nodyn[3]['name'] = 'vide';
        }
        if (empty($result_nodyn[2])) {
        $result_nodyn[2]['rsvp'] = 0;
        $result_nodyn[2]['name'] = 'vide';
        }
        if (empty($result_nodyn[1])) {
        $result_nodyn[1]['rsvp'] = 0;
        $result_nodyn[1]['name'] = 'vide';
        }
        if (empty($result_nodyn[0])) {
        $result_nodyn[0]['rsvp'] = 0;
        $result_nodyn[0]['name'] = 'vide';
        }
        $flopevent = $result_nodyn;

		 //Last date Meetup

		$request_last = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
		$request_last
			->select('g.created')
			->addSelect('g.name')
            ->distinct('g.id')
            ->where('g.city = ?1')
			->orderBy('g.created', 'DESC')
            ->setParameters(array( 1=> $ville))
			->setMaxResults(5);

		$query_last = $request_last->getQuery();
		$result_last = $query_last->getResult();
        if (empty($result_last)) {
            $result_date = 'Aucun groupe crée';
        } else {
            date_default_timezone_set('Europe/Paris');
            $result_date = date("d-m-Y", $result_last[0]['created']/1000);
        }

        //Evolution
        $repository55 = $this
           ->getDoctrine()
           ->getManager()
           ->getRepository('MeetupBundle:Event')
           ;
        $evolutionPhpVille1 = $repository55->MeetupCreatedByMonth('1', $ville, 'PHP');
        $evolutionPhpVille2 = $repository55->MeetupCreatedByMonth('2', $ville, 'PHP');
        $evolutionPhpVille3 = $repository55->MeetupCreatedByMonth('3', $ville, 'PHP');
        $evolutionPhpVille4 = $repository55->MeetupCreatedByMonth('4', $ville, 'PHP');
        $evolutionPhpVille5 = $repository55->MeetupCreatedByMonth('5', $ville, 'PHP');
        $evolutionPhpVille6 = $repository55->MeetupCreatedByMonth('6', $ville, 'PHP');
        $evolutionPhpVille7 = $repository55->MeetupCreatedByMonth('7', $ville, 'PHP');

        $evolutionJavascriptVille1 = $repository55->MeetupCreatedByMonth('1', $ville, 'javascript');
        $evolutionJavascriptVille2 = $repository55->MeetupCreatedByMonth('2', $ville, 'javascript');
        $evolutionJavascriptVille3 = $repository55->MeetupCreatedByMonth('3', $ville, 'javascript');
        $evolutionJavascriptVille4 = $repository55->MeetupCreatedByMonth('4', $ville, 'javascript');
        $evolutionJavascriptVille5 = $repository55->MeetupCreatedByMonth('5', $ville, 'javascript');
        $evolutionJavascriptVille6 = $repository55->MeetupCreatedByMonth('6', $ville, 'javascript');
        $evolutionJavascriptVille7 = $repository55->MeetupCreatedByMonth('7', $ville, 'javascript');

        $evolutionRubyVille1 = $repository55->MeetupCreatedByMonth('1', $ville, 'ruby');
        $evolutionRubyVille2 = $repository55->MeetupCreatedByMonth('2', $ville, 'ruby');
        $evolutionRubyVille3 = $repository55->MeetupCreatedByMonth('3', $ville, 'ruby');
        $evolutionRubyVille4 = $repository55->MeetupCreatedByMonth('4', $ville, 'ruby');
        $evolutionRubyVille5 = $repository55->MeetupCreatedByMonth('5', $ville, 'ruby');
        $evolutionRubyVille6 = $repository55->MeetupCreatedByMonth('6', $ville, 'ruby');
        $evolutionRubyVille7 = $repository55->MeetupCreatedByMonth('7', $ville, 'ruby');

        $evolutionIosVille1 = $repository55->MeetupCreatedByMonth('1', $ville, 'ios');
        $evolutionIosVille2 = $repository55->MeetupCreatedByMonth('2', $ville, 'ios');
        $evolutionIosVille3 = $repository55->MeetupCreatedByMonth('3', $ville, 'ios');
        $evolutionIosVille4 = $repository55->MeetupCreatedByMonth('4', $ville, 'ios');
        $evolutionIosVille5 = $repository55->MeetupCreatedByMonth('5', $ville, 'ios');
        $evolutionIosVille6 = $repository55->MeetupCreatedByMonth('6', $ville, 'ios');
        $evolutionIosVille7 = $repository55->MeetupCreatedByMonth('7', $ville, 'ios');

        if ($evolutionPhpVille1[0]['topic'] === null) {
            $evolutionPhpVille1[0]['topic'] = 'Php';
        }
        if ($evolutionJavascriptVille1[0]['topic'] === null) {
            $evolutionJavascriptVille1[0]['topic'] = 'Javascript';
        }
        if ($evolutionRubyVille1[0]['topic'] === null) {
            $evolutionRubyVille1[0]['topic'] = 'Ruby';
        }
        if ($evolutionIosVille1[0]['topic'] === null) {
            $evolutionIosVille1[0]['topic'] = 'Ios';
        }

        $evoPhpVille = [$evolutionPhpVille1[0], $evolutionPhpVille2[0], $evolutionPhpVille3[0], $evolutionPhpVille4[0], $evolutionPhpVille5[0], $evolutionPhpVille6[0], $evolutionPhpVille7[0]];
        $evoJavascriptVille = [$evolutionJavascriptVille1[0], $evolutionJavascriptVille2[0], $evolutionJavascriptVille3[0], $evolutionJavascriptVille4[0], $evolutionJavascriptVille5[0], $evolutionJavascriptVille6[0], $evolutionJavascriptVille7[0]];
        $evoRubyVille = [$evolutionRubyVille1[0], $evolutionRubyVille2[0], $evolutionRubyVille3[0], $evolutionRubyVille4[0], $evolutionRubyVille5[0], $evolutionRubyVille6[0], $evolutionRubyVille7[0]];
        $evoIosVille = [$evolutionIosVille1[0], $evolutionIosVille2[0], $evolutionIosVille3[0], $evolutionIosVille4[0], $evolutionIosVille5[0], $evolutionIosVille6[0], $evolutionIosVille7[0]];


        $month = date('M');
        $month1 = date('M', strtotime("-1 month"));
        $month2 = date('M', strtotime("-2 month"));
        $month3 = date('M', strtotime("-3 month"));
        $month4 = date('M', strtotime("-4 month"));
        $month5 = date('M', strtotime("-5 month"));
        $month6 = date('M', strtotime("-6 month"));

        $datte = [$month, $month1, $month2, $month3, $month4, $month5, $month6];

    	return $this->render('MeetupBundle:Default:ville.html.twig', array(
    	     'requete' => $request,
    	     'toplangage' => $membresVille,
    	     'langagePourcent' => $membresVilleLangagePourcent,
    	     'topGroup' => $topGroup1,
    	     'flopGroup' => $flopGroup1,
    	     'lastGroup' => $result_last,
    	     'dateGroup' => $result_date,
    	     'countParis' => $countVille,
             'evoPhpVille' => $evoPhpVille,
             'evoJavascriptVille' => $evoJavascriptVille,
             'evoRubyVille' => $evoRubyVille,
             'evoIosVille' => $evoIosVille,
             'datte' => $datte
             'dynagroupe' => $dynagroupe1,
             'topevent' => $result_dyn,
             'flopevent' => $result_nodyn,
    	 ));
    }
}
