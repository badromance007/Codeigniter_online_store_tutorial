<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_Cart extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "shopping_cart";
        $this->load->view($this->_container, $data);
    }

    public function add() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "shopping_cart";
        $this->load->view($this->_container, $data);
    }

    public function update() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "shopping_cart";
        $this->load->view($this->_container, $data);
    }

    public function delete() {
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "shopping_cart";
        $this->load->view($this->_container, $data);
    }
}
