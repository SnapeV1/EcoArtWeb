<?php

namespace App\Controller;

use App\Entity\Eventuser;
use App\Form\EventUserType;
use App\Repository\EventuserRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class EventUserController extends AbstractController
{
    #[Route('/event/user', name: 'app_event_user')]
    public function index(): Response
    {
        return $this->render('event_user/index.html.twig', [
            'controller_name' => 'EventUserController',
        ]);
    }
    

    #[Route('/getAll', name: 'eventuser_getall')]
    public function getAll (EventuserRepository $repo): Response{
        $list = $repo->findAll(); /*select * from author*/
        return $this->render('event_user/getall.html.twig',['events' => $list]);

}

#[Route('/addEventForm', name: 'author_add')]
public function addAuthor(Request $req, ManagerRegistry $manager): Response{
    $em = $manager -> getManager();
    $eventuser = new Eventuser;
   //Appel formulaire
   $form=$this->createForm(EventUserType::class,$eventuser);
   $form->handleRequest($req);

   if ($form->isSubmitted() && $form->isValid()) {
    $uploadedFile = $form['image']->getData();

    if ($uploadedFile) {
        $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

        // Define the directory to store uploaded files
        $uploadsDirectory = $this->getParameter('uploads_directory');

        // Move the uploaded file to the defined directory
        $uploadedFile->move($uploadsDirectory, $newFilename);

        // Set the 'logo' property of the entity as the file path
        $eventuser->setImage("uploads".'/'.$newFilename);
    }

    $em->persist($eventuser);
    $em->flush();
    return $this->redirectToRoute('eventuser_getall') ;
}
return $this->renderForm('event_user/add.html.twig',['f'=>$form]);
}
}
