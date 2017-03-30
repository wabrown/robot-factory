<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
class Parts extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pagetitle'] = 'Parts List';
        $this->data['pagebody'] = 'partspage';

        // Get all parts 
        $allParts = $this->partsdata->get_all_parts();
        sort($allParts);
        
        // Create each cell
        foreach ($allParts as $part)
        {
            $cells[] = $this->parser->parse('_cell', (array) $part, true);
            
        }
       
        //$this->data['parts_table'] = $this->parser->parse('partspage', (array) $cells, true);

        
        $this->load->library('table');
        $robot_array = array(
            'table_open' => '<table class="table-bordered">',
            'heading_cell_start' => '<th class="text-danger header-size">',
        );
        $this->table->set_heading('Head Parts', 'Torso Parts', 'Leg Parts');
        $this->table->set_template($robot_array);
        $rows = $this->table->make_columns($cells, 3);
        $this->data['parts_table'] = $this->table->generate($rows);

       
        $this->render();
    }
    
    public function get_single_page($id)
    {
        // load a page for details
        $this->data['pagebody'] = 'singlepage';

        $onePart = $this->partsdata->get_single_part($id);
 
        // merge the records to data array
        $this->data = array_merge($this->data, (array)$onePart);

        $this->render();
    }
    
    /*
    public function get_random_parts(){
        
         $this->data['pagetitle'] = 'TEST get parts certis';
         $this->data['pagebody'] = 'partspage';
         
        $certis = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=29151a');
        echo $certis;
       $decodedJson = json_decode($certis);
       
       
       foreach ($decodedJson as $part)
        {
  
            $cells[] = $this->parser->parse('_cell2', (array) $part, true);
        }
        
        $this->load->library('table');
        $robot_array = array(
            'table_open' => '<table class="table-bordered">',
            'heading_cell_start' => '<th class="text-danger header-size">',
        );
        $this->table->set_heading('Head Parts', 'Torso Parts', 'Leg Parts');
        $this->table->set_template($robot_array);
        $rows = $this->table->make_columns($cells, 3);
        $this->data['parts_table'] = $this->table->generate($rows);

       
        $this->render();
    }*/
}
