<?php
/**
* 
*/
class Laporan_tos extends CI_Controller
{
	public function laporan()
	{
		$this->load->model('Data_laporan');
		$data['halaman'] = 'View_laporan';
		$data['List_laporan'] = $this->Data_laporan->List_laporan();
		$this->load->view('template/default',$data);
	}
}