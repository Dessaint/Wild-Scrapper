<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MeetupBundle\Entity\GroupesTech;

class GroupesController extends Controller
{
    public function showgroupsAction()

    {
    	//$em = $this->getDoctrine()->getManager();
    	$em = $this->getDoctrine()->getEntityManager();
    	$connection = $em->getConnection();
		$statement = $connection->prepare("SELECT * FROM groupes_tech WHERE city ='paris'");
		//$query = $em->createQuery('SELECT g FROM MeetupBundle:GroupesTech g WHERE g.city = 'city);

    	 $statement->execute();	
		
		$groupes = $statement->fetchAll();

        $data = json_encode($groupes);
        var_dump($data);

        return $this->render('MeetupBundle:Default:test.html.twig',array(
            'groupes' => $groupes,
        ));
    }
}
