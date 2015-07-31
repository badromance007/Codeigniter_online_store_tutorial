<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $_container;
    var $_modules;

    function __construct() {
        parent::__construct();
        // Load Base CodeIgniter files
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('typography');

        // Load Base Bootsshop config file(s)
        $this->load->config('bootsshop');

        // Set container variable
        $this->_container = $this->config->item('bootsshop_template_dir_welcome') . "layout.php";
        $this->_modules = $this->config->item('modules_locations');

        log_message('debug', 'CI Bootsshop : MY_Controller class loaded');
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */