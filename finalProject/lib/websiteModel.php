<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of websiteModel
 *
 * @author sebas
 */
class websiteModel {
    //put your code here
    private  $website;
    
    public function getWebsite() {
        return $this->website;
    }

    public function setWebsite($website) {
        if (is_string($website) && !empty($website) && strlen($website) > 3)
        $this->website = $website;
    }


}



   