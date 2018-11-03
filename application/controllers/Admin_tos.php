<?php
/**
* 
*/
class Admin_tos extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_admin');
		if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
	}

	public function index()
	{
		
		$data['halaman'] = 'View_admin';
		$data['List_admin'] = $this->Data_admin->List_admin();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_admin';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_admin->detail($id);
		$data['halaman'] = 'form/Form_edit_admin';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		// print_r($this->input->post());
		$this->Data_admin->edit_admin($this->input->post());
		redirect('Admin_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_admin->tambah_admin($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/foto_profil/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['file_name']            = "admin" . $id . "." . $ext;
               
                $id = $this->Data_admin->edit_admin(array(
                "id_admin" => $id,
                "foto_admin" => $config['file_name']));

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
		redirect('Admin_tos');
		
	}

	public function delete($id)
	{
		$this->Data_admin->delete_admin($id);
		redirect('Admin_tos');
	}

}	