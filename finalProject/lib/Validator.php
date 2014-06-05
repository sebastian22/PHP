<?php

class Validator extends DB {
    //put your code here
    
    function __construct() {
        $this->setDb();
    }

    
        
   /**
  * A static method to check if an email is valid.
  *
  * @param string $email must be a valid email
  *
  * @return boolean
  */    
    public static function emailIsValid($email) {
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != false );
    }
    
    
     /**
    * A static method to check if a name is valid.
    *
    * @param string $name must be a valid name
    *
    * @return boolean
    */    
    public static function nameIsValid($name) {
        return ( is_string($name) && !empty($name) );       
    }
    
    /**
    * A static method to check if comments are valid.
    *
    * @param string $comment must be a valid Length
    *
    * @return boolean
    */    
    public static function commentIsValid($comment) {
        return ( is_string($comment) && !empty($comment) && strlen($comment) <= 150 );    
       
    }
}