<?php

namespace App\Controller;

use App\Entity\Groups;
use App\Form\GroupType;
use App\Repository\GroupsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GroupController extends AbstractController
{
    #[Route('/index', name: 'app_group')]
    public function index(): Response
    {
        return $this->render('group/index.html.twig', [
            'controller_name' => 'GroupController',
        ]);
    }


    #[Route('/getAll', name: 'groups_getall')]
    public function getAll(GroupsRepository $repo): Response
    {
        $list = $repo->findAll(); /* Select * From author */
        return $this->render('group/getall.html.twig', [
            'groups' => $list
        ]);
    }



    #[Route('/add', name: 'addgroup')]
    public function addGroup(ManagerRegistry $manager, Request $req): Response
    {
        $em = $manager->getManager();
        $groups = new Groups();
        $form = $this->createForm(GroupType::class, $groups);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['logo']->getData();

            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();

                // Define the directory to store uploaded files
                $uploadsDirectory = $this->getParameter('uploads_directory');

                // Move the uploaded file to the defined directory
                $uploadedFile->move($uploadsDirectory, $newFilename);

                // Set the 'logo' property of the entity as the file path
                $groups->setLogo("uploads".'/'.$newFilename);
            }

            $em->persist($groups);
            $em->flush();

            return $this->redirectToRoute('groups_getall');
        }

        return $this->renderForm('group/add.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/deletegroup/{id}', name: 'deletegroup')]
    public function deletegroup($id, ManagerRegistry $manager, GroupsRepository $repo): Response
    {
        $emm = $manager->getManager();
        $idremove = $repo->find($id);
        $emm->remove($idremove);
        $emm->flush();


        return $this->redirectToRoute('groups_getall');
    }

}
