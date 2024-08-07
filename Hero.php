<?php

abstract class Hero extends Personnage{
    protected int $inteligence;
    protected int $epee           ;


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
   abstract public function gifle(Monstre $monstre);
   abstract public function coupSpecial(Monstre $monstre);
}