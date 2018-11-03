<?php
/**
* 
*/
class Siswa_tos extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Data_siswa');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		
		$data['halaman'] = 'View_siswa';
		$data['List_siswa'] = $this->Data_siswa->List_siswa();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_siswa';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_siswa->detail($id);
		$data['halaman'] = 'form/Form_edit_siswa';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		$this->Data_siswa->edit_siswa($this->input->post());
		redirect('Siswa_tos');
	}

	public function simpan()
	{
		
		$this->Data_siswa->tambah_siswa($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/foto_profil/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['file_name']            = "siswa" . $id . "." . $ext;
               
                $id = $this->Data_siswa->edit_siswa(array(
                "id_siswa" => $id,
                "foto_siswa" => $config['file_name']));

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
		redirect('Siswa_tos');
		
	}

	public function delete($id)
	{
		$this->Data_siswa->delete_siswa($id);
		redirect('Siswa_tos');
	}

}