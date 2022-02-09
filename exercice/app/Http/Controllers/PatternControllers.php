<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Singleton;
use App\Models\Factory;
use App\Models\Facade;
use App\Models\Concession;
use App\Models\Aggregation;
use App\Models\Sujet;
use App\Models\Observer;
use App\Models\factureLine;

class PatternControllers extends Controller
{
    
    public function show()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ['a' => $a, 'b' => $b]);
    }

    public function factory(){
        $usine = new Factory();
        $voiture1 = $usine->fabriquer('Renault');
        $voiture2 = $usine->fabriquer('Opel');
        return view('factory', ["voiture1" => $voiture1, "voiture2" => $voiture2]);
    }

    public function facade(){
        $facade=Facade::commander();
        return view('facade', ["voiture" => $facade['voiture'], "concession" => $facade['concession'], "facture" => $facade['facture']]);

    }
    
    public function aggregation(){
        $usine = new Factory();
        $voiture1 = $usine->fabriquer('Renault');
        $voiture2 = $usine->fabriquer('Opel');
        $tab=[];
        array_push($tab, $voiture1);
        array_push($tab, $voiture2);
        $aggregation= new Aggregation($tab);
        return view('aggregation', ["agg"=>$aggregation]);
    }

    public function observer(){
        $sujet = new Sujet();
        $obs1 = new Observer();
        $obs2 = new Observer();
        $sujet->ajout($obs1);
        $sujet->ajout($obs2);
        $sujet->notify();
        $sujet->supprimer();
        $sujet->notify();

        return view('observer', ["obs1"=>$obs1, "obs2"=>$obs2]);
    }

    public function strategie(){
        $opel = Factory::fabriquer('Opel');
        $renault = Factory::fabriquer('Renault');
        
        $factureLineOpel = new factureLine($opel);
        $factureLineRenault = new factureLine($renault);

        return view('strategie', ['opel' => $factureLineOpel->getFactureLine(), 'renault' => $factureLineRenault->getFactureLine()]);
    }

    public function template(){
        $voiture1 = Factory::fabriquer('Opel');
        $voiture2 = Factory::fabriquer('Renault');
        return view('template', ['voiture1' => $voiture1, 'voiture2' => $voiture2]);
    }
}