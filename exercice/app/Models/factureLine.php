<?php

namespace App\Models;


class factureLine
{
    protected $voiture;
    protected $tva;
    private $strategy;

    public function __construct($voiture){
        if($voiture->getMarque() == "Opel"){
            $this->strategy = new StrategyOpel;
        }
        elseif($voiture->getMarque() == "Renault"){
            $this->strategy = new StrategyRenault;
        }
    }

    public function getFactureLine(){
        return $this->strategy->getTVA();
    }
}