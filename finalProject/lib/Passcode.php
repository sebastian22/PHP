<?php

/*
 * Description of Passcode
 */
class Passcode {
    //put your code here
    
    private $password;
    private $email;
    
    function __construct() {
        $this->setPassword(filter_input(INPUT_POST, 'password'));
        $this->setEmail(filter_input(INPUT_POST, 'email'));
    }
    
    /*
     * A public function to get the passcode 
     */
    public function getPassword() {
        return $this->password;
    }
    
    public function getPasscode() {
        return $this->password;
    }
    
    /*
     * A public function to set the passcode
     */
    public function setPassword($password) {
        $this->password = $password;
    }
    
    /*
     * A public function to get the email 
     */
    public function getEmail() {
        return $this->email;
    }

    /*
     * A public function to set the email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function isValidLogin(Passcode $loginModel ){
      
        $username = $loginModel->getEmail();
        $password = $loginModel->getPassword();
        $isValid = false;
        
            if ( null !== $this->getDB() && $loginModel instanceof Passcode) {

                $dbs = $this->getDB()->prepare('select user_id, email, password from users where email = :email');
                $dbs->bindParam(':username', $username, PDO::PARAM_STR);
                $dbs->bindParam(':password', $password, PDO::PARAM_STR);

                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                    
                    $isValid = true;
                } 
                    var_dump($dbs);
             }
         
         return $isValid;
    }
    
    
    public function isValidPasscode(){
        // shortcut for if else checks to see if true (else) : false
        return ( $this->getPasscode() === Config::PASS_CODE ? true : false );
    }
    
    
}