<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author William
 */
class Home extends CI_Model {
    
    var $info = array(
        
       array('numBots' => '19',
            'numParts' => '40',
            'monSpent' => '$40000',
			'monEarned'=> '$100000'),
        
     );
    
    

    // Constructor    
    public function __construct() {
        parent::__construct();
    }

    // retrieve all of the parts
    public function all() {
        return $this->info;
    }

   
}
