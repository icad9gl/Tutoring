<?php
/**
* 
*/
class List_quis_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_list_quis');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}
	
	public function index()
	{
		$data['halaman'] = 'View_list_quis';
		$data['List_quis_db'] = $this->Data_list_quis->List_quis_db();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_list_quis';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_list_quis->detail($id);
		$data['halaman'] = 'form/Form_edit_list_quis';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_list_quis->edit_list_quis($this->input->post());
		redirect('List_quis_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_list_quis->tambah_list_quis($this->input->post());
		redirect('List_quis_tos');
		
	}
}