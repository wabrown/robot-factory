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
        $this->load->model('partsdata');
    }

    public function index()
    {
        $user_role = $this->session->userdata('userrole');

        if ($user_role != 'worker')
        {
            $this->data['pagetitle'] = 'Allow only worker';
        }

        // Get all parts 
        $allParts = $this->partsdata->get_all_parts();

        $this->generate_table($allParts);
    }

    public function generate_table($allParts)
    {
        $this->data['pagetitle'] = 'Parts List';
        $this->data['pagebody'] = 'partspage';

        $head_parts = array();
        $torso_parts = array();
        $legs_parts = array();

        // save parts by piece
        foreach ($allParts as $part)
        {
            if ($part['piece'] == '1')
            {
                $head_parts[] = array(
                    'id' => $part['id'],
                    'model' => $part['model'],
                    'piece' => $part['piece'],
                    'plant' => $part['plant'],
                    'stamp' => $part['stamp'],
                    'aquired_time' => date("Y-m-d H:i:s", time()),
                    'file_name' => $part['model'] . $part['piece'] . '.jpeg',
                    'href' => '/parts/' . $part['id']);
            } elseif ($part['piece'] == '2')
            {
                $torso_parts[] = array(
                    'id' => $part['id'],
                    'model' => $part['model'],
                    'piece' => $part['piece'],
                    'plant' => $part['plant'],
                    'stamp' => $part['stamp'],
                    'aquired_time' => date("Y-m-d H:i:s", time()),
                    'file_name' => $part['model'] . $part['piece'] . '.jpeg',
                    'href' => '/parts/' . $part['id']);
            } elseif ($part['piece'] == '3')
            {
                $legs_parts[] = array(
                    'id' => $part['id'],
                    'model' => $part['model'],
                    'piece' => $part['piece'],
                    'plant' => $part['plant'],
                    'stamp' => $part['stamp'],
                    'aquired_time' => date("Y-m-d H:i:s", time()),
                    'file_name' => $part['model'] . $part['piece'] . '.jpeg',
                    'href' => '/parts/' . $part['id']);
            }
        }

        $this->data['head_parts'] = $head_parts;
        $this->data['torso_parts'] = $torso_parts;
        $this->data['legs_parts'] = $legs_parts;
        $this->render();
    }

    public function get_single_page($id)
    {
        // load a page for details
        $this->data['pagebody'] = 'singlepage';

        // get single part
        $onePart = $this->partsdata->get_single_part($id);

        // merge the records to data array
        $this->data = array_merge($this->data, (array) $onePart);

        $this->render();
    }


    public function get_random_parts()
     {
        $API_KEY = '3c2262';
        $json_parts = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=' . $API_KEY);

        // decode json
        $random_parts = json_decode($json_parts, true);

        // create part array
        $random_parts_to_save = $this->create_part_array($random_parts);

        // insert parts to db
        $this->partsdata->insert_parts($random_parts_to_save);

        redirect('/parts');
    }

    public function buy_parts()
    {

        $API_KEY = '3c2262';
        $json_parts = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' . $API_KEY);

        // decode json
        $buy_parts = json_decode($json_parts, true);
        
        // create part array
        $buy_parts_to_save = $this->create_part_array($buy_parts);

        // insert parts to db
        $this->partsdata->insert_parts($buy_parts_to_save);

        redirect('/parts');
    }
    
    private function create_part_array($array)
    {
        $temp_array = array();
        
        foreach ($array as $part)
        {
            $temp_array[] = array(
                'id' => $part['id'],
                'model' => $part['model'],
                'piece' => $part['piece'],
                'plant' => $part['plant'],
                'stamp' => $part['stamp'],
                'aquired_time' => date("Y-m-d H:i:s", time()),
                'file_name' => $part['model'] . $part['piece'] . '.jpeg',
                'href' => '/parts/' . $part['id']);
        }

        return $temp_array;
    }
    
    public function get_parts_by_piece(){
        $temp = $this->partsdata->get_parts_by_piece(1);
        var_dump($temp);
    }
    
}
