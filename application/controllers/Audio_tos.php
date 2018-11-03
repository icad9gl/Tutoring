<?php
/**
* 
*/
class Audio_tos extends CI_Controller
{
	
	
	public function __construct(){
	parent::__construct();
	$this->load->model('Data_audio');
	if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
		
	}

	public function index()
	{
		
		$data['halaman'] = 'View_audio';
		$data['List_audio'] = $this->Data_audio->List_audio();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_audio';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_audio->detail($id);
		$data['halaman'] = 'form/Form_edit_audio';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_audio->edit_audio($this->input->post());
		redirect('Audio_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_audio->tambah_audio($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/audio/';
                $config['allowed_types']        = 'mp3';
                $config['max_size']             = 10048;
                $config['file_name']            = "mp3" . $id . "." . $ext;
               
                $this->Data_audio->edit_audio(array(
                "id_audio" => $id,
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
		redirect('Audio_tos');
		
	}

	public function delete($id)
	{
		$this->Data_audio->delete_audio($id);
		redirect('Audio_tos');
	}
}
