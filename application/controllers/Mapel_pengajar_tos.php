<?php
/**
* 
*/
class Mapel_pengajar_tos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_mapel_pengajar');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		
		$data['halaman'] = 'View_mapel_pengajar';
		$data['List_mapel_pengajar'] = $this->Data_mapel_pengajar->List_mapel_pengajar();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_mapel_pengajar';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_mapel_pengajar->detail($id);
		$data['halaman'] = 'form/Form_edit_mapel_pengajar';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_mapel_pengajar->Form_edit_mapel_pengajar($this->input->post());
		redirect('Mapel_pengajar_tos');
		
	}

	public function simpan()
	{
		$simpan = $this->input->post();
		$simpan['kode'] = "TOS" . $simpan['id_matapelajaran'] . "0" . $simpan['id_pengajar'];
		$this->Data_mapel_pengajar->tambah_mapel_pengajar($simpan);
		redirect('Mapel_pengajar_tos');
		
	}

	public function delete($id)
	{
		$this->Data_mapel_pengajar->delete_admin($id);
		redirect('Mapel_pengajar_tos');
	}

}	