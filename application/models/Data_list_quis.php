<?php
/**
* 
*/
class Data_list_quis extends CI_Model
{
	
	public function List_quis_db()
	{
		$query = $this->db->get('list_quis');
		return $query->result();
	}

	public function tambah_list_quis($datatoinput)
	{
		$this->db->insert("list_quis",$datatoinput);
	}

	public function edit_list_quis($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_list_quis'=> $datatoinputedit['id_list_quis']))
		->update("list_quis");
	}


	public function quis_by_mapel($mapel){
		$query=$this->db->from("list_quis")
			->where(array('id_matapelajaran'=> $mapel))
			->where('id_list_quis NOT IN (select id_list_quis from quis_detail)')	
			->get();
		return $query->result();	
	}

	public function quis_by_id($mapel){
		$query=$this->db->get_where('v_quis',array('id_quis'=> $mapel));
		return $query->result();	
	}

	public function quis_by_id_order_random($mapel){
		$query=$this->db->from('v_quis')
			->where(array('id_quis'=> $mapel))
			->order_by("id_list_quis", "RANDOM")
			->get();
		return $query->result();	
	}


	public function detail($id)
	{
		$query=$this->db->get_where('list_quis',array('id_list_quis'=> $id));
		return $query->row();
	}

}