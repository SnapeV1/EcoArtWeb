<?php

namespace App\Controller;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;



class ProductController extends AbstractController
{
    /*#[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
    #[Route('/addProduct', name: 'add_product')]
    public function addProduct(Request $request): Response
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload and save the product
            // Logic for moving the uploaded file to a directory and setting its path in the entity
            // Save the product to the database using Doctrine
            $uploadedFile = $form['logo']->getData();
            if ($uploadedFile) {
                $newFilename = uniqid().'.'.$uploadedFile->guessExtension();
        
                // Define the directory to store uploaded files
                $uploadsDirectory = $this->getParameter('uploads_directory');
        
                // Move the uploaded file to the defined directory
                $uploadedFile->move($uploadsDirectory, $newFilename);
        
                // Set the 'logo' property of the entity as the file path
                $product->setImage($newFilename);
            }
            $entityManager = $this->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            // Redirect or render a response

            return $this->redirectToRoute('product_index'); // Redirect to a page showing the list of products
        }

        return $this->render('product/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }*/
    
    }
    


