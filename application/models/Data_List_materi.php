<?php
/**
* 
*/
class Data_list_materi extends CI_Model
{
	
	public function List_materi_db()
	{
		$query = $this->db->get('list_materi');
		return $query->result();
	}

	public function tambah_list_materi($datatoinput)
	{
		$this->db->insert("list_materi",$datatoinput);
	}

	public function edit_list_materi($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_list_materi'=> $datatoinputedit['id_list_materi']))
		->update("list_materi");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('list_materi',array('id_list_materi'=> $id));
		return $query->row();
	}

}