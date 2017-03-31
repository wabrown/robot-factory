<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Register extends Application
{

    //put your code herefunction __construct() {
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pagebody'] = 'registerpage';

        $link = file_get_contents("https://umbrella.jlparry.com/work/registerme/Strawberry/415157");

        if (strpos($link, 'Ok') !== false)
        {
            $this->data['content'] = "Success";
            echo $link;
        } else
        {
            $this->data['content'] = "Failed";
        }

        $this->render();
    }

}
