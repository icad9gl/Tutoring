<?php
/**
* 
*/
class Logout_tos extends CI_Controller
{
	
	public function index()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login_tos'));
	}
}