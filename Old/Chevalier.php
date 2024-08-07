<?php

class Chevalier extends Personnage implements Hero {
    
   private int $inteligence    ;
   private int $epee           ;
 
   public function __construct(){
    $this->musculation = 15;
    $this->lachete = 5;
    $this->inteligence = 8;
    $this->epee = 12;
    $this->endurance = 100;
    }

   
    
   /**
    * Get the value of inteligence
    */ 
   public function getInteligence()
   {
      return $this->inteligence;
   }

   /**
    * Set the value of inteligence
    *
    * @return  self
    */ 
   public function setInteligence($inteligence)
   {
      $this->inteligence = $inteligence;

      return $this;
   }

   /**
    * Get the value of epee
    */ 
   public function getEpee()
   {
      return $this->epee;
   }

   /**
    * Set the value of epee
    *
    * @return  self
    */ 
   public function setEpee($epee)
   {
      $this->epee = $epee;

      return $this;
   }

   public function gifle(
    Monstre     $monstre){
      $santeMonstre=$monstre->getSante();
      $monstre->setSante( $santeMonstre - 15);
   }


}