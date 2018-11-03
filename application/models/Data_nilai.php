<?php
/**
* 
*/
class Data_nilai extends CI_Model
{
	
	public function List_nilai()
	{
		$query = $this->db->get('nilai');
		return $query->result();
	}
	public function tambah_nilai($datatoinput)
	{
		$this->db->insert("nilai",$datatoinput);
	}

	public function edit_nilai($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_nilai'=> $datatoinputedit['id_nilai']))
		->update("nilai");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('nilai',array('id_nilai'=> $id));
		return $query->row();
	}

	public function delete_nilai($id)
	{
		$this->db->delete('nilai',array('id_nilai' => $id ));
	}
}