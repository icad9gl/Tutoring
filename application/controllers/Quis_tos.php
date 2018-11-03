<?php
/**
* 
*/
class Quis_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_quis');
		$this->load->model('Data_pokjar');
		$this->load->model('Data_list_quis');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}
	public function index()
	{
		$data['halaman'] = 'View_quis';
		$data['List_quis'] = $this->Data_quis->List_quis();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		$data['halaman'] = 'form/Form_quis';
		$data['pokjar'] = $this->Data_pokjar->List_pokjar();
		$data['js'] = "js/form_quis";
		$this->load->view('template/default',$data);
		
	}

	public function soal($kode_kuis = ""){
		if($kode_kuis == ""){
			redirect("Quis_tos");
		}
		$quis = $this->Data_quis->detail($kode_kuis);
		$mapel = $this->Data_pokjar->get_id_mapel($quis->id_mapel_pokjar);
		
		$data['halaman'] = 'form/Form_detail_quis';
		$data['id_quis'] = $kode_kuis;
		$data['list_quis'] = $this->Data_list_quis->quis_by_mapel($mapel);
		$data['list_soal'] = $this->Data_list_quis->quis_by_id($kode_kuis);
		$data['js'] = "js/form_quis";	
		$this->load->view('template/default',$data);
	}

	public function add_soal($id_quis, $id_list_quis){
		$data['id_quis'] = $id_quis;
		$data['id_list_quis'] = $id_list_quis;
		$this->Data_quis->simpan_soal($data);
		redirect("Quis_tos/soal/" . $id_quis);
	}

	public function hapus_soal($id_quis, $id){
		$this->Data_quis->hapus_soal($id, $id_quis);
		redirect('Quis_tos/soal/' . $id_quis);
	}


	public function simpan(){
		$this->Data_quis->tambah_quis($this->input->post());
		redirect('Quis_tos/soal/' . $this->db->insert_id());	
	}

	public function delete($id)
	{
		$this->Data_quis->delete_quis($id);
		redirect('Quis_tos');
	}
	
}