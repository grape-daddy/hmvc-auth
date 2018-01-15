<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends MX_Controller {

	/**
	 * 
	 */

	function AdminLoginForm($data)
	{
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.title.inc.php");
		//include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/member.login.form.php");
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.tail.inc.php");
		
		die();
	}
	
}
