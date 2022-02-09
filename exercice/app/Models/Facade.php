<?php

namespace App\Models;
use App\Models\Factory;
use App\Models\Concession;
use App\Models\Facture;


class Facade
{
    public function __construct(){}
    
    public static function commander(){
        $voiture = Factory::fabriquer("Opel");
        $concession= new Concession();
        $facture= new Facture();
        $concession->ajoutVoiture($voiture);
        $facture->ajoutPrixVoiture($voiture);
        $tab['voiture']=$voiture;
        $tab['concession']=$concession;
        $tab['facture']=$facture;
        return $tab;
    }

}