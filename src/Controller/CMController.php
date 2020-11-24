<?php

namespace App\Controller;

use App\Repository\CMRepository;
use App\Repository\FormateurRepository;
use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CM;

class CMController extends AbstractController
{
    /**
     * @Route(
     *
     *     path="api/admin/cms",
     *     methods={"POST"}
     *
     * )
     */
    public function addCM(UserService $upService, Request $request, EntityManagerInterface $manager)
    {
        $user = $upService->addUser($request,"CM", "App\Entity\CM");
        $manager->persist($user);
        $manager->flush();
        return $this->json("Bien enregistrer", Response::HTTP_CREATED);
    }
    /**
     * @Route(
     *     path="/api/admin/cms/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\CMController::updateCm",
     *          "__api_resource_class"=CM::class,
     *          "__api_collection_operation_name"="edit_cm"
     *     }
     * )
     */
    public function updateCm(UserService $update,Request $request, EntityManagerInterface $manager,CMRepository $CMRepository,$id=null)
    {
        $user=$CMRepository->findById($id);
        if (!$user)
        {
            return $this ->json("Cette utilisateur n existe pas !!!", Response::HTTP_NOT_FOUND);
        }
        $user = $update->EditUser($request,"CM", "App\Entity\Cm",$id);

        $manager->flush();
        return $this->json("Vous venez de faire une modification pour le cm", Response::HTTP_CREATED);
    }
}
