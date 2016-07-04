<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MeetupBundle\Entity\Groupes;
use MeetupBundle\Entity\Topics;

class DefaultController extends Controller
{
    public function indexAction()
    {
            // J'initie un tableau et je place mes villes
            $tabVilles = ["paris", "chartres", "la+loupe", "fontainebleau", "orleans", "lyon", "bordeaux", "toulouse", "strasbourg", "nantes", "nice", "montpellier", "rennes", "lille"];


            foreach ($tabVilles as $ville) {

                $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
                $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
                $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
                $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");

                 $Data0 = json_decode($jsonData0, true);
                 $Data1 = json_decode($jsonData1, true);
                 $Data2 = json_decode($jsonData2, true);
                 $Data3 = json_decode($jsonData3, true);

                $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];

                $em = $this->getDoctrine()->getManager();
                for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {
                    for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {

                        $groupes = new Groupes();

                        $groupes->setName($Data[$ville][$i]['results'][$j]['name']);
                        $groupes->setCountry($Data[$ville][$i]['results'][$j]['country']);
                        $groupes->setCity($Data[$ville][$i]['results'][$j]['city']);
                        $groupes->setCreated($Data[$ville][$i]['results'][$j]['created']);
                        $groupes->setLon($Data[$ville][$i]['results'][$j]['lon']);
                        $groupes->setLat($Data[$ville][$i]['results'][$j]['lat']);
                        $groupes->setMembers($Data[$ville][$i]['results'][$j]['members']);

                        for ($k=0, $c3 = count($Data[$ville][$i]['results'][$j]['topics']); $k< $c3 ; $k++) {

                            $topics = new Topics();

                            $topics->setName($Data[$ville][$i]['results'][$j]['topics'][$k]['name']);

                        }
                        $em->persist($topics);
                        $em->persist($groupes);
                    }

                }
            }

            $em->flush();

        return $this->render('MeetupBundle:Default:index.html.twig');
    }
}
