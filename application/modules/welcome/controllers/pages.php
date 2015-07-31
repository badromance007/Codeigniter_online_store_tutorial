<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model(array('welcome/products_model'));
        $data['products'] = $this->products_model->get_all();
        $data['product_categories'] = $this->products_model->get_categories();
        $data['current_page'] = 'home';
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "home";
        $this->load->view($this->_container, $data);
    }

    public function page_details() {
        $this->load->model(array('welcome/pages_model','welcome/products_model'));
        $page_name = $this->uri->segment(1, 0);
        $page_id = 0;
        if ($page_name == 'about-us') {
            $page_id = 1;
            $data['current_page'] = 'about-us';
        } else if ($page_id == 'delivery') {
            $page_id = 2;
            $data['current_page'] = 'delivery';
        }
        $data['product_categories'] = $this->products_model->get_categories();
        $data['content'] = $this->pages_model->get_by_id($page_id);
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "page";
        $this->load->view($this->_container, $data);
    }

    public function contact_us() {
        $data['current_page'] = 'contact-us';
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "contact_us";
        $this->load->view($this->_container, $data);
    }

}
