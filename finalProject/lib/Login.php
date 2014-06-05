<?php


class Login extends DB {
    //put your code here
    
    function __construct() {
        $this->setDb();
        
    }

    
    public function websiteTaken( UsersModel $userModel ){
        $website = $userModel->getWebsite();
        $isTaken = false;  
        
        if (null!== $this->getDB()){
            $dbs = $this->getDB()->prepare('select website from users '
                    . 'where website = :website limit 1');
            
            $dbs->bindParam(':website', $website, PDO::PARAM_STR);
            
        
        if($dbs->execute() && $dbs->rowCount() > 0 ){
                $isTaken = TRUE;
            }
        }
        
        return  $isTaken;
    }
    
    
    public function save( UsersModel $dataModel) {
        $result = false;
        
        $website = $dataModel->getWebsite();
        $email = $dataModel->getEmail();
        $password = sha1($dataModel->getPassword());
               
         if ( null !== $this->getDB() ) {
            
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password');
            $dbs->bindParam(':website', $website, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
            } 
        
         }   
        
        return $result;
    }
    
    public function isValidLogin( UsersModel $dataModel) {
        $result = false;
        
       
        $email = $dataModel->getEmail();
        $password = sha1($dataModel->getPassword());
               
         if ( null !== $this->getDB() ) {
            
            $dbs = $this->getDB()->prepare('select * from users set email = :email, password = :password limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
            } 
        
         }   
        
        return $result;
    }
    
    
    public function checkLogin( UsersModel $userModel ){
            
            $userid = 0;
            
            $email = $userModel->getEmail();
            $password = $userModel->getPassword();
            
            $password = sha1($password);
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from users where email = :email and password = :password limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
                $userid = $results['user_id'];
            }
        
         }   
           
           return $userid;
     }

    

}