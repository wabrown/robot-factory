<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of History
 *
 * @author Michael
 */
class History extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pagebody'] = 'historypage';

        $source = $this->historydata->getAllHistories();
        $history = array();

        foreach ($source as $record)
        {
            $history[] = array('model' => $record['model'],
                'transaction' => $record['transaction'],
                'price' => $record['price'],
                'date' => $record['date'],
                'time' => $record['time']);
        }
        $this->data['transaction'] = $history;
        $this->render();
    }

}
