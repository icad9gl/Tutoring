<?php
/**
* 
*/
class Nilai_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_nilai');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		$data['halaman'] = 'View_nilai';
		$data['List_nilai'] = $this->Data_nilai->List_nilai();
		$this->load->view('template/default',$data);
	}
	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_nilai';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_nilai->detail($id);
		$data['halaman'] = 'form/Form_edit_nilai';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_nilai->edit_nilai($this->input->post());
		redirect('Nilai_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_nilai->tambah_nilai($this->input->post());
		redirect('Nilai_tos');
		
	}

	public function delete($id)
	{
		$this->Data_nilai->delete_nilai($id);
		redirect('Nilai_tos');
	}

}	