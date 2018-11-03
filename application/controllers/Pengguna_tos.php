<?php
/**
* 
*/
class Pengguna_tos extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_pengguna');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index(){		
		$data['halaman'] = 'View_pengguna';
		$data['List_pengguna'] = $this->Data_pengguna->List_pengguna();
		$this->load->view('template/default',$data);
	}

	public function add_form(){
		$data['halaman'] = 'form/Form_pengguna';
		$this->load->view('template/default',$data);
	}

	public function edit_form($id){
		$data['data_edit']= $this->Data_pengguna->detail($id);
		$data['halaman'] = 'form/Form_edit_pengguna';
		$this->load->view('template/default',$data);
	}

	public function edit(){
		// print_r($this->input->post());
		$this->Data_pengguna->edit_pengguna($this->input->post());
		redirect('Pengguna_tos');
	}

	public function simpan(){
		$this->Data_pengguna->tambah_pengguna($this->input->post());
		redirect('Pengguna_tos');
	}

	public function delete($id){
		$this->Data_pengguna->delete_pengguna($id);
		redirect('Pengguna_tos');
	}
}