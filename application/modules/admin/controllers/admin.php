<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/auth
	 *	- or -
	 * 		http://example.com/index.php/auth/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		$this->load->model('auth/auth_login', 'admin');
		parent::__construct();
	}
	
	public function index()
	{
		$admin_info = $this->admin->checkAdminLogin();
		$data['admin_info'] = $admin_info;

		if($admin_info == -1)
		{
			$this->admin->AdminLoginForm($data);
		}

		$this->admin->admin_panel($data);
	}
	public function login() {

		$admin_info = $this->admin->checkAdminLogin();
		$data['admin_info'] = $admin_info;

		if($this->input->post())
		{
			$this->admin->admin_login();
		}else {
			$this->admin->AdminLoginForm($data);
		}
		
	}

	public function category()
	{
		$admin_info = $this->admin->checkAdminLogin();
		$data['admin_info'] = $admin_info;

		if($admin_info == -1)
		{
			$this->admin->AdminLoginForm($data);
		}

		$this->admin->admin_panel($data);
	}
}
