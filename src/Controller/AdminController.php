<?php

namespace App\Controller;

use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Apprenant;

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
    public function addAdmin(UserService $upService, Request $request, EntityManagerInterface $manager)
    {
        $user = $upService->addUser($request,"ADMIN", "App\Entity\Admin");
        $manager->persist($user);
        $manager->flush();
        return $this->json("Bien enregistrer", Response::HTTP_CREATED);
    }
}
