<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    #[Route('/resvgetAll', name: 'reservation_getall')]
    public function getAll (ReservationRepository $repo): Response{
        $list = $repo->findAll(); /*select * from author*/
        return $this->render('reservation/getall.html.twig',['reservations' => $list]);

}

#[Route('/addResv', name: 'resv_add')]
public function addReservation(Request $req, ManagerRegistry $manager): Response{
    $em = $manager -> getManager();
    $reservation = new Reservation ;
   //Appel formulaire
   $form=$this->createForm(ReservationType::class,$reservation);
   $form->handleRequest($req);

   if ($form->isSubmitted() && $form->isValid()) {
   

    $em->persist($reservation);
    $em->flush();
    return $this->redirectToRoute('reservation_getall') ;
}
return $this->renderForm('reservation/add.html.twig',['f'=>$form]);
}

#[Route('/updateResv/{id}', name: 'resv_update')]
    public function updateAuthor(Request $req, ManagerRegistry $manager,$id,ReservationRepository $repo): Response{
        $em = $manager -> getManager();
        $reservation = $repo->find($id);
       //Appel formulaire
       $form=$this->createForm(ReservationType::class,$reservation);
       $form->handleRequest($req);

    if($form->isSubmitted()){    
        $em->persist($reservation);///bring req
        $em->flush();
        return $this->redirectToRoute('reservation_getall') ;
    }
    return $this->renderForm('reservation/add.html.twig',['f'=>$form]);
    }

    #[Route('/deleteResv/{id}',name: 'even_delete')]
    public function deleteAuthorForm ( ManagerRegistry $manager, $id, ReservationRepository $repo): Response {

            //specifier l'attribut qu'on a doit supprimer (id)
            $reservation=$repo->find($id);

            $em=$manager->getManager();
            $em->remove($reservation);
            $em->flush();


        return $this->redirectToRoute('reservation_getall');
    }

}
