<?php
/**
* 
*/
class Data_video extends CI_Model
{	
	
	public function List_video()
	{
		$query = $this->db->get('v_video');
		return $query->result();
	}

	public function tambah_video($datatoinput)
	{
		$this->db->insert("video",$datatoinput);
	}

	public function edit_video($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_video'=> $datatoinputedit['id_video']))
		->update("video");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('video',array('id_video'=> $id));
		return $query->row();
	}

	public function delete_video($id)
	{
		$this->db->delete('video',array('id_video' => $id ));
	}
}