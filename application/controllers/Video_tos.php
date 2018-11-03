<?php
/**
* 
*/
class Video_tos extends CI_Controller
{
	
	
	public function __construct(){
	parent::__construct();
	$this->load->model('Data_video');
	if($_SESSION['email']==""){
			redirect(base_url('index.php/login_tos'));
		}
		
	}

	public function index()
	{
		
		$data['halaman'] = 'View_video';
		$data['List_video'] = $this->Data_video->List_video();
		$this->load->view('template/default',$data);
	}

	public function add_form()
	{
		
		$data['halaman'] = 'form/Form_video';
		$this->load->view('template/default',$data);
		
	}

	public function edit_form($id)
	{
		$data['data_edit']= $this->Data_video->detail($id);
		$data['halaman'] = 'form/Form_edit_video';
		$this->load->view('template/default',$data);
		
	}

	public function edit()
	{
		
		
		$this->Data_video->edit_video($this->input->post());
		redirect('Video_tos');
		
	}

	public function simpan()
	{
		
		$this->Data_video->tambah_video($this->input->post());
		$id = $this->db->insert_id();
	     
	     $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
	     
		        $config['upload_path']          = UPLOAD.'/video/';
                $config['allowed_types']        = 'mp4';
                $config['max_size']             = 70048;
                $config['file_name']            = "vid" . $id . "." . $ext;
               
                $this->Data_video->edit_video(array(
                "id_video" => $id,
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
		redirect('Video_tos');
		
	}

	public function delete($id)
	{
		$this->Data_video->delete_video($id);
		redirect('Video_tos');
	}
}
