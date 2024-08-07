<?php

class Princesse extends Personnage implements Hero {
    private int $inteligence;

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
}