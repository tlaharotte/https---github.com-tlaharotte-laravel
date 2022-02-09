<?php

namespace App\Models;


class Facture
{
    public function __construct(){}

    protected $facture=0;

    public function ajoutPrixVoiture($voiture){
        $this->facture+=$voiture->prix;
    }

    public function montrerFacture(){
        return $this->facture;
    }

}