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
class Parts extends Application{
    
	function __construct()
	{
		parent::__construct();
	}
        
	public function index()
	{
		$this->data['pagebody'] = 'parts';
                
                $source = $this->robots->getAllParts();
                $robots = array ();
                
                foreach($source as $record)
                {
                    $robots[] = array ('fileName' => $record['fileName'], 
                                       'name' => $record['name'], 
                                       'href' => $record['fileName']);
                }
                
                $this->data['robots'] = $robots;
                
		$this->render(); 
	}
}
