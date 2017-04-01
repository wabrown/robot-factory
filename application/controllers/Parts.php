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
        // get user roles
        $user_role = $this->session->userdata('userrole');

        // only allow to worker
        if ($user_role == 'worker' || $user_role == 'boss' || $user_role == 'supervisor')
        {
            // Get all parts 
            $allParts = $this->partsdata->getAllParts();

            $this->generateTable($allParts);
        } else
        {
            $this->data['pagetitle'] = 'Parts List - Only Allow to Worker';
            $this->data['pagebody'] = 'blockedpage';
            $this->render();
        }
    }

    // generate table of parts
    public function generateTable($allParts)
    {
        $this->data['pagetitle'] = 'Parts List';
        $this->data['pagebody'] = 'partspage';

        $head_parts = array();
        $torso_parts = array();
        $legs_parts = array();

        // save parts by piece - head, torso, legs
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

    // get only single page - detail
    public function getSinglePage($id)
    {
        // load a page for details
        $this->data['pagebody'] = 'singlepage';

        // get single part
        $onePart = $this->partsdata->getSinglePart($id);

        // merge the records to data array
        $this->data = array_merge($this->data, (array) $onePart);

        $this->render();
    }


    // create part array 
    private function createPartArray($array)
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
}
