<?php

namespace App\Controller;

use App\Entity\Groups;
use App\Entity\Membre;
use App\Entity\Utilisateur;
use App\Repository\MembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/getmembers/{id}/{userid}', name: 'members_getall')]
    public function getMembers($id,$userid): Response
    {
        $members = $this->entityManager->getRepository(Membre::class)->findBy(['group' => $id]);
        $group =  $this->entityManager->getRepository(Groups::class)->find($id);
        $group->updatesize($members);
        $this->entityManager->persist($group); 
        $this->entityManager->flush(); 
        return $this->render('membre/members.html.twig', [
            'members' => $members,
            'userid'=>$userid
        ]);
    }
    #[Route('/membre', name: 'app_membre')]
    public function index(): Response
    {
        return $this->render('membre/index.html.twig', [
            'controller_name' => 'MembreController',
            
        ]);
    }





    #[Route('/addmember/{id}/{userId}', name: 'addmember')]
    public function addMemberToGroup(Request $request, $id, $userId, EntityManagerInterface $entityManager)
    {
        $email = $request->request->get('memberEmail');
        
        // Fetch user by the provided email
        $user = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
        $group = $entityManager->getRepository(\App\Entity\Groups::class)->find($id);
    
        if ($user && $group) {
            $membre = new Membre();
            $membre->setUser($user);
            $membre->setGroup($group);
            $membre->setRole('Member');
            
            $entityManager->persist($membre);
            $entityManager->flush();
        }
        return $this->redirectToRoute('members_getall', ['id' => $id, 'userid' => $userId]);
   
    }



    #[Route('/delete_member/{groupId}/{userId}', name: 'delete_member')]
public function deleteMember($groupId, $userId, EntityManagerInterface $entityManager, MembreRepository $membreRepository): Response
{
    $membre = $membreRepository->findOneBy(['group' => $groupId, 'user' => $userId]);

    if ($membre) {
        $entityManager->remove($membre);
        $entityManager->flush();
    }

    // Redirect to the page showing the updated members list
    return $this->redirectToRoute('members_getall', ['id' => $groupId, 'userid' => $userId]);

}

    

#[Route('/editmember/{memberid}/{userid}/{groupid}', name: 'update_member')]
public function updateGroup(Request $request, EntityManagerInterface $entityManager, $memberid, $userid, $groupid): Response
{
    $membre = $entityManager->getRepository(Membre::class)->findOneBy([
        'user' => $memberid,
        'group' => $groupid,
    ]);

    // Get the new role from the form submission
    $newRole = $request->request->get('member_role');

    if ($membre instanceof Membre) {
        $membre->setRole($newRole);
    }

    $entityManager->flush();

    return $this->redirectToRoute('members_getall', ['id' => $groupid ,'userid' => $userid]);
}









}






