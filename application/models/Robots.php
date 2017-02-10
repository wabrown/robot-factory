<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robots
 *
 * @author Jake
 */
class Robots extends CI_Model {
    
    var $bots = array(
        
       array('id' => '19',
            'name' => 'robot A',
            'fileName' => 'a.jpg'),
        array('id' => '20',
            'name' => 'robot B',
            'fileName' => 'b.jpg'),
        array('id' => '21',
            'name' => 'robot C',
            'fileName' => 'c.jpg'),
        array('id' => '22',
            'name' => 'robot M',
            'fileName' => 'm.jpg'),
        array('id' => '23',
            'name' => 'robot R',
            'fileName' => 'r.jpg'),
        array('id' => '24',
            'name' => 'robot W',
            'fileName' => 'w.jpg')
     );
    
    var $parts = array(

        array('id' => '1',
            'name' => 'part A-1',
            'fileName' => 'a1.jpeg'),
        array('id' => '2',
            'name' => 'part A-2',
            'fileName' => 'a2.jpeg'),
        array('id' => '3',
            'name' => 'part A-3',
            'fileName' => 'a3.jpeg'),
        array('id' => '4',
            'name' => 'part B-1',
            'fileName' => 'b1.jpeg'),
        array('id' => '5',
            'name' => 'part B-2',
            'fileName' => 'b2.jpeg'),
        array('id' => '6',
            'name' => 'part B-3',
            'fileName' => 'b3.jpeg'),        
        array('id' => '7',
            'name' => 'part C-1',
            'fileName' => 'c1.jpeg'),
        array('id' => '8',
            'name' => 'part C-2',
            'fileName' => 'c2.jpeg'),
        array('id' => '9',
            'name' => 'part C-3',
            'fileName' => 'c3.jpeg'),
        array('id' => '10',
            'name' => 'part M-1',
            'fileName' => 'm1.jpeg'),
        array('id' => '11',
            'name' => 'part M-2',
            'fileName' => 'm2.jpeg'),
        array('id' => '12',
            'name' => 'part M-3',
            'fileName' => 'm3.jpeg'),
         array('id' => '13',
            'name' => 'part R-1',
            'fileName' => 'r1.jpeg'),
         array('id' => '14',
            'name' => 'part R-2',
            'fileName' => 'r2.jpeg'),
         array('id' => '15',
            'name' => 'part R-3',
            'fileName' => 'r3.jpeg'),
         array('id' => '16',
            'name' => 'part W-1',
            'fileName' => 'w1.jpeg'),
         array('id' => '17',
            'name' => 'part W-2',
            'fileName' => 'w2.jpeg'),
         array('id' => '18',
            'name' => 'part W-3',
            'fileName' => 'w3.jpeg'),       
    );    

    // Constructor    
    public function __construct() {
        parent::__construct();
    }

    // retrieve all of the parts
    public function getAllParts() {
        return $this->parts;
    }

    // retrieve a single bot
    public function getParts($which) {
        // iterate over the data until we find the one we want
        foreach ($this->parts as $record){
            if($record['id'] == $which)
            {
                return $record;
            }
        }
        return null;
    }

}
