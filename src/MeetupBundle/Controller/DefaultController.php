<?php

namespace MeetupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MeetupBundle\Entity\Groupes;
use MeetupBundle\Entity\Topics;
use MeetupBundle\Entity\Villes;
use MeetupBundle\Entity\GroupesTopics;
use MeetupBundle\Entity\GroupesPHP;
use MeetupBundle\Entity\Event;
use MeetupBundle\Entity\Extract;

class DefaultController extends Controller
{
    public function groupesAction()
    {
        ini_set('max_execution_time', 1200);
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
            $villes = new Villes();
            $villes->setNom($ville);

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
                    $groupes->setMeetupid($Data[$ville][$i]['results'][$j]['id']);
                    $groupes->setVilles($villes);
                    $em->persist($groupes);
                }

            }
            $em->persist($villes);
        }

        $em->flush();

        return $this->render('MeetupBundle:Default:index.html.twig');
    }

    public function eventAction()
    {
        ini_set('max_execution_time', 1200);
        ini_set('memory_limit', '256M');
        // J'initie un tableau et je place mes villes
        $tabVilles = ["paris" => "fr", "chartres" => "fr", "la+loupe" => "fr", "fontainebleau" => "fr", "orleans" => "fr", "lyon" => "fr", "bordeaux" => "fr", "toulouse" => "fr", "strasbourg" => "fr", "nantes" => "fr", "nice" => "fr", "montpellier" => "fr", "rennes" => "fr", "lille" => "fr", "brussels" => "be", "luxembourg" => "lu", "geneve" => "ch"];
        $topicUrls = ["php", "javascript", "ruby", "ios"];

        foreach ($tabVilles as $ville => $pays) {
            foreach ($topicUrls as $topicUrl) {


            $jsonData0 = file_get_contents("https://api.meetup.com/2/open_events?&sign=true&photo-host=public&country=".$pays."&city=".$ville."&topic=".$topicUrl."&category=34&fields=self&time=-6m,1d&status=past&key=32474d2b14207838611a722d10416842&offset=0");

            $Data0 = json_decode($jsonData0, true);

            $Data[$ville] = [$Data0];

            $em = $this->getDoctrine()->getManager();

            for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {

                for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {

                    $event = new Event();
                    $event->setVille($ville);
                    $event->setName($Data[$ville][$i]['results'][$j]['name']);
                    $event->setIdGroupes($Data[$ville][$i]['results'][$j]['group']['id']);
                    $event->setNameGroup($Data[$ville][$i]['results'][$j]['group']['name']);
                    $event->setRsvp($Data[$ville][$i]['results'][$j]['yes_rsvp_count']);
                    $event->setRating($Data[$ville][$i]['results'][$j]['rating']['average']);
                    $event->setTopic($topicUrl);
                    
                    $event->setCreated($Data[$ville][$i]['results'][$j]['created']);

                    $em->persist($event);
                }

            }
        }
        }
        $em->flush();

        return $this->redirectToRoute('groupePHP');
    }

    public function topicsAction()
    {

        ini_set('max_execution_time', 120);
        ini_set('memory_limit', '256M');
          function get_results($pays, $city, $api_key, $offset) {
                return file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=".$pays."&city=".$city."&key=".$api_key."&offset=".$offset."");
            }
        // J'initie un tableau et je place mes villes
        $cities = ["paris" => "fr", "la+loupe" => "fr", "chartres" => "fr", "fontainebleau" => "fr", "orleans" => "fr", "lyon" => "fr", "bordeaux" => "fr", "toulouse" => "fr", "strasbourg" => "fr", "nantes" => "fr", "nice" => "fr", "montpellier" => "fr", "rennes" => "fr", "lille" => "fr", "brussels" => "be", "luxembourg" => "lu", "geneve" => "ch"];

        $api_key = "17662761a2d418394102b53502864";
        foreach ($cities as $city => $pays) {
            $per_page = 200;

            $result_we_got = $per_page;

            $offset = 0;

            while ($result_we_got === $per_page) {
                $jsonResponse = get_results($pays, $city, $api_key, $offset);
                $response = json_decode($jsonResponse, true);

                $offset++;
                $result_we_got = $response['meta']['count'];
                $em = $this->getDoctrine()->getManager();

                    for ($i=0, $c = count($response); $i< $c; $i++) {

                        for($j=0, $c2 = count($response['results']); $j < $c2; $j++) {

                            for ($k=0, $c3 = count($response['results'][$j]['topics']); $k< $c3 ; $k++) {

                                $topics = new Topics();

                                $topics->setName($response['results'][$j]['topics'][$k]['name']);

                                $topics->setMeetupgroupeid($response['results'][$j]['id']);

                                $topics->setMeetuptopicid($response['results'][$j]['topics'][$k]['id']);

                                $topics->setVille($response['results'][$j]['city']);

                                $em->persist($topics);
                            }
                        }
                    }
                }
            } $em->flush();

        //      Ancienne méthode
        //     $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
        //     $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
        //     $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
        //     $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");
        //
        //     $Data0 = json_decode($jsonData0, true);
        //     $Data1 = json_decode($jsonData1, true);
        //     $Data2 = json_decode($jsonData2, true);
        //     $Data3 = json_decode($jsonData3, true);
        //
        //     $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];
        //
        //     $em = $this->getDoctrine()->getManager();
        //
        //     for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {
        //
        //         for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {
        //
        //             for ($k=0, $c3 = count($Data[$ville][$i]['results'][$j]['topics']); $k< $c3 ; $k++) {
        //
        //                 $topics = new Topics();
        //
        //                 $topics->setName($Data[$ville][$i]['results'][$j]['topics'][$k]['name']);
        //                 $topics->setMeetupgroupeid($Data[$ville][$i]['results'][$j]['id']);
        //                 $topics->setMeetuptopicid($Data[$ville][$i]['results'][$j]['topics'][$k]['id']);
        //                 $topics->setVille($Data[$ville][$i]['results'][$j]['city']);
        //                 $em->persist($topics);
        //             }
        //         }
        //     }
        // }
        //
        // $em->flush();

        return $this->redirectToRoute('event');
    }

    public function groupesTopicsAction()
    {
        ini_set('max_execution_time', 300);
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

                    for ($k=0, $c3 = count($Data[$ville][$i]['results'][$j]['topics']); $k< $c3 ; $k++) {

                        $groupesTopics = new GroupesTopics();

                        $groupesTopics->setIdGroupe($Data[$ville][$i]['results'][$j]['id']);
                        $groupesTopics->setIdTopic($Data[$ville][$i]['results'][$j]['topics'][$k]['id']);
                        $em->persist($groupesTopics);
                    }
                }
            }
        }

        $em->flush();

        return $this->render('MeetupBundle:Default:index.html.twig');
    }

    public function groupesPHPAction()
    {
        ini_set('max_execution_time', 120);
        ini_set('memory_limit', '256M');
        // J'initie un tableau et je place mes villes
        $tabVilles = ["paris", "chartres", "la+loupe", "fontainebleau", "orleans", "lyon", "bordeaux", "toulouse", "strasbourg", "nantes", "nice", "montpellier", "rennes", "lille", "brussels", "luxembourg", "geneve"];
        $topicUrls = ["php", "javascript", "ruby", "ios"];

        foreach($topicUrls as $topicUrl)
        {
            foreach ($tabVilles as $ville)
            {

                if ($ville === 'brussels')
                {

                    $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=be&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
                    $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=be&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
                    $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=be&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
                    $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=be&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");

                    $Data0 = json_decode($jsonData0, true);
                    $Data1 = json_decode($jsonData1, true);
                    $Data2 = json_decode($jsonData2, true);
                    $Data3 = json_decode($jsonData3, true);

                    $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];

                    $em = $this->getDoctrine()->getManager();

                    for ($i=0, $c = count($Data[$ville]); $i< $c; $i++)
                    {
                        for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++)
                        {
                            $groupesPHP = new GroupesPHP();

                            $groupesPHP->setName($Data[$ville][$i]['results'][$j]['name']);
                            $groupesPHP->setCountry($Data[$ville][$i]['results'][$j]['country']);
                            $groupesPHP->setCity($Data[$ville][$i]['results'][$j]['city']);
                            $groupesPHP->setTopic($topicUrl);
                            $groupesPHP->setCreated($Data[$ville][$i]['results'][$j]['created']);
                            $groupesPHP->setLon($Data[$ville][$i]['results'][$j]['lon']);
                            $groupesPHP->setLat($Data[$ville][$i]['results'][$j]['lat']);
                            $groupesPHP->setMembers($Data[$ville][$i]['results'][$j]['members']);
                            $groupesPHP->setMeetupid($Data[$ville][$i]['results'][$j]['id']);

                            $em->persist($groupesPHP);
                        }

                    }

                } else if ($ville === 'luxembourg') {

                    $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=lu&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
                    $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=lu&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
                    $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=lu&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
                    $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=lu&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");

                    $Data0 = json_decode($jsonData0, true);
                    $Data1 = json_decode($jsonData1, true);
                    $Data2 = json_decode($jsonData2, true);
                    $Data3 = json_decode($jsonData3, true);

                    $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];

                    $em = $this->getDoctrine()->getManager();

                    for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {

                        for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {

                            $groupesPHP = new GroupesPHP();

                            $groupesPHP->setName($Data[$ville][$i]['results'][$j]['name']);
                            $groupesPHP->setCountry($Data[$ville][$i]['results'][$j]['country']);
                            $groupesPHP->setCity($Data[$ville][$i]['results'][$j]['city']);
                            $groupesPHP->setTopic($topicUrl);
                            $groupesPHP->setCreated($Data[$ville][$i]['results'][$j]['created']);
                            $groupesPHP->setLon($Data[$ville][$i]['results'][$j]['lon']);
                            $groupesPHP->setLat($Data[$ville][$i]['results'][$j]['lat']);
                            $groupesPHP->setMembers($Data[$ville][$i]['results'][$j]['members']);
                            $groupesPHP->setMeetupid($Data[$ville][$i]['results'][$j]['id']);

                            $em->persist($groupesPHP);
                        }

                    }

                } else if ($ville === 'geneve') {

                    $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=ch&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
                    $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=ch&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
                    $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=ch&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
                    $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=ch&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");

                    $Data0 = json_decode($jsonData0, true);
                    $Data1 = json_decode($jsonData1, true);
                    $Data2 = json_decode($jsonData2, true);
                    $Data3 = json_decode($jsonData3, true);

                    $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];

                    $em = $this->getDoctrine()->getManager();

                    for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {

                        for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {

                            $groupesPHP = new GroupesPHP();

                            $groupesPHP->setName($Data[$ville][$i]['results'][$j]['name']);
                            $groupesPHP->setCountry($Data[$ville][$i]['results'][$j]['country']);
                            $groupesPHP->setCity($Data[$ville][$i]['results'][$j]['city']);
                            $groupesPHP->setTopic($topicUrl);
                            $groupesPHP->setCreated($Data[$ville][$i]['results'][$j]['created']);
                            $groupesPHP->setLon($Data[$ville][$i]['results'][$j]['lon']);
                            $groupesPHP->setLat($Data[$ville][$i]['results'][$j]['lat']);
                            $groupesPHP->setMembers($Data[$ville][$i]['results'][$j]['members']);
                            $groupesPHP->setMeetupid($Data[$ville][$i]['results'][$j]['id']);

                            $em->persist($groupesPHP);
                        }

                    }

                } else {

                    $jsonData0 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=0");
                    $jsonData1 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=1");
                    $jsonData2 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=2");
                    $jsonData3 = file_get_contents("https://api.meetup.com/2/groups?&sign=true&photo-host=public&category_id=34&country=fr&topic=".$topicUrl."&city=".$ville."&key=17662761a2d418394102b53502864&offset=3");

                    $Data0 = json_decode($jsonData0, true);
                    $Data1 = json_decode($jsonData1, true);
                    $Data2 = json_decode($jsonData2, true);
                    $Data3 = json_decode($jsonData3, true);

                    $Data[$ville] = [$Data0, $Data1, $Data2, $Data3];


                    $em = $this->getDoctrine()->getManager();

                    for ($i=0, $c = count($Data[$ville]); $i< $c; $i++) {

                        for($j=0, $c2 = count($Data[$ville][$i]['results']); $j < $c2; $j++) {

                            $groupesPHP = new GroupesPHP();

                            $groupesPHP->setName($Data[$ville][$i]['results'][$j]['name']);
                            $groupesPHP->setCountry($Data[$ville][$i]['results'][$j]['country']);
                            $groupesPHP->setCity($Data[$ville][$i]['results'][$j]['city']);
                            $groupesPHP->setTopic($topicUrl);
                            $groupesPHP->setCreated($Data[$ville][$i]['results'][$j]['created']);
                            $groupesPHP->setLon($Data[$ville][$i]['results'][$j]['lon']);
                            $groupesPHP->setLat($Data[$ville][$i]['results'][$j]['lat']);
                            $groupesPHP->setMembers($Data[$ville][$i]['results'][$j]['members']);
                            $groupesPHP->setMeetupid($Data[$ville][$i]['results'][$j]['id']);

                            $em->persist($groupesPHP);
                        }

                    }

                }


            }


        }

        $em->flush();

        return $this->redirectToRoute('extract');
    }
    public function ExtractAction()
    {
        $em = $this->getDoctrine()->getManager();
        $date = new Extract();
        $date->setDateExtract(time());
        
        $em->persist($date);
        

        $em->flush();

        return $this->redirectToRoute('user_accueil');
    }


}
