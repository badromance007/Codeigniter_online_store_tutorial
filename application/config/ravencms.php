<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Raven Content Management System
 *
 * A Business Content Management Systems that links your business processes with the internet
 *
 * @package		ravencms
 * @author		Kazembe Rodrick
 * @copyright	Copyright (c) 2008 - 2015, Kazembe Rodrick
 * @license		http://www.ravensoftware.co.tz/ravencms/license
 * @link		http://www.ravensoftware.co.tz/products/scms
 * @filesource 
 */

// ------------------------------------------------------------------------


/*
 |--------------------------------------------------------------------------
 | View File Locations
 |--------------------------------------------------------------------------
 | Contains variables setting where the default view file directories are located.
 | All must be defined with trailing slashes.
 */
$config['ravencms_template_dir'] = ""; // you need this line
$config['ravencms_template_dir_public'] = $config['ravencms_template_dir'] . "public/themes/default/";
$config['ravencms_template_dir_admin'] = $config['ravencms_template_dir'] . "admin/themes/default/";
$config['ravencms_template_dir_welcome'] = $config['ravencms_template_dir'] . "welcome/themes/aise/";

/* End of file ravencms.php */
/* Location: system/application/config/ravencms.php */