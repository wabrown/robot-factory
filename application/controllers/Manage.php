<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manage
 *
 * @author karan
 */
class Manage extends Application
{

    //put your code herefunction __construct() {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pagebody'] = 'managepage';
        $this->data['pagetitle'] = 'Management';   
        $this->data['message'] = '';

        $this->render();
    }
    
    public function register()
    {
        $this->data['pagetitle'] = 'Management';  
        $this->data['pagebody'] = 'managepage';
        $password = $_POST["password"]; //415157
        
        $response = file_get_contents("https://umbrella.jlparry.com/work/registerme/strawberry/$password");
        $responseArray = explode(" ", $response);

        if ($responseArray[0] == 'Ok')
        {
            $this->managedata->updateKey($responseArray[1]);
            $this->data['message'] = "<div>Successfully get the API key</div>";
        } else
        {
            $this->data['message'] = "<div class='text-danger'>$response</div>";
        }
        
        $this->render();
    }

}
