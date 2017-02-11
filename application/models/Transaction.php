<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of History
 *
 * @author Michael
 */
class Transaction extends CI_Model {
    
    var $data = array(
        
        array('model' => 'robot A',
            'transaction' => 'purchased',
            'price' => '$100',
            'date' => '01/04/2017',
            'time' => '07:23:23'),
        array('model' => 'robot B',
            'transaction' => 'sold',
            'price' => '$25',
            'date' => '05/24/2016',
            'time' => '12:44:15'),
        array('model' => 'robot C',
            'transaction' => 'purchased',
            'price' => '$75',
            'date' => '09/01/2016',
            'time' => '17:19:59'),
        array('model' => 'robot D',
            'transaction' => 'sold',
            'price' => '$50',
            'date' => '02/20/2016',
            'time' => '20:44:51'),
        array('model' => 'robot E',
            'transaction' => 'sold',
            'price' => '$25',
            'date' => '02/09/2016',
            'time' => '11:11:11'),
        array('model' => 'robot F',
            'transaction' => 'purchased',
            'price' => '$50',
            'date' => '01/15/2017',
            'time' => '23:19:51')
        );
    
    // Constructor    
    public function __construct() {
        parent::__construct();
    }
    
    // retrieve all of transactions
    public function getAllHistories() {
        return $this->data;
    }
    
    // retrieve a single bot
    public function getModel($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if($record['model'] == $which)
                return $record;
        return null;
    }
    
    // retrieve a single bot
    public function getTransaction($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if($record['transaction'] == $which)
            
                return $record;
            
        
        return null;
    }
    
    // retrieve a single bot
    public function getPrice($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if($record['price'] == $which)
            
                return $record;
            
        
        return null;
    }
    
    // retrieve a single bot
    public function getDate($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if($record['date'] == $which)
            
                return $record;
            
        
        return null;
    }
    
    // retrieve a single bot
    public function getTime($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if($record['time'] == $which)
            
                return $record;
            
        
        return null;
    }
}
