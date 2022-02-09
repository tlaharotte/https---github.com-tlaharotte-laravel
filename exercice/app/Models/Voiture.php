<?php

namespace App\Models;

abstract class Voiture{
    private $name;
    private $prix;

    public function __construct($name, $prix){
        $this->name = $name;
        $this->prix = $prix;
    }

    public function getMarque(){
    }

    public function getPrix(){
    }

    public function getOptions(){
        foreach($this->options as $option){
            echo " ".$option.", ";
        }
    }

    public function getText(){
        echo $this->getMarque();
        echo $this->getOptions();
    }
}

?>
