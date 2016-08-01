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
            $topGroup1 = 'aucun groupe';
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
            $flopGroup1 = 'aucun groupe';
        } else {
		$flopGroup = ($result[0]["name"]);

		$flopGroup1 = substr($flopGroup,0, 14 );
        }

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

        $countVille = $repository->WordCloudByCity($ville);



         // Boite 1
            //Ville de Paris



		 //Last date Meetup
		$request_last = $em->getRepository('MeetupBundle:GroupesPHP')->createQueryBuilder('g');
		$request_last
			->select('g.created')
			->addSelect('g.name')
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







         // $membresParisLangage =
    	return $this->render('MeetupBundle:Default:ville.html.twig', array(
    	     'requete' => $request,
    	     'toplangage' => $membresVille,
    	     'langagePourcent' => $membresVilleLangagePourcent,
    	     'topGroup' => $topGroup1,
    	     'flopGroup' => $flopGroup1,
    	     'lastGroup' => $result_last,
    	     'dateGroup' => $result_date,
    	     'countParis' => $countVille

    	 ));
    }


}

}
