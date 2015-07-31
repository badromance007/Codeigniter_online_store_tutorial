<?php

class Users_model extends MY_Model {

    public function __construct() {
        $this->table_name = 'users';
        $this->primary_key = 'user_id';
        parent::__construct();
    }

}