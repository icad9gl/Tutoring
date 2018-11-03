<?php
/**
* 
*/
class Data_matpel extends CI_Model
{	
	
	public function List_matpel()
	{
		$query = $this->db->get('matapelajaran');
		return $query->result();
	}

	public function tambah_matpel($datatoinput)
	{
		$this->db->insert("matapelajaran",$datatoinput);
	}

	public function edit_matpel($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_matapelajaran'=> $datatoinputedit['id_matapelajaran']))
		->update("matapelajaran");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('matapelajaran',array('id_matapelajaran'=> $id));
		return $query->row();
	}

	public function delete_matpel($id)
	{
		$this->db->delete('matapelajaran',array('id_matapelajaran' => $id ));
	}
}