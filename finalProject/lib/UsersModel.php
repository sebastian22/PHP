<?php

class UsersModel {
    //put your code here
    
    public $website;
    public $email;
    public $password;
    
    function __construct($paramArr) {        
        $this->map($paramArr);
    }
    
    /**
    * A public method to map all the variables to a value
    *
    * @param Array $paramArr
    *
    * @return Void
    */ 
    
    
      public function map($paramArr) {
     
        
        if ( ! is_array($paramArr) ) {
            return false;
        }
        
        if ( array_key_exists('website', $paramArr) ) {
            $this->setWebsite($paramArr['website']);
        }
        if ( array_key_exists('email', $paramArr) ) {
            $this->setEmail($paramArr['email']);
        }
        if ( array_key_exists('password', $paramArr) ) {
            $this->setPassword($paramArr['password']);
        }
        
        
    }
        
    public function getWebsite() {
        return $this->website;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setWebsite($website) {
        if (is_string($website) && !empty($website) )
        {
            $this->website = $website;
        }
    }

    public function setEmail($email) {    //Find RegEx
        if ( is_string($email) && !empty($email) && strlen($email) > 10 )
        {
            $this->email = $email;
        }
        $this->email = $email;
    }

    public function setPassword($password) {
        if ( is_string($password) && !empty($password) && strlen($password) > 6 )
        {
            $this->password = $password;
        }
        $this->password = $password;

    }
}