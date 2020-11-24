<?php

namespace App\Controller;

use App\Repository\FormateurRepository;
use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Formateur;

class FormateurController extends AbstractController
{
    /**
     * @Route(
     *
     *     path="api/admin/formateurs",
     *     methods={"POST"}
     *
     * )
     */
    public function addFormateur(UserService $upService, Request $request, EntityManagerInterface $manager)
    {
        $user = $upService->addUser($request,"FORMATEUR", "App\Entity\Formateur");
        $manager->persist($user);
        $manager->flush();
        return $this->json("Bien enregistrer", Response::HTTP_CREATED);
    }
    /**
     * @Route(
     *     path="/api/admin/formateurs/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\FormateurController::updateFormateur",
     *          "__api_resource_class"=Formateur::class,
     *          "__api_collection_operation_name"="edit_formateur"
     *     }
     * )
     */
    public function updateFormateur(UserService $update,Request $request, EntityManagerInterface $manager,FormateurRepository $formateurRepository,int $id)
    {
        $user=$formateurRepository->findById($id);
        //dd($user);
        if (!$user)
        {
            return $this ->json("Cette utilisateur n existe pas !!!", Response::HTTP_NOT_FOUND);
        }
        $user = $update->EditUser($request,"FORMATEUR", $user[0],$id);

        $manager->flush();
        return $this->json("Vous venez de faire une modification pour formateur", Response::HTTP_CREATED);
    }
}
