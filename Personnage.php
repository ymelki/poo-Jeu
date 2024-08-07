<?php

abstract class Personnage {
    protected int $lachete        ;
    protected int $endurance     ;
    protected int $musculation    ;
    protected int $sante          ;

    public function __construct()
    {
        $this->sante = 100;
    }



}