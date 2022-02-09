<?php

namespace App\Models;


class Factory
{
    public function __construct(){}

    public static function fabriquer($name){
        $object = '';
        if($name == 'Renault'){
            $object = new Renault('Scenic', 10000);
        }else if($name == 'Opel'){
            $object = new Opel('Corsa', 15000);
        }
        return $object;
    }
}