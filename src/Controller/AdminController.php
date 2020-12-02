<?php

namespace App\Controller;

use App\Repository\ADMINRepository;
use App\Repository\CMRepository;
use App\service\MailService;
use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ADMIN;

class AdminController extends AbstractController
{
    /**
     * @Route(
     *
     *     path="api/admin/admins",
     *     methods={"POST"}
     *
     * )
     */
    public function addAdmin(UserService $upService, Request $request, EntityManagerInterface $manager,MailService $mailService)
    {

        $user = $upService->addUser($request,"ADMIN", "App\Entity\Admin");
        //dd($user);
        $manager->persist($user);
        $manager->flush();

        $mailService->Send($user->getEmail(),"notification","inscription reussit");
        return $this->json("Bien enregistrer", Response::HTTP_CREATED);
    }
    /**
     * @Route(
     *     path="/api/admin/admins/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\AdminController::updateAdmin",
     *          "__api_resource_class"=ADMIN::class,
     *          "__api_collection_operation_name"="edit_admin"
     *     }
     * )
     */
    public function updateAdmin(UserService $update,Request $request, EntityManagerInterface $manager,ADMINRepository $ADMINRepository,int $id)
    {
        $user=$ADMINRepository->findById($id);
        if (!$user)
        {
            return $this ->json("Cette utilisateur n existe pas !!!", Response::HTTP_NOT_FOUND);
        }
        $user = $update->EditUser($request,"ADMIN", $user[0],$id);

        $manager->flush();
        return $this->json("Vous venez de modifier un Admin", Response::HTTP_CREATED);
    }
}
