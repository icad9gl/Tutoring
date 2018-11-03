<?php
/**
* 
*/
class Data_pengajar extends CI_Model
{
	
	public function List_pengajar()
	{
		$query = $this->db->get('pengajar');
		return $query->result();
	}

	public function tambah_pengajar($datatoinput)
	{
		$this->db->insert("pengajar",$datatoinput);
	}

	public function edit_pengajar($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_pengajar'=> $datatoinputedit['id_pengajar']))
		->update("pengajar");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('pengajar',array('id_pengajar'=> $id));
		return $query->row();
	}

	public function delete_pengajar($id)
	{
		$this->db->delete('pengajar',array('id_pengajar' => $id ));
	}
}