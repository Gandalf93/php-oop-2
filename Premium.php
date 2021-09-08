<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/** classe figlia (di User) */


require_once 'User.php';

class Premium extends User {

    public $premium;

   
    public function setPremium($_premium){
       $this->premium = $_premium;
    }

    public function getPremium(){
        return $this->premium;
    }
    


}


    
