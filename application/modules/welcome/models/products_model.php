<?php

class Products_model extends MY_Model {

    public function __construct() {
        $this->table_name = 'products';
        $this->primary_key = 'product_id';
        parent::__construct();
    }

    public function get_by_id($primary_key_value, $fields = '') {
        $fields_hack = '*,(select brand_description from product_brands pb where pb.brand_id = products.product_brand_id) brand_name';
        return parent::get_by_id($primary_key_value, $fields_hack);
    }

    public function get_all($fields = '', $where = array()) {
        $fields_hack = '*,(SELECT image_path FROM product_images pi WHERE pi.featured = 1 AND pi.product_id = products.product_id) featured_image';
        return parent::get_all($fields_hack, $where);
    }

    public function get_featured_image($product_id) {
        $this->db->where(array('product_id' => $product_id, 'featured' => '1'));
        $Q = $this->db->get('product_images');


        if ($Q->num_rows() > 0) {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    public function get_categories() {
        $Q = $this->db->get('product_categories');

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();

        return $data;
    }

    public function get_product_images($product_id) {
        $this->db->where(array('product_id' => $product_id));
        $Q = $this->db->get('product_images');

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();

        return $data;
    }

}
