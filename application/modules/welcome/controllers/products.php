<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model(array('welcome/products_model'));
        $data['products'] = $this->products_model->get_all();
        $data['product_categories'] = $this->products_model->get_categories();
        $data['current_page'] = 'products';
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "products";
        $this->load->view($this->_container, $data);
    }

    public function product_details($product_id) {
        $this->load->model(array('welcome/products_model'));
        $data['product'] = $this->products_model->get_by_id($product_id);
        $data['product_categories'] = $this->products_model->get_categories();
        $data['featured_image'] = $this->products_model->get_featured_image($product_id);
        $data['product_images'] = $this->products_model->get_product_images($product_id);
        $data['current_page'] = 'products';
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "product_details";
        $this->load->view($this->_container, $data);
    }

    public function product_categories($category_id) {
        $data['current_page'] = 'products';
        $data['page'] = $this->config->item('bootsshop_template_dir_welcome') . "product_details";
        $this->load->view($this->_container, $data);
    }

}
