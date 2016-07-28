<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use MeetupBundle\Entity\GroupesPHP;

class VilleController extends Controller
{
    public function showAction()
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
        $membresPHPParis = $repository->MembersByCity('PHP', 'paris');
        $membresJavaScriptParis = $repository->MembersByCity('JavaScript', 'paris');
        $membresRubyParis = $repository->MembersByCity('Ruby', 'paris');
        $membresIOSParis = $repository->MembersByCity('IOS', 'paris');
        	
        $membresParis = [];
        $membresParis['PHP'] = $membresPHPParis[0]['membresTotal'];
        $membresParis['Javascript'] = $membresJavaScriptParis[0]['membresTotal'];
        $membresParis['Ruby'] = $membresRubyParis[0]['membresTotal'];
        $membresParis['Ios'] = $membresIOSParis[0]['membresTotal'];

        $membresParis['total'] = $membresParis['PHP']+$membresParis['Javascript']+$membresParis['Ruby']+$membresParis['Ios'];
        $membresParisTotal =  $membresPHPParis[0]['membresTotal']+$membresJavaScriptParis[0]['membresTotal']+$membresRubyParis[0]['membresTotal']+$membresIOSParis[0]['membresTotal'];
        $membresParisMax = max($membresPHPParis[0]['membresTotal'], $membresJavaScriptParis[0]['membresTotal'], $membresRubyParis[0]['membresTotal'], $membresIOSParis[0]['membresTotal']);
        $membresParisLangageNb = arsort($membresParis);
        $membresParisLangage = array_keys($membresParis)[1];

        $membresParisLangagePourcent = round((($membresParisMax/$membresParisTotal)*100), 2);
 
         // Boite 2
        $request1 = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
        $request1
        	->select('g.members')
		   	->addSelect('g.name')
		   	->orderBy('g.members', 'DESC')
		   	->setMaxResults(1);

		$query = $request1->getQuery();
		
		$result = $query->getResult();
		$topGroup = ($result[0]["name"]);

		$topGroup1 = substr($topGroup,0, 14 );

         // Boite 3
		$request2 = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
        $request2
        	->select('g.members')
		   	->addSelect('g.name')
		   	->orderBy('g.members', 'ASC')
		   	->setMaxResults(1);

		$query = $request2->getQuery();
		
		$result = $query->getResult();
		$flopGroup = ($result[0]["name"]);

		$flopGroup1 = substr($flopGroup,0, 14 );

         // Boite 4
            //Ville Paris
		$request3 = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
		$request3
			->select('g.members')
			->addSelect('g.name')
			->addSelect('g.id')
			->orderBy('g.members', 'DESC')
			->setMaxResults(50);

		$query2 = $request3->getQuery();

		$result = $query2->getResult();

		 //Last date Meetup
		$request_last = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
		$request_last 
			->select('g.created')
			->addSelect('g.name')
			->orderBy('g.created', 'DESC')
			->setMaxResults(5);

		$query_last = $request_last->getQuery();
		$result_last = $query_last->getResult();

		date_default_timezone_set('Europe/Paris');
		$result_date = date("d-m-Y", $result_last[0]['created']/1000); 

         // $membresParisLangage = 
    	return $this->render('MeetupBundle:Default:ville.html.twig', array(
    	     'requete' => $request,
    	     'toplangage' => $membresParisLangage,
    	     'langagePourcent' => $membresParisLangagePourcent,
    	     'topGroup' => $topGroup1,
    	     'flopGroup' => $flopGroup1,
    	     'lastGroup' => $result_last,
    	     'dateGroup' => $result_date,
    	     
    	 ));
    }
}