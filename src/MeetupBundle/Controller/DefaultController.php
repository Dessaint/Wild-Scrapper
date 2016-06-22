<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // $jsonData = "";
        // for ($i=0; $i<4; $i++) {
        //  $jsonData += file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=".$i."&city=paris&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
        //
        //     }
            $tabVilles = ["paris", "marseille"];

            foreach ($tabVilles as $value) {
                $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=0&city=".$value."&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
                $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=1&city=".$value."&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
                $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=2&city=".$value."&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
                $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=3&city=".$value."&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");
                $jsonData4 = file_get_contents("https://api.meetup.com/2/groups?country=fr&offset=4&city=".$value."&sign=True&format=json&lon=2.33999991417&category_id=34&photo-host=public&page=200&radius=25.0&fields=&lat=48.8600006104&key=17662761a2d418394102b53502864&order=id&desc=false");

                 $Data0 = json_decode($jsonData0, true);
                 $Data1 = json_decode($jsonData1, true);
                 $Data2 = json_decode($jsonData2, true);
                 $Data3 = json_decode($jsonData3, true);
                 $Data4 = json_decode($jsonData4, true);

                $Data[$value] = [$Data0, $Data1, $Data2, $Data3, $Data4];

            }



             var_dump($Data); exit;
        return $this->render('MeetupBundle:Default:index.html.twig');
    }
}
