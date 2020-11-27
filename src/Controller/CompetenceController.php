<?php

namespace App\Controller;

use App\Entity\Niveau;
use App\Entity\Competence;
use App\Entity\Groupecompetence;
use App\Repository\NiveauRepository;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GroupeCompetenceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;


class CompetenceController extends AbstractController
{
    /**
     * @Route(
     *     path="/api/admin/competences",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\CompetenceController::addCompetence",
     *          "__api_resource_class"=Competence::class,
     *          "__api_collection_operation_name"="add_competence"
     *     }
     * )
     */
    public function addCompetence(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager, GroupeCompetenceRepository $grpcmp)
    {
        $competence_json = $request -> getContent();

        $Competence_tab = $serializer -> decode($competence_json,"json");
        $Competence = new Competence();
        $Competence -> setLibelle($Competence_tab['Libelle']);
        $Competence -> setDescriptif($Competence_tab['Descriptif']);
        $Niveau_tab = $Competence_tab['niveaux'];
        if (!isset($Competence_tab['groupeCompetences'])) {
            return $this -> json(["message" => "Une nouvelle compétence doit etre liée à un groupe de compétences"],Response::HTTP_BAD_REQUEST);
        }
        $Groupecompetence_id = $Competence_tab['groupeCompetences'][0]['id'];

        $Groupecompetence = new Groupecompetence();
        if (!($Groupecompetence = $grpcmp -> find($Groupecompetence_id))) {
            return $this ->json("Groupe de competence non trouvé", Response::HTTP_NOT_FOUND,);
        }
        $Competence -> addGroupecompetence($Groupecompetence );


        if (count($Niveau_tab)!=3)
        {
            return $this -> json(["message" => "Chaque compétence devrait avoir exactement 3 niveaux"],Response::HTTP_BAD_REQUEST);
        }

        foreach ($Niveau_tab as $key => $value) {
            $niveau = new Niveau();
            $niveau -> setDescriptif($value['Descriptif']);
            $niveau -> setGroupeEvaluation($value['GroupeEvaluation']);
            $niveau -> setGroupeAction($value['GroupeAction']);
            $manager -> persist($niveau);
            $Competence->addNiveau($niveau);
        }

        if (!$this -> isGranted("EDIT",$Competence)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }



        $errors = $validator->validate($Competence);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }

        $manager->persist($Competence);
        $manager->flush();
        return $this->json($Competence,Response::HTTP_CREATED);
    }



    /**
     * @Route(
     *     path="/api/admin/competences/{id}",
     *     methods={"PUT","PATCH"},
     *     defaults={
     *          "__controller"="App\Controller\CompetenceController::updateCompetence",
     *          "__api_resource_class"=Competence::class,
     *          "__api_collection_operation_name"="update_competence"
     *     }
     * )
     */
    public function updateCompetence(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager, $id, CompetenceRepository $rep_cmp,NiveauRepository $rep_niveau)
    {
        $Competence_json = $request -> getContent();
        $Competence_tab = $serializer -> decode($Competence_json,"json");
        $Competence = new Competence();
        if (!($Competence = $rep_cmp -> find($id))) {
            return $this ->json(null, Response::HTTP_NOT_FOUND,);
        }
        if (isset($Competence_tab['Libelle'])) {
            $Competence -> setLibelle($Competence_tab['Libelle']);
        }

        $Niveau_tab = isset($Competence_tab['niveaux'])?$Competence_tab['niveaux']:[];

        if (!empty($Niveau_tab)) {
            foreach ($Niveau_tab as $key => $value) {
                $niveau = new Niveau();
                if (isset($value['id']))
                {
                    if (!($niveau =  $rep_niveau-> find($value['id']))) {
                        return $this ->json(null, Response::HTTP_NOT_FOUND,);
                    }
                    if (isset($value['Descriptif'])) {
                        $niveau -> setDescriptif($value['Descriptif']);
                    }
                    if (isset($value['GroupeEvaluation'])) {
                        $niveau -> setGroupeEvaluation($value['GroupeEvaluation']);
                    }
                    if (isset($value['GroupeAction'])) {
                        $niveau -> setGroupeAction($value['GroupeAction']);
                    }
                }
                elseif (isset($value['Descriptif']) && isset($value['GroupeEvaluation']) && isset($value['GroupeAction'])) {
                    $niveau -> setDescriptif($value['Descriptif']);
                    $niveau -> setGroupeEvaluation($value['GroupeEvaluation']);
                    $niveau -> setGroupeAction($value['GroupeAction']);

                    $Competence->addNiveau($niveau);
                    $manager->persist($niveau);
                }
                else {
                    return $this -> json(["message" => "Données manquantes quelque part"],Response::HTTP_FORBIDDEN);
                }

            }
        }

        if (!$this -> isGranted("EDIT",$Competence)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        //dd($niveau);
        $errors = $validator->validate($Competence);
        if (count($errors))
        {
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }

        $manager->persist($Competence);
        $manager->flush();
        return $this->json($Competence,Response::HTTP_CREATED);
    }


    /**
     * @Route(
     *     path="/api/admin/Competences",
     *     methods={"GET"},
     *     defaults={
     *          "__controller"="App\Controller\CompetenceController::showCompetence",
     *          "__api_resource_class"=Competence::class,
     *          "__api_collection_operation_name"="show_Competence"
     *     }
     * )
     */
    public function showCompetence(CompetenceRepository $Competence){

        if (!$this -> isGranted("VIEW",$Competence))
        {
            return $this -> json(["message" => "l'accès à cette ressource vous est interdit"],Response::HTTP_FORBIDDEN);
        }
        $Competence = $Competence -> findAll();

        return $this -> json($Competence, Response::HTTP_OK,);
    }
}