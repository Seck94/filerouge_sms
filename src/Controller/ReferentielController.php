<?php

namespace App\Controller;

use App\Entity\Referentiel;
use App\Entity\Groupecompetence;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GroupeCompetenceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReferentielController extends AbstractController
{
    /**
     * @Route("/referentiel", name="referentiel")
     */
    public function index()
    {
        return $this->render('referentiel/index.html.twig', [
            'controller_name' => 'ReferentielController',
        ]);
    }

    /**
     * @Route(
     *     path="/api/admin/referentiels",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\ReferentielController::addReferentiel",
     *          "__api_resource_class"=Referentiel::class,
     *          "__api_collection_operation_name"="add_referentiel"
     *     }
     * )
     */
    public function addReferentiel(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,GroupeCompetenceRepository $groupecompetenceRepository)
    {
        $Referentiel_tab = $request -> request->all();
        //dd($Referentiel_json);
        //$Referentiel_tab = $serializer -> decode($Referentiel_json,"json");
        //dd($Referentiel_tab);
        $Referentiel = new Referentiel();
       // dd($Referentiel);
        $Referentiel -> setLibelle($Referentiel_tab['Libelle']);
        $Referentiel -> setPresentation($Referentiel_tab['Presentation']);
        $programme = $request->files->get("programme");
        if ($programme) {
            $programme = fopen($programme->getRealPath(), "rb");
            //dd($avatar);
        }
        $Referentiel -> setProgramme($programme);
        $Referentiel -> setCritereAdmission($Referentiel_tab['CritereAdmission']);
        $Referentiel -> setCritereEvaluation($Referentiel_tab['CritereEvaluation']);
        //dd($Referentiel);
        $Groupecompetence_tab = $Referentiel_tab['groupeCompetences'];

        //dd($Groupecompetence_tab);
        foreach ($Groupecompetence_tab as $key => $value) {
            //dd($value);
            $groupecompetences = $groupecompetenceRepository->find($value) ;
            //dd($groupecompetences);
            if ($groupecompetences){
                $Referentiel -> addGroupecompetence($groupecompetences);
            }

        }
        //dd($groupecompetences);
        if (!$this -> isGranted("EDIT",$Referentiel)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }
        $errors = $validator->validate($Referentiel);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }

        $manager->persist($Referentiel);
        $manager->flush();

        fclose($programme);
        $show= $serializer->serialize($Referentiel,'json',["groups"=>["ref_read"]]);
        return new JsonResponse($show,Response::HTTP_CREATED);
    }

    /**
     * @Route(
     *     path="/api/admin/referentiels/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\ReferentielController::updateReferentiel",
     *          "__api_resource_class"=Referentiel::class,
     *          "__api_collection_operation_name"="update_referentiel"
     *     }
     * )
     */
    public function updateReferentiel(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager, $id, GroupeCompetenceRepository $cmp, ReferentielRepository $grpcmp)
    {
        $Referentiel_tab = $request -> request->all();
        $Referentiel = new Referentiel();
        if (!($Referentiel = $grpcmp -> find($id))) {
            return $this ->json(null, Response::HTTP_NOT_FOUND,);
        }
        if (isset($Referentiel_tab['Libelle'])) {
            $Referentiel -> setLibelle($Referentiel_tab['Libelle']);
        }
        if (isset($Referentiel_tab['Presentation'])) {
            $Referentiel -> setPresentation($Referentiel_tab['Presentation']);
        }
        if (isset($Referentiel_tab['programme'])) {
            $Referentiel -> setProgramme($Referentiel_tab['programme']);
        }
        if (isset($Referentiel_tab['CritereAdmission'])) {
            $Referentiel -> setCritereAdmission($Referentiel_tab['CritereAdmission']);
        }
        if (isset($Referentiel_tab['CritereEvaluation'])) {
            $Referentiel -> setcritereEvaluation($Referentiel_tab['CritereEvaluation']);
        }
        $Groupecompetence_tab = isset($Referentiel_tab['groupeCompetence'])?$Referentiel_tab['groupeCompetence']:[];
        if (!empty($Groupecompetence_tab)) {
            foreach ($Groupecompetence_tab as $key => $value) {
                //dd($value);
                $groupecompetences = new Groupecompetence();
                if (isset($value['id']))
                {
                    if (!($groupecompetences =  $cmp -> find($value['id']))) {
                        return $this ->json(null, Response::HTTP_NOT_FOUND,);
                    }
                    if (isset($value['Libelle'])) {
                        $groupecompetences -> setLibelle($value['Libelle']);
                    }
                    if (isset($value['Descriptif'])) {
                        $groupecompetences -> setDescriptif($value['descriptif']);
                    }
                    else {
                        $Referentiel -> removeGroupecompetence($groupecompetences);
                    }
                    $user = $this->get('security.token_storage')->getToken()->getUser();

                }

                else{
                    if(isset($value['Libelle'])) {
                        //dd("aazerty");
                        $groupecompetences -> setLibelle($value['Libelle']);

                        $Referentiel -> addGroupecompetence($groupecompetences);
                    }
                    if(isset($value['Descriptif'])){
                        $groupecompetences -> setDescriptif($value['Descriptif']);
                        $Referentiel -> addGroupecompetence($groupecompetences);
                    }
                    $user = $this->get('security.token_storage')->getToken()->getUser();
                    $groupecompetences -> setUser($user);
                }
            }
        }

        if (!$this -> isGranted("EDIT",$Referentiel)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        $errors = $validator->validate($Referentiel);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }

        $manager->flush();
        return $this->json($Referentiel,Response::HTTP_CREATED);
    }
    public function showReferentiel(ReferentielRepository $Referentiel){
        if (!$this -> isGranted("ROLE_CM",$Referentiel)) {
            return $this -> json(["message" => "l'accès à cette ressource est interdite"],Response::HTTP_FORBIDDEN);
        }
        $Referentiel = $Referentiel -> findAll();
        // dd($Groupecompetence[0]->getUser());
        return $this -> json($Referentiel, Response::HTTP_OK);
    }
}
