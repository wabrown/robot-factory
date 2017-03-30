<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Assembly
 *
 * @author Nick
 */
// A page for robot assembly, providing different parts to mix and match.
class Assembly extends Application {

    public function index() {
        // Retrieves the file names for each part in the Robots model.
        $this->data['head1'] = $this->partsdata->getPart(1)->file_name;
        $this->data['body1'] = $this->partsdata->getPart(2)->file_name;
        $this->data['feet1'] = $this->partsdata->getPart(3)->file_name;

        $this->data['head2'] = $this->partsdata->getPart(4)->file_name;
        $this->data['body2'] = $this->partsdata->getPart(5)->file_name;
        $this->data['feet2'] = $this->partsdata->getPart(6)->file_name;

        $this->data['head3'] = $this->partsdata->getPart(7)->file_name;
        $this->data['body3'] = $this->partsdata->getPart(8)->file_name;
        $this->data['feet3'] = $this->partsdata->getPart(9)->file_name;

        $this->data['head4'] = $this->partsdata->getPart(10)->file_name;
        $this->data['body4'] = $this->partsdata->getPart(11)->file_name;
        $this->data['feet4'] = $this->partsdata->getPart(12)->file_name;

        $this->data['head5'] = $this->partsdata->getPart(13)->file_name;
        $this->data['body5'] = $this->partsdata->getPart(14)->file_name;
        $this->data['feet5'] = $this->partsdata->getPart(15)->file_name;

        $this->data['head6'] = $this->partsdata->getPart(16)->file_name;
        $this->data['body6'] = $this->partsdata->getPart(17)->file_name;
        $this->data['feet6'] = $this->partsdata->getPart(18)->file_name;
        $this->data['pagebody'] = 'assemblypage';
        $this->render();
    }
    // Call controller method from view (submit button)
    public function insertAssembled() {
        //Build record and send to saveBot
        /*$id = $_POST['id'];
        $head = $_POST['head'];
        $body = $_POST['body'];
        $legs = $_POST['legs'];
        
        $record['id'] = $id;
        $record['head'] = $head;
        $record['body'] = $body;
        $record['legs'] = $legs;*/
        echo "hit";
        echo die;
        //$this->Robotsdata->saveBot();
    }
    
    
}
