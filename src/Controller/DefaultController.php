<?php

namespace App\Controller;

use App\Service\Xlsx;
use App\Entity\Client;
use App\Service\Namer;
use App\Service\Utils;
use App\Form\ClientType;
use App\Form\UploadType;
use Jawira\CaseConverter\Convert;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'app_default')]
    public function index(
        Request $request,
        EntityManagerInterface $manager,
        SerializerInterface $serializer,
        Xlsx $xlsx
    ): Response{
    
        $form = $this->createForm(UploadType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $data = $form->get('file')->getData();
            if($data){
                
                // Recuperation des données sous forme de tableau associatif
                $clients = $xlsx->processData($data->getPathname());

                foreach($clients as $client){
                    try{
                        // Création de l'entité Client par rapport à une entrée dans le fichier
                        $client = $serializer->deserialize(json_encode($client), Client::class, 'json');
                        $manager->persist($client);
                    }catch(\Exception $e){
                        $this->addFlash('error', 'Une erreur est survenue lors de l\'operation');
                        return $this->redirectToRoute('app_default');
                    }
                }

                $manager->flush();
                $this->addFlash('success', 'Les données sont enregistrées avec succès');

                return $this->redirectToRoute('app_default');

            }
        }else{
            $this->addFlash('error', 'Une erreur est survenue lors de l\'operation');
            return $this->redirectToRoute('app_default');
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
