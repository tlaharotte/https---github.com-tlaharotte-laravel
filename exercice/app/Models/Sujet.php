<?php

namespace App\Models;


class Sujet
{
    public $tabObserv=[];

    public function __construct(){}

    public function ajout($obs){
        $this->tabObserv[]=$obs;
    }

    public function supprimer(){
        unset($this->tabObserv[1]);
    }
    
    public function notify(){
        $observerTab = $this->tabObserv;
        foreach($observerTab as $observer){
            $observer->incrementer();
        }
    }
}