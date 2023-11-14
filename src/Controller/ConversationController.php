<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Utilisateur;
use App\Repository\ConversationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConversationController extends AbstractController
{ private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/conversation', name: 'app_conversation')]
    public function index(): Response
    {
        return $this->render('conversation/index.html.twig', [
            'controller_name' => 'ConversationController',
        ]);
    }

    #[Route("/conversations/{user1Id}/{user2Id}", name: "display_conversations")]
        public function displayConversations(Request $request ,int $user1Id, int $user2Id, ConversationRepository $conversationRepository): Response
{
    
    
   

    $conversations = $conversationRepository->findBy([
        'iduser1' => $user1Id,
        'iduser2' => $user2Id,
    ]);
    $user1 = $this->entityManager->getRepository(Utilisateur::class)->find($user1Id);
    $user2 = $this->entityManager->getRepository(Utilisateur::class)->find($user2Id);

    if ($user1 && $user2) {
        $username1 = $user1->getUsername();
        $username2 = $user2->getUsername();
    } else {
        // Handle case where user not found
        $username1 = 'User Not Found';
        $username2 = 'User Not Found';
    }

    // If no direct match is found, reverse the user IDs to search the other way
   
        $conversations2 = $conversationRepository->findBy([
            'iduser1' => $user2Id,
            'iduser2' => $user1Id,
        ]);
    

    return $this->render('conversation/index.html.twig', [
        'conversations' => $conversations,
        'conversations2'=> $conversations2,
        'username1' => $username1,
        'username2' => $username2,
    ]);
    
}
#[Route('/select-receiver/{user1Id}', name: 'select_receiver')]
public function selectReceiver(Request $request, EntityManagerInterface $entityManager, $user1Id): Response
{
    $userRepository = $this->entityManager->getRepository(Utilisateur::class);
    $users = $userRepository->findAll();

    return $this->render('conversation/select_receiver.html.twig', [
        'users' => $users,
        'user1Id' => $user1Id,
    ]);
}

#[Route('/sendmessage/{user1Id}/{user2Id}', name: 'send_message')]
public function sendMessage(int $user1Id, int $user2Id, Request $request, ConversationRepository $conversationRepository, EntityManagerInterface $entityManager): Response
{
    // Get the sender and receiver users from the database
    $sender = $entityManager->getRepository(Utilisateur::class)->find($user1Id);
    $receiver = $entityManager->getRepository(Utilisateur::class)->find($user2Id);

    if (!$sender || !$receiver) {
        throw $this->createNotFoundException('User not found!');
    }

    $message = $request->request->get('message'); // Assuming the message is sent via POST request

    // Create a new conversation entity
    $newConversation = new Conversation();
    $newConversation->setIduser1($user1Id);
    $newConversation->setIduser2($user2Id);
    $newConversation->setDateMsg(new \DateTime());
    $newConversation->setMsg($message);

    // Persist and flush the new conversation entity
    $entityManager->persist($newConversation);
    $entityManager->flush();

    return $this->redirectToRoute('display_conversations', [
        'user1Id' => $user1Id,
        'user2Id' => $user2Id,
    ]);
    // Redirect to conversation index or appropriate route
}




#[Route('/messageDel/{id}/{user1Id}/{user2Id}', name: 'delete_message')]
public function delete_message(Request $request, EntityManagerInterface $entityManager, $id,$user1Id,$user2Id): Response
{
    // Find the group from the database
    $conv = $entityManager->getRepository(Conversation::class)->find($id);


    if ($conv instanceof Conversation) {
        // Update the group name
        $conv->setMsg("Message Unsent");
        



$entityManager->flush();

return $this->redirectToRoute('display_conversations', [
    'user1Id' => $user1Id,
    'user2Id' => $user2Id,
]);
}

return new Response('Message not found', Response::HTTP_NOT_FOUND);
}


// Existing code...
}
   

