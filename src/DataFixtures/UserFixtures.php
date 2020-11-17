<?php

namespace App\DataFixtures;

use App\Entity\CM;
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
        for($j=0; $j<4; $j++)
        {
            if($j==0){
                $users= new User();
            }
            elseif($j==1){
                $users= new Apprenant();
            }
            elseif($j==2){
                $users= new Formateur();
            }
            else{
                $users= new CM();
            }
            $profil= $this->getReference("profil ".$j);
            $profil= new Profil;
            $profil->setLibelle("Apprenant");
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


    }
   
}
