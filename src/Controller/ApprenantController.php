<?php

namespace App\Controller;

use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApprenantController extends AbstractController
{
    /**
     * @Route(
     *
     *     path="api/admin/apprenants",
     *     methods={"POST"}
     *
     * )
     */
    public function addApprenant(UserService $upService, Request $request, EntityManagerInterface $manager)
    {
        $user = $upService->addUser($request,"APPRENANT", "App\Entity\User");
        $manager->persist($user);
        $manager->flush();
        return $this->json("Bien enregistrer", Response::HTTP_CREATED);
    }
    /**
     * @Route(
     *     path="/api/admin/apprenants/{id}",
     *     methods={"PUT"}
     * )
     */

}
