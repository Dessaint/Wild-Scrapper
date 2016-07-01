<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MeetupBundle\Entity\Groupes;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // $jsonData = "";
        // for ($i=0; $i<4; $i++) {
        //  $jsonData += file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=".$i."&city=paris&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
        //
        //     }
            $tabVilles = ["chartres"];

            foreach ($tabVilles as $ville) {

                $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=0&city=".$ville."&format=json&lon=2.33999991417&category_id=34&only=id%2Ccountry%2Ccity%2Ccreated%2Clon%2Clat%2Cmembers%2Cname%2Cdate%2Ctopics&photo-host=public&page=500&radius=25.0&fields=&lat=48.8600006104&order=id&desc=false&sig_id=203874462&sig=2d19a05446779cb8fa228d736bb2ba954b064db3");
                $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=1&city=".$ville."&format=json&lon=2.33999991417&category_id=34&only=id%2Ccountry%2Ccity%2Ccreated%2Clon%2Clat%2Cmembers%2Cname%2Cdate%2Ctopics&photo-host=public&page=500&radius=25.0&fields=&lat=48.8600006104&order=id&desc=false&sig_id=203874462&sig=2d19a05446779cb8fa228d736bb2ba954b064db3");
                $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=2&city=".$ville."&format=json&lon=2.33999991417&category_id=34&only=id%2Ccountry%2Ccity%2Ccreated%2Clon%2Clat%2Cmembers%2Cname%2Cdate%2Ctopics&photo-host=public&page=500&radius=25.0&fields=&lat=48.8600006104&order=id&desc=false&sig_id=203874462&sig=2d19a05446779cb8fa228d736bb2ba954b064db3");
                $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=3&city=".$ville."&format=json&lon=2.33999991417&category_id=34&only=id%2Ccountry%2Ccity%2Ccreated%2Clon%2Clat%2Cmembers%2Cname%2Cdate%2Ctopics&photo-host=public&page=500&radius=25.0&fields=&lat=48.8600006104&order=id&desc=false&sig_id=203874462&sig=2d19a05446779cb8fa228d736bb2ba954b064db3");


                 $Data0 = json_decode($jsonData0, true);
                 $Data1 = json_decode($jsonData1, true);
                 $Data2 = json_decode($jsonData2, true);
                 $Data3 = json_decode($jsonData3, true);


                $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];

            }

$em = $this->getDoctrine()->getManager();
            for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {
                for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {
                    $groupes = new Groupes();
                    $groupes->setName($Data[$ville][$i]['results'][$j]['name']);
                    $groupes->setCountry($Data[$ville][$i]['results'][$j]['country']);
                    $groupes->setCountry($Data[$ville][$i]['results'][$j]['city']);
                    $groupes->setCreated($Data[$ville][$i]['results'][$j]['created']);
                    $groupes->setLon($Data[$ville][$i]['results'][$j]['lon']);
                    $groupes->setLon($Data[$ville][$i]['results'][$j]['lat']);
                    $groupes->setLon($Data[$ville][$i]['results'][$j]['members']);

                    $em->persist($groupes);
                }
            }
            $em->flush();


            // ($Data[$ville][0]['results'][0]['name']);
            // foreach ($Data as $key => $value) {
            //     $groupes = new Groupes();
            //     $groupes->setName($Data[$ville]['results']['name']);
            //     $em->persist($groupes);
            // }
            //
            //     $em->flush;







            //  var_dump($Data); exit;
        return $this->render('MeetupBundle:Default:index.html.twig');
    }
}
