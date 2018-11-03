<?php
/**
* 
*/
class Data_admin extends CI_Model
{	
	
	public function List_admin()
	{
		$query = $this->db->get('admin');
		return $query->result();
	}

	public function tambah_admin($datatoinput)
	{
		
		$this->db->insert("admin",$datatoinput);				

	}	

	public function edit_admin($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_admin'=> $datatoinputedit['id_admin']))
		->update("admin");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('admin',array('id_admin'=> $id));
		return $query->row();
	}

	public function delete_admin($id)
	{
		$this->db->delete('admin',array('id_admin' => $id ));
	}
}