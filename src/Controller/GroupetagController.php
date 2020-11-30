<?php

namespace App\Controller;


use App\Entity\GroupeTag;
use App\Entity\Tag;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class GroupetagController extends AbstractController
{
    /**
     * @Route(
     *     path="/api/admin/groupetags",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\GroupetagController::addGroupetag",
     *          "__api_resource_class"=Groupetag::class,
     *          "__api_collection_operation_name"="add_groupetag"
     *     }
     * )
     */
    public function addGroupetag(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager){

        $Groupetag_json = $request -> getContent();
        $Groupetag_tab = $serializer -> decode($Groupetag_json,"json");
        //dd($Groupetag_tab);
        $Groupetag = new GroupeTag();
        $Groupetag -> setLibelle($Groupetag_tab['libelle']);
       // dd($Groupetag);
        $Tags_tab = $Groupetag_tab ['tags'];

        foreach ($Tags_tab as  $value) {
            $tag = new Tag();
            $tag -> setLibelle($value['libelle']);
            $tag -> setDescription($value['description']);
            $manager -> persist($tag);
            $Groupetag -> addTag($tag);
        }
        if (!$this -> isGranted("EDIT",$Groupetag)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }



        $errors = $validator->validate($Groupetag);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }

        $manager->persist($Groupetag);
        $manager->flush();
        return $this->json($Groupetag,Response::HTTP_CREATED);
    }
}
