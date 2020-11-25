<?php

namespace App\DataFixtures;

use App\Entity\CM;
use App\Entity\Competence;
use App\Entity\GroupeCompetence;
use App\Entity\Niveau;
use App\Entity\Referentiel;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Profil;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\DataFixtures\AppFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture 
{
     private $encoder;
     public function __construct(UserPasswordEncoderInterface $encoder)
     {
        $this->encoder = $encoder;
     }
     
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $profil= new Profil;
        for($j=0; $j<4; $j++)
        {
            $profil= $this->getReference("profil ".$j);
            if($j==0){
                $users= new Formateur();
                $profil->setLibelle("FORMATEUR");

            }
            elseif($j==1){
                $users= new CM();
                $profil->setLibelle("CM");
            }
            elseif($j==2){
                $users= new Apprenant();
                $profil->setLibelle("APPRENANT");
            }
            else{
                $users= new User();
                $profil->setLibelle("ADMIN");
            }


            $users->setNom($faker->lastname);
            $users->setPrenom($faker->firstname);
            $users->setEmail($faker->email);
            $users->setProfil($profil);
            $users->setStatut("actif");
            $users->setAvatar($faker->imageUrl());
            $users->setUsername(strtolower($faker->name()));
            $password = $this->encoder->encodePassword($users, "passe");
            $users->setPassword($password);
            
            $manager->persist($users);
        }

        $manager->flush();

        $niveaux = ["Niveau1","Niveau2","Niveau3"];
        $critereEvaluation = ["CritereEvaluation1","CritereEvaluation2","CritereEvaluation3"];
        $competences = ["Bon en PHP","excellent niveau en Bootsrap","excellent niveau en Bootsrap","bon niveux en Ajax"];

        $referentiel = new Referentiel();
        $referentiel -> setLibelle("DEV BACK");
        $referentiel -> setPresentation("Programme mobile");
        $referentiel -> setProgramme("Critère d'admission de groupe competence");
        $referentiel -> setCritereAdmission("Critère d'admission competence");
        $referentiel -> setCritereEvaluation("dev mobile");

        $grpCompetence = new Groupecompetence();
        $grpCompetence -> setLibelle("Developper le backend d'une application");
        $grpCompetence -> setDescriptif("Developper le backend d'une application web");
        $grpCompetence -> addReferentiel($referentiel);

        for ($i=0; $i < 3; $i++) {
            $competence = new Competence();
            $competence -> setLibelle($competences[$i]);
            $competence -> setDescriptif($competences[$i]);
            for ($j=0; $j < 3; $j++) {
                $niveau = new Niveau();
                $niveau -> setDescriptif($niveaux[$j]);
                $niveau -> setGroupeEvaluation($critereEvaluation[$i]);
                $niveau -> setGroupeAction("Action A, Action B, Action C");
                $competence -> addNiveau($niveau);
                $manager->persist($niveau);
                $manager->persist($competence);
                $manager->flush();
            }
            $grpCompetence -> addCompetence($competence);
        }
        $grpCompetence -> setUser($users);
        $manager->persist($referentiel);
        $manager->persist($grpCompetence);
        $manager->flush();
    }
   
}
