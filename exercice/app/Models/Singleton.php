<?php

namespace App\Models;

class Singleton {
 
     private static $_instance=NULL;

     public $ma_var2=0;
   
     private function __construct() { 
         $this->count=0; 
     }
   
     public static function getInstance() {
   
       if(is_null(self::$_instance)) {
         self::$_instance = new Singleton();  
       }
   
       return self::$_instance;
     }

     public function increment(){
        return $this->ma_var2++;
     }
  }
   
  ?>