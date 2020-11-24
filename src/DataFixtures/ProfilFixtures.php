<?php

namespace App\DataFixtures;

use App\Entity\CM;
use App\Entity\Profil;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfilFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         
         
        $profils=['FORMATEUR','CM','APPRENANT','ADMIN'];
        for ($i = 0; $i < count($profils); $i++) {
            
            $profil= new Profil();
            $profil->setLibelle($profils[$i]);

            if($profils[$i]=="ADMIN")
            {
                $this->addReference("profil 0", $profil);
            }
            elseif($profils[$i]=="CM")
            {
                $this->addReference("profil 1", $profil);
            }
            elseif($profils[$i]=="FORMATEUR")
            {
                $this->addReference("profil 2", $profil);
            }
            elseif($profils[$i]=="APPRENANT")
            {
                $this->addReference("profil 3", $profil);
            }
            
            
            
               
                $manager->persist($profil);
                $manager->flush();
                        
        }   
        
      
    }
}
