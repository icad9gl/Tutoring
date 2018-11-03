<?php
/**
* 
*/
class Data_materi extends CI_Model
{
	
	public function List_materi()
	{
		$query = $this->db->get('materi');
		return $query->result();
	}
	public function tambah_materi($datatoinput)
	{
		$this->db->insert("materi",$datatoinput);
	}

	public function edit_materi($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_materi'=> $datatoinputedit['id_materi']))
		->update("materi");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('materi',array('id_materi'=> $id));
		return $query->row();
	}

	public function delete_materi($id)
	{
		$this->db->delete('materi',array('id_materi' => $id ));
	}
}
