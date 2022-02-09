<?php

namespace App\Models;


class Observer
{
    protected $count=0;
    
    public function __construct(){}

    public function incrementer(){
        return $this->count++;
    }

    public function envoyer(){
        return $this->count;
    }

}