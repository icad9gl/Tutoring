<?php
/**
* 
*/
class Orang_tua_tos extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_orang_tua');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		
		$data['halaman'] = 'View_orang_tua';
		$data['List_orang_tua'] = $this->Data_orang_tua->List_orang_tua();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_orang_tua';
		$this->load->view('template/default',$data);
		
	}


	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_orang_tua->detail($id);
		$data['halaman'] = 'form/Form_edit_orang_tua';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		$this->Data_orang_tua->edit_orang_tua($this->input->post());
		redirect('Orang_tua_tos');
	}

	public function simpan()
	{
		
		$this->Data_orang_tua->tambah_orang_tua($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/foto_profil/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['file_name']            = "orang_tua" . $id . "." . $ext;
               
                $id = $this->Data_orang_tua->edit_orang_tua(array(
                "id_orang_tua" => $id,
                "foto_orang_tua" => $config['file_name']));

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                }
		redirect('Orang_tua_tos');
		
	}

	public function delete($id)
	{
		$this->Data_orang_tua->delete_orang_tua($id);
		redirect('Orang_tua_tos');
	}
}