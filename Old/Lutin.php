<?php

class Lutin extends Personnage implements Monstre {
    private int $mechancete;
    

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
        $hero->setSante(($hero->getSante()) - 10);
    }
}

