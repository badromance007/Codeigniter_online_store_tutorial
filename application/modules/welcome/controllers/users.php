<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function register() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "login";
        $this->load->view($this->_container, $data);
    }

    public function login() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "login";
        $this->load->view($this->_container, $data);
    }

    public function reset_password() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "password_reset";
        $this->load->view($this->_container, $data);
    }

    public function logout() {
        
    }

}
