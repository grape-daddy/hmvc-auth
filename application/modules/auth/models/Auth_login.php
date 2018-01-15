<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_login extends MX_Controller {

	/**
	 * 
	 */

	function AdminLoginForm($data)
	{
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.title.inc.php");
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin/loginform.php");
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.tail.inc.php");
		
		die();
	}

	function checkAdminLogin() {

		if(!isset($_SESSION["login_token"]))
		{
			return -1;
		}

		$sql = "SELECT
				*
			FROM	
				auth_sessions
			WHERE 
				token LIKE '" . $_SESSION["login_token"] . "'
			AND
				login_type = 1";

		$query = $this->db->query($sql);
		
		if($query->num_rows() != 1)
		{
			$return = array(
				'num' => 0, 
				'value' => ''
			);
			return -1;
		}

		$row = $query->row_array();
		return $row;
		
	}

	function admin_login() {

		//var_dump($this->input->post());
		$login_token = $this->admin->token();

		$session_data = array(
		        'login_token'  => $login_token
		);
		$this->session->set_userdata('login_token', $login_token);

		$row['id'] = 1;
		$data = array(
		        'token' => $login_token,
		        'login_type' => 1,
		        'login_id' => $row['id'],
		        'ip_address' => $this->input->ip_address(),
		        'last_access_time' => date("Y-m-d H:i:s")
		);

		$this->db->insert('auth_sessions', $data);

		$admin_info = $this->admin->checkAdminLogin();
		$data['admin_info'] = $admin_info;

		//var_dump($member_info);
		if($admin_info == -1)
		{
			$this->admin->AdminLoginForm($data);
		}

		$this->admin->admin_panel($data);
		
	}

	function admin_panel($data) {
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.title.inc.php");
		echo "Hello";
		include(FCPATH . "templates/" . CURRENT_SKIN . "/admin.tail.inc.php");
	}

	function token($length = 32) {
		// Create random token
		$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		
		$max = strlen($string) - 1;
		
		$token = '';
		
		for ($i = 0; $i < $length; $i++) {
			$token .= $string[mt_rand(0, $max)];
		}
		
		return $token;
	}
	
}
