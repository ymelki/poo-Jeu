<?php

class Chevalier extends Hero {
    
   private int $epee           ;
 
   public function __construct(){
    parent::construct();
    $this->musculation = 15;
    $this->lachete = 5;
    $this->inteligence = 8;
    $this->epee = 12;
    $this->endurance = 100;
    }


   public function gifle(
    Monstre     $monstre){
      $santeMonstre=$monstre->getSante();
      $monstre->setSante( $santeMonstre - 15);
   }

   public function coupSpecial(Monstre $monstre){
    $santeMonstre=$monstre->getSante();

    $monstre->setSante( $santeMonstre - 12);
   }
}