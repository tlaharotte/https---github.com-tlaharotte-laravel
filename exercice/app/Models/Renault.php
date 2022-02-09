<?php

namespace App\Models;

class Renault extends Voiture{
    public $prix;
    public $name;
    public $options=["Volant", "Coffre", "Ventilation",];

    public function construct($name, $prix){
        parent::construct($name, $prix);
    }

    public function getName(){
        return $this->name='Scenic';
    }

    public function getPrice(){
        return $this->prix='15000';
    }

    public function getMarque(){
        return "Renault";
    }
}

?>