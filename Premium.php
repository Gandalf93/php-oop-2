<?php

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


    
