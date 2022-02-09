<?php

namespace App\Models;

class Opel extends Voiture{
    public $name;
    public $prix;
    
    public $options=["Chauffage", "Siège", "Moteur",];

    public function construct($name, $prix){
        parent::construct($name, $prix);
        $this->name="opel";
        $this->prix=10000;
    }

    public function getName(){
        return $this->name='Corsa';
    }

    public function getPrice(){
        return $this->prix='10000';
    }

    public function getMarque(){
        return "Opel";
    }
}
?>