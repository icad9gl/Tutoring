<?php
/**
* 
*/
class Pokjar_tos extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_pokjar');
		$this->load->model('Data_siswa');
		$this->load->model('Data_mapel_pengajar');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
		
	}
	
	public function index()
	{
		$data['halaman'] = 'View_pokjar';
		$data['List_pokjar'] = $this->Data_pokjar->List_pokjar();
		$this->load->view('template/default',$data);
	}
	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_pokjar';
		$this->load->view('template/default',$data);
		
	}

	public function add_form_anggota($id)
	{
		$data['id_pokjar'] = $id;	
		$data['halaman'] = 'form/Form_input_anggota';
		$this->load->view('template/default',$data);
		
	}

	public function add_form_mapel($id)
	{
		$data['id_pokjar'] = $id;
		$data['halaman'] = 'form/Form_input_mapel';
		$this->load->view('template/default',$data);

	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_pokjar->detail($id);
		$data['halaman'] = 'form/Form_edit_pokjar';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_pokjar->edit_pokjar($this->input->post());
		redirect('Pokjar_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_pokjar->tambah_pokjar($this->input->post());
		redirect('Pokjar_tos');
		
	}

	public function simpan_anggota($id)
	{
		
		$this->Data_pokjar->tambah_anggota_pokjar($this->input->post());
		redirect('Pokjar_tos/v_anggota/'. $id);
		
	}

	public function simpan_mapel($id)
	{
		
		$this->Data_pokjar->tambah_mapel_pokjar($this->input->post());
		redirect('Pokjar_tos/v_mapel/'.$id);
		
	}

	public function delete($id)
	{
		$this->Data_pokjar->delete_pokjar($id);
		redirect('Pokjar_tos');
	}

	public function v_anggota($id)
	{	
		$data['id_pokjar'] = $id;
		$data['halaman'] = 'View_anggota_pokjar';
		$data['data_anggota']=$this->Data_pokjar->lihat_anggota($id);
		$this->load->view('template/default',$data);
	}

	public function v_mapel($id)
	{
		$data['id_pokjar'] = $id;
		$data['halaman'] = 'View_mapel_pokjar';
		$data['data_pokjar_mapel'] = $this->Data_pokjar->lihat_mapel($id);
		$this->load->view('template/default',$data);
	}

	
}	