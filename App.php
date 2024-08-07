<?php

require_once "Personnage.php";
require_once "Hero.php";
require_once "Monstre.php";
require_once "Princesse.php";
require_once "Lutin.php";
require_once "Ogre.php";
require_once "Chevalier.php";


class App { 


    public static function run() {

        
        $nb_combat=rand(1,5);



        echo "Le jeu démarre : nous avons un tournoi de ".$nb_combat." combat (entre 2 personnages)";

        for ($i=1; $i <= $nb_combat; $i++){
           echo "combat n°".$i;
           echo "<hr>";
           $Monstre=rand(1,2);
           $Monstre=2;   
           if ($Monstre=="1") { 
            $Monstre=new ogre3();
        } 
        if ($Monstre=="2")         { 
            $Monstre=new lutin3();
        }
            $Hero=rand(1,2);     
           $Hero=2; 
           if ($Hero=="1") { $Hero=new Chevalier3();
        }    
        if ($Hero=="2") { 
            $Hero=new Princesse3();
         }

         
            // Tant que le monstre ou le hero santé > 0 alors le combat continue
            $Monstre->rugir($Hero);
            $Hero->gifle($Monstre);
            
            echo "<hr>";
            echo "================MONSTRES";
            var_dump($Monstre);
            echo "<hr>";
            echo "================HERO";
            var_dump($Hero);


        }
        echo "<hr>";

        $i=new Lutin3();
        var_dump($i);
        
        echo "<hr>";
        $p=new Princesse3();
        $p2=new Princesse3();
        var_dump($p);
        
        echo "<hr>";
        
        $p->gifle($i);
        var_dump($i);
    }
}
?>