<?php

namespace App\Controller;

use App\service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
}
