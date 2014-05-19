<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * @author GFORTI
 */
class Passcode {
    //put your code here
    
    private $passcode;
    
    /**
     * A empty constructor for instance of passcode entered
     * 
     * @param object empty 
     * @return INPUT_POST 
     * 
    */
    function __construct() {
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }
    
    /**
     * A public method to Get PassCode
     * 
     * @param object instance of new passcode 
     * @return passcode
     * 
    */
    public function getPasscode() {
        return $this->passcode;
    }
    /**
     * A public method to set the passcode
     * 
     * @param object $passcode
     * @return passcode
     * 
    */
    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }
    /**
     * A public method set passcode not valid
     * 
     * @param object  
     * @return boolean using config::PASS_CODE
     * 
    */
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPasscode() === Config::PASS_CODE ? true : false );
    }



}