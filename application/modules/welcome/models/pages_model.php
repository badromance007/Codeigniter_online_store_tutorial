<?php

class Pages_model extends MY_Model {

    public function __construct() {
        $this->table_name = 'pages';
        $this->primary_key = 'page_id';
        parent::__construct();
    }

}