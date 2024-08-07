<?php

class Ogre extends Personnage implements Monstre{
    
    private int $arme ;
    private int $mechancete    ;
    

    public function __construct()
    {
        $this->arme = 15; 
        $this->musculation = 10;
        $this->mechancete = 12;
        $this->lachete = 3;
        $this->endurance = 100;
    }

    

    /**
     * Get the value of arme
     */ 
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * Set the value of arme
     *
     * @return  self
     */ 
    public function setArme($arme)
    {
        $this->arme = $arme;

        return $this;
    }

    
    
    
    /**
     * Get the value of mechancete
     */ 
    public function getMechancete()
    {
        return $this->mechancete;
    }

    /**
     * Set the value of mechancete
     *
     * @return  self
     */ 
    public function setMechancete($mechancete)
    {
        $this->mechancete = $mechancete;

        return $this;
    }

    public function rugir(
        Hero
        $hero
    ){
        $hero->setSante(($hero->getSante()) - 5);
    }

    
    
    
}