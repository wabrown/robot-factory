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
class Partsdata extends MY_Model
{
    // Constructor    
    public function __construct()
    {
        parent::__construct('partsdata', 'id');
    }

    // retrieve all of the parts
    public function get_all_parts()
    {
        return $this->all();
    }

    // retrieve a single part
    public function get_single_part($which)
    {
        $all_parts = $this->all();
        
        // iterate over the data until we find the one we want
        foreach ($all_parts as $one_part)
        {
            $id = $one_part->id;
            
            if($id == $which)
            {
                return $one_part;
            }
        }
        return null;
    }

}
