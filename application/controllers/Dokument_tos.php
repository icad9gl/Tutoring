<?php
/**
* 
*/
class Dokument_tos extends CI_Controller
{
	
	
	public function __construct(){
	parent::__construct();
	$this->load->model('Data_dokument');
	if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
		
	}

	public function index()
	{
		
		$data['halaman'] = 'View_dokument';
		$data['List_dokument'] = $this->Data_dokument->List_dokument();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_dokument';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_dokument->detail($id);
		$data['halaman'] = 'form/Form_edit_dokument';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_dokument->edit_dokument($this->input->post());
		redirect('Dokument_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_dokument->tambah_dokument($this->input->post());
		$id = $this->db->insert_id();
		$ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/dokument/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 5048;
                $config['file_name']            = "pdf" . $id . "." . $ext;
               
                $id = $this->Data_dokument->edit_dokument(array(
                "id_dokument" => $id,
                "file" => $config['file_name']));

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
		redirect('Dokument_tos');
		
	}

	public function delete_dokument($id)
	{
		$this->Data_dokument->delete_dokument($id);
		redirect('Dokument_tos');
	}
}
