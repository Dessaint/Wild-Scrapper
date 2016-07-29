<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use MeetupBundle\Entity\GroupesPHP;

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
        	
        $membresParis = [];
        if (empty($membresPHPParis)) {
            $membresPHPParis = array('membresTotal' => 0);
        } else {
            $membresPHPParis = $membresPHPParis[0]['membresTotal'];    
        }

        if (empty($membresJavaScriptParis)) {
            $membresJavaScriptParis = array('membresTotal' => 0);
        } else {
            $membresJavaScriptParis = $membresJavaScriptParis[0]['membresTotal'];        
        }

        if (empty($membresRubyParis)) {
            $membresRubyParis = array('membresTotal' => 0);
        } else {
            $membresRubyParis = $membresRubyParis[0]['membresTotal'];             
        }

        if (empty($membresIOSParis)) {
            $membresIOSParis = array('membresTotal' => 0);
        } else {
            $membresIOSParis = $membresIOSParis[0]['membresTotal'];                  
        }
        

        $membresParis['total'] = $membresPHPParis+$membresJavaScriptParis+$membresRubyParis+$membresIosParis;
        $membresParisTotal =  $membresPHPParis['membresTotal']+$membresJavaScriptParis['membresTotal']+$membresRubyParis['membresTotal']+$membresIOSParis['membresTotal'];
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

		// Nuage de mots

		$repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('MeetupBundle:Topics')
            ;
        $countParis = $repository->WordCloudByCity($ville);

       



		// Repartition langage
		$membresPHPParis = $membresPHPParis[0];
        $membresJavaScriptParis = $membresJavaScriptParis[0];
        $membresRubyParis = $membresRubyParis[0];
        $membresIOSParis = $membresIOSParis[0];

        $membresParisRepart = [$membresPHPParis, $membresJavaScriptParis, $membresRubyParis, $membresIOSParis];


         // Boite 1
            //Ville de Paris
        


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
    	     'membresParisRepart' => $membresParisRepart,
    	     'countParis' => $countParis
    	     
    	 ));
    }
    
}