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
        $this->data['pagebody'] = 'partspage';

        $allParts = $this->partsdata->getAllParts();

        foreach ($allParts as $part)
        {
            $cells[] = $this->parser->parse('_cell', (array) $part, true);
        }

        $this->load->library('table');

        $robots = array(
            'table_open' => '<table class="gallery table-bordered container-fluid">',
            'cell_start' => '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );

        $this->table->set_template($robots);

        $rows = $this->table->make_columns($cells, 3);
        $this->data['parts_table'] = $this->table->generate($rows);

        $this->render();
    }

    public function getone($id)
    {
        // loads justone
        $this->data['pagebody'] = 'singlepage';

        $record = $this->partsdata->getPart($id);

        // merge the records to data array
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

}
