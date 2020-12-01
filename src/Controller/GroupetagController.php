<?php

namespace App\Controller;


use App\Entity\GroupeTag;
use App\Entity\Tag;
use App\Repository\GroupeTagRepository;
use App\Repository\TagRepository;
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

    /**
     * @Route(
     *     path="/api/admin/groupetags/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\GroupetagController::updateGroupetag",
     *          "__api_resource_class"=Groupetag::class,
     *          "__api_collection_operation_name"="update_groupetag"
     *     }
     * )
     */
    public function updateGroupetag(Request $request,SerializerInterface $serializer,$id,GroupeTagRepository $gpt,TagRepository $tagRepository,EntityManagerInterface $manager){
        //dd("fghjvgf gfff");
        $groupetag_json = $request -> getContent();
        $groupetag_tab = $serializer -> decode($groupetag_json,"json");
        $groupetag = new GroupeTag();
        if (!($groupetag = $gpt -> find($id))){
            return $this ->json(null, Response::HTTP_NOT_FOUND);
        }
        if (isset($groupetag_tab['libelle'])){
            $groupetag -> setLibelle($groupetag_tab['libelle']);
        }
        $tag_tab = isset($groupetag_tab['tags']) ? $groupetag_tab['tags']:[];

        if (!empty($groupetag_tab)){
         foreach ($tag_tab as $key => $value){

             $tag = new Tag();
            // dd($tag);
             if(isset($value['id'])) {

                 if (!($tag = $tagRepository->find($value['id']))) {

                     return $this->json("l ID n est pas valide", Response::HTTP_NOT_FOUND);
                 }


                 if (isset($value['libelle'])) {
                     // dd("sdf");
                     $tag->setLibelle($value['libelle']);
                 }
                 if (isset($value['description'])) {
                     //dd("yesghjk");
                     $tag->setDescription($value['description']);
                 }
             }
             elseif (($value['action']==="delete")){
                     //dd($value['libelle']);
                     $tag_search=$tagRepository->findOneBy(["libelle"=>$value['libelle']]);
                     //dd($tag_search);
                     foreach ($groupetag->getTags() as $value){
                         //dd($value);
                         if($value==$tag_search){
                             //dd("yes");
                             $groupetag -> removeTag($tag_search);
                         }
                     }
                 }
             elseif (($value['action']==="add")){
                 $tag = new Tag();
                 $tag -> setLibelle($value['libelle']);
                 $tag -> setDescription($value['description']);
                 $manager -> persist($tag);
                 $groupetag -> addTag($tag);
             }

             }

         }

        $manager->flush();
        return $this->json($groupetag,Response::HTTP_OK);
        }

}
