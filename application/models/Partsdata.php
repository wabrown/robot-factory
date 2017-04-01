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

    // Constructor    
    public function __construct()
    {
        parent::__construct('partsdata', 'id');
    }

    // retrieve all of the parts from db
    public function get_all_parts()
    {
        return $this->db->get('partsdata')->result_array();
    }

    // retrieve a single part
    public function get_single_part($which)
    {
        $all_parts = $this->get_all_parts();

        // iterate over the data until we find the one we want
        foreach ($all_parts as $one_part)
        {
            if ($one_part['id'] == $which)
            {
                return $one_part;
            }
        }
        return null;
    }

    // insert parts to db
    public function insert_parts($parts)
    {
        $this->db->insert_batch('partsdata', $parts);
    }

    public function get_parts_by_piece($piece)
    {
        $this->db->select('*')->from('partsdata');
        $this->db->where('piece', $piece);
        $query = $this->db->get();
        return $query->result_array();
    }
    
        public function getPart($which) {
        $allParts = $this->all();
        foreach ($allParts as $onePart) {
            $id = $onePart->id;
            if ($id == $which) {
                return $onePart;
            }
        }
    }
    
     public function deletePartById($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('partsdata');
    }

    public function getPartByFile($filename)
    {
        $this->db->select('*')->from('partsdata');
        $this->db->where('file_name', $filename);
        $query = $this->db->get();
        return $query->result_array();
    }

}
