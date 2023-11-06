<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Repository\MembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/getmembers/{id}', name: 'members_getall')]
    public function getMembers($id): Response
    {
        $members = $this->entityManager->getRepository(Membre::class)->findBy(['group' => $id]);

        return $this->render('membre/members.html.twig', [
            'members' => $members,
        ]);
    }
    #[Route('/membre', name: 'app_membre')]
    public function index(): Response
    {
        return $this->render('membre/index.html.twig', [
            'controller_name' => 'MembreController',
        ]);
    }




}
