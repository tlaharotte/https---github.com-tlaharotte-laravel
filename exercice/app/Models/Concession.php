<?php

namespace App\Models;


class Concession
{
    public function __construct(){}

    protected $garage = [];

    public function ajoutVoiture($voiture){
        $tmp['name']=$voiture->getName();
        $tmp['prix']=$voiture->getPrice();
        $this->garage=$tmp;
    }

    public function montrerGarage(){
        return json_encode($this->garage);
    }

    public function getIterateur() {
        return new Agregation($this->garage);
    }

}