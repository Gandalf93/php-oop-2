<?php
/**classe genitore - User */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class User {
    public $name;
    public $surname;
    public $email;
    public $shipping;
    
   

    function __construct($_name, $_surname, $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    
    public function getFullName(){
        return $this->name . ' ' . $this->surname;
    }


    public function setShipping($upgrade){
        if($upgrade = 'true') {
            $this->shipping = 'free shipping';
        }else{
            $this->shipping = 'no free shipping';
        }
    }

    public function getShipping(){
        return $this->shipping;
    }


}