<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parts
 *
 * @author Jake
 */
class Partsdata extends CI_Model
{

    var $data = array(
        array('id' => '1',
            'name' => 'part A-1',
            'fileName' => 'a1.jpeg',
            'href' => '/parts/1'),
        array('id' => '2',
            'name' => 'part A-2',
            'fileName' => 'a2.jpeg',
            'href' => '/parts/2'),
        array('id' => '3',
            'name' => 'part A-3',
            'fileName' => 'a3.jpeg',
            'href' => '/parts/3'),
        array('id' => '4',
            'name' => 'part B-1',
            'fileName' => 'b1.jpeg',
            'href' => '/parts/4'),
        array('id' => '5',
            'name' => 'part B-2',
            'fileName' => 'b2.jpeg',
            'href' => '/parts/5'),
        array('id' => '6',
            'name' => 'part B-3',
            'fileName' => 'b3.jpeg',
            'href' => '/parts/6'),
        array('id' => '7',
            'name' => 'part C-1',
            'fileName' => 'c1.jpeg',
            'href' => '/parts/7'),
        array('id' => '8',
            'name' => 'part C-2',
            'fileName' => 'c2.jpeg',
            'href' => '/parts/8'),
        array('id' => '9',
            'name' => 'part C-3',
            'fileName' => 'c3.jpeg',
            'href' => '/parts/9'),
        array('id' => '10',
            'name' => 'part M-1',
            'fileName' => 'm1.jpeg',
            'href' => '/parts/10'),
        array('id' => '11',
            'name' => 'part M-2',
            'fileName' => 'm2.jpeg',
            'href' => '/parts/11'),
        array('id' => '12',
            'name' => 'part M-3',
            'fileName' => 'm3.jpeg',
            'href' => '/parts/12'),
        array('id' => '13',
            'name' => 'part R-1',
            'fileName' => 'r1.jpeg',
            'href' => '/parts/13'),
        array('id' => '14',
            'name' => 'part R-2',
            'fileName' => 'r2.jpeg',
            'href' => '/parts/14'),
        array('id' => '15',
            'name' => 'part R-3',
            'fileName' => 'r3.jpeg',
            'href' => '/parts/15'),
        array('id' => '16',
            'name' => 'part W-1',
            'fileName' => 'w1.jpeg',
            'href' => '/parts/16'),
        array('id' => '17',
            'name' => 'part W-2',
            'fileName' => 'w2.jpeg',
            'href' => '/parts/17'),
        array('id' => '18',
            'name' => 'part W-3',
            'fileName' => 'w3.jpeg',
            'href' => '/parts/18'),
    );

    // Constructor    
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve all of the parts
    public function getAllParts()
    {
        return $this->data;
    }

    // retrieve a single part
    public function getPart($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
        {
            if ($record['id'] == $which)
            {
                return $record;
            }
        }
        return null;
    }

}
