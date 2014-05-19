<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adress
 *
 * @author GFORTI
 */
class AddressBook extends DB {
    //put your code here
    
    
    function __construct() {
        $this->setDb();
    }
    
    /**
    * A public method to create a new entry into the addressbook
    * database.
    *
    * @param object $AddressbookModel must be an instanceof AddressbookModel
    *
    * @return boolean
    */  
    public function create() {
        
    }
    
    /**
     * A public method to update the addressbook database
     * 
     * @param object $AddressbookModel must be binded
     * @return boolean
     * 
    */
    public function update($AddressbookModel) {
        $result = false;
        
        
         if ( null !== $this->getDB() && $AddressbookModel instanceof AddressbookModel) {
            $dbs = $this->getDB()->prepare('update addressbook set address = :address, city = :city, state = :state, zip = :zip, name = :name where id = :id');
            $dbs->bindParam(':id', $AddressbookModel->id, PDO::PARAM_INT);
            $dbs->bindParam(':address', $AddressbookModel->address, PDO::PARAM_STR);
            $dbs->bindParam(':city', $AddressbookModel->city, PDO::PARAM_STR);
            $dbs->bindParam(':state', $AddressbookModel->state, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $AddressbookModel->zip, PDO::PARAM_STR);
            $dbs->bindParam(':name', $AddressbookModel->name, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = true;
            }
        
         }   
        
        return $result;
    }
    
    /**
     * A public method to read ID
     * 
     * @param object $id 
     * @return boolean readAll
     * 
    */
    public function read($id = 0) {
       if ($id !== 0) {
           return $this->readByID($id);
       } else {
           return $this->readAll();
       }
        
    }
    
     private function readByID($id){
           $results = array();
           
            if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from addressbook where id = :id limit 1');
            $dbs->bindParam(':id', $id, PDO::PARAM_INT);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
        
         }   
           
           return $results;
     }
    
     /**
     * A public method to read all from addressbook
     * 
     * @param object
     * @return boolean $Results
     * 
    */
    private function readAll(){
         $results = array();
        
         if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select * from addressbook');
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            }
        
         }        
        return $results;
    }




    public function delete() {
        
    }

}