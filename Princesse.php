<?php

class Princesse extends Hero {
    
   
    public function __construct(){
        $this->musculation = 15;
        $this->lachete = 2;
        $this->inteligence = 15;
        $this->epee = 6;
        $this->endurance = 120;
    }

    public function gifle(
        Monstre     $monstre){
          $santeMonstre=$monstre->getSante();
          $monstre->setSante( $santeMonstre - 10);
    }

    public function coupSpecial(Monstre $monstre){
        $santeMonstre=$monstre->getSante();
    
        $monstre->setSante( $santeMonstre - 12);
    }
}