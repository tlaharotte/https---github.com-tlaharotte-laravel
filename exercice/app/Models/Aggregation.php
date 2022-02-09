<?php

namespace App\Models;

class Aggregation
{
    public $iterateur = 0;
    public $tabVal = [];

    public function __construct($tabVoiture) {
        $this->tabVal = $tabVoiture;
    }

    public function hasnext() {
        return isset($this->tabVal[$this->iterateur]);
    }

    public function next() {
        return $this->tabVal[$this->iterateur++];
    }
}