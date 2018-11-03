<?php
/**
* 
*/
class Login_tos extends CI_Controller
{
	
	public function index()
	{
		if(isset($_SESSION['email'])){
			redirect(base_url('index.php/Home_tos'));
		}
		$this->load->helper('url');
		$this->load->view('Login_tos_view');
		
	}

	public function proses_login()
	{
		$this->load->helper('url');
		$this->load->database();
		echo $this->input->post('email');
		$this->load->model('Login_tos_model');

		$login=$this->Login_tos_model->login($this->input->post('email'), $this->input->post('password'));
		
		if($login)
		{
			if($login->level == 'admin' || $login->level == 'pengajar'){
				foreach ($login as $key => $value) {
					$_SESSION[$key]=$value;
				}
				 redirect('index.php/Home_tos');
			}
		}
		redirect('index.php/login_tos');

	}
}