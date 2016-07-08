<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use UserBundle\Entity\Datauser;
use UserBundle\Form\DatauserType;


class EspaceController extends Controller
{
    /**
     * @Route("/", name="user_espace")
     */
    public function espaceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $request = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());
        return $this->render('UserBundle:Espace:espace.html.twig', array(
            'requete' => $request
        ));
    }

    public function espacemodifAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        // create a task and give it some dummy data for this example
       
        $datauser = $em->getRepository('UserBundle:Datauser')->findOneByUserId($user->getId());

        $form = $this->createForm(DatauserType::class, $datauser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $file stores the uploaded PDF file
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $file = $datauser->getUserImage();

        $id = $user->getId();
        $datauser->setUserId($id);


        // Generate a unique name for the file before saving it
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        // Move the file to the directory where brochures are stored
        $file->move(
            $this->container->getParameter('datausers_directory'),
            $fileName
        );

        // Update the 'brochure' property to store the PDF file name
        // instead of its contents
        $datauser->setUserImage($fileName);

        $em->persist($datauser);
        $em->flush();

        // ... persist the $product variable or any other work
        return $this->redirect($this->generateUrl('user_espacemodif'));
        }

        return $this->render('UserBundle:Espace:espacemodif.html.twig', array(
            'form' => $form->createView(),
        )); 
var_dump($user);
    }

}
