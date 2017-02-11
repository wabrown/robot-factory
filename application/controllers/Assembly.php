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
class Assembly extends Application {

    public function index() {
                $this->data['head1'] = $this->robots->getPart(1)['fileName'];
                $this->data['body1'] = $this->robots->getPart(2)['fileName'];
                $this->data['feet1'] = $this->robots->getPart(3)['fileName'];
                              
                $this->data['head2'] = $this->robots->getPart(4)['fileName'];
                $this->data['body2'] = $this->robots->getPart(5)['fileName'];
                $this->data['feet2'] = $this->robots->getPart(6)['fileName'];
                              
                $this->data['head3'] = $this->robots->getPart(7)['fileName'];
                $this->data['body3'] = $this->robots->getPart(8)['fileName'];
                $this->data['feet3'] = $this->robots->getPart(9)['fileName'];
                
                $this->data['head4'] = $this->robots->getPart(10)['fileName'];
                $this->data['body4'] = $this->robots->getPart(11)['fileName'];
                $this->data['feet4'] = $this->robots->getPart(12)['fileName'];
                              
                $this->data['head5'] = $this->robots->getPart(13)['fileName'];
                $this->data['body5'] = $this->robots->getPart(14)['fileName'];
                $this->data['feet5'] = $this->robots->getPart(15)['fileName'];
                              
                $this->data['head6'] = $this->robots->getPart(16)['fileName'];
                $this->data['body6'] = $this->robots->getPart(17)['fileName'];
                $this->data['feet6'] = $this->robots->getPart(18)['fileName'];
		$this->data['pagebody'] = 'assembly';
		$this->render(); 
    } 
}
