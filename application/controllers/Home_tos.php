<?php
/**
* 
*/
class Home_tos extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{	
		$data['halaman'] ='Home_tos_view';
		$this->load->view('template/default',$data);
	}

}