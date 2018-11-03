<?php
/**
* 
*/
class Matpel_tos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_matpel');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
		
	}

	public function index()
	{
		
		$data['halaman'] = 'View_matpel';
		$data['List_matpel'] = $this->Data_matpel->List_matpel();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		
		
		$data['halaman'] = 'form/Form_matpel';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_matpel->detail($id);
		$data['halaman'] = 'form/Form_edit_matapelajaran';
		$this->load->view('template/default',$data);


		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_matpel->edit_matpel($this->input->post());
		redirect('Matpel_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_matpel->tambah_matpel($this->input->post());
		redirect('Matpel_tos');
		
	}

	public function delete($id)
	{
		$this->Data_matpel->delete_matpel($id);
		redirect('Matpel_tos');
	}

}	