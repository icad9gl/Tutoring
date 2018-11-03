<?php
/**
* 
*/
class Data_audio extends CI_Model
{	
	
	public function List_audio()
	{
		$query = $this->db->get('v_audio');
		return $query->result();
	}

	public function tambah_audio($datatoinput)
	{
		$this->db->insert("audio",$datatoinput);
	}

	public function edit_audio($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_audio'=> $datatoinputedit['id_audio']))
		->update("audio");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('audio',array('id_audio'=> $id));
		return $query->row();
	}

	public function delete_audio($id)
	{
		$this->db->delete('audio',array('id_audio' => $id ));
	}
}