<?php
/**
* 
*/
class Materi_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_materi');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
		{
			
			$data['halaman'] = 'View_materi';
			$data['List_materi'] = $this->Data_materi->List_Materi();
			$this->load->view('template/default',$data);
		}

	public function proses_next()
	{
		if (empty($_POST['data_file'])) {
			$this->add_form();	
		}else{
			$this->simpan();
		}
		
	}
	public function add_form()
	{
		if($_POST){
			$data['pokjar'] = (isset($_POST['id_pokjar'])) ? $_POST['id_pokjar']:"";
			$data['materi'] = (isset($_POST['id_detail'])) ? $_POST['id_detail']:"";
			$data['tipe'] = (isset($_POST['tipe'])) ? $_POST['tipe']:"";
		}	
		
		$data['halaman'] = 'form/Form_materi';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_materi->detail($id);
		$data['halaman'] = 'form/Form_edit_materi';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_materi->edit_materi($this->input->post());
		redirect('Materi_tos');
		
	}

	public function simpan()
	{
		unset($_POST['id_detail']);
		$this->Data_materi->tambah_materi($this->input->post());
		redirect('Materi_tos');
		
	}

	public function delete($id)
	{
		$this->Data_materi->delete_materi($id);
		redirect('Materi_tos');
	}

}	