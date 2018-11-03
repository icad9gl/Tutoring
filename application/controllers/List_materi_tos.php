<?php
/**
* 
*/
class List_materi_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_list_materi');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}
	
	public function index()
	{
		$data['halaman'] = 'View_list_materi';
		$data['List_materi_db'] = $this->Data_list_materi->List_materi_db();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_list_materi';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_list_materi->detail($id);
		$data['halaman'] = 'form/Form_edit_list_materi';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_list_materi->edit_list_materi($this->input->post());
		redirect('List_materi_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_list_quis->tambah_list_materi($this->input->post());
		redirect('List_materi_tos');
		
	}
}