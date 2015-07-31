<?php

class MY_Model extends CI_Model {

    protected $table_name = '';
    protected $primary_key = '';

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function insert($data) {
        $data['created_from_ip'] = $data['updated_from_ip'] = $_SERVER['REMOTE_ADDR'];
        $data['date_created'] = $data['date_updated'] = date('Y-m-d H:i:s');


        $success = $this->db->insert($this->_table, $data);
        if ($success) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }

    public function update($data, $where = array()) {
        $data['date_updated'] = date('Y-m-d H:i:s');
        $data['updated_from_ip'] = $_SERVER['REMOTE_ADDR'];

        $this->db->where($where);
        return $this->db->update($this->_table, $data);
    }

    public function delete($primary_key_value) {

        $this->db->where($this->primary_key, $primary_key_value);

        return $this->db->delete($this->table_name);
    }

    public function get_by_id($primary_key_value, $fields = '') {
        $data = array();
        if ($fields != '') {
            $this->db->select($fields);
        }

        $this->db->where($this->primary_key, $primary_key_value);


        $Q = $this->db->get($this->table_name);

        if ($Q->num_rows() > 0) {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }

    public function get_all($fields = '', $where = array()) {
        $data = array();
        if ($fields != '') {
            $this->db->select($fields);
        }

        if (count($where)) {
            $this->db->where($where);
        }

        $Q = $this->db->get($this->table_name);

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $Q->free_result();

        return $data;
    }

}
