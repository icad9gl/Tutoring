<?php
/**
* 
*/
class Pengajar_tos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_pengajar');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		
		$data['halaman'] = 'View_pengajar';
		$data['List_pengajar'] = $this->Data_pengajar->List_pengajar();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_pengajar';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_pengajar->detail($id);
		$data['halaman'] = 'form/Form_edit_pengajar';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_pengajar->edit_pengajar($this->input->post());
		redirect('Pengajar_tos');
		
	}

	public function simpan()
	{
		$this->Data_pengajar->tambah_pengajar($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/foto_profil/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['file_name']            = "pengajar" . $id . "." . $ext;
               
                $id = $this->Data_pengajar->edit_pengajar(array(
                "id_pengajar" => $id,
                "foto_pengajar" => $config['file_name']));

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
		redirect('Pengajar_tos');
	}

	public function delete($id)
	{
		$this->Data_pengajar->delete_pengajar($id);
		redirect('Pengajar_tos');
	}

}	