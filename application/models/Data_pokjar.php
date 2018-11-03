<?php
/**
* 
*/
class Data_pokjar extends CI_Model
{
	
	public function List_pokjar()
	{
		$query = $this->db->get('pokjar');
		return $query->result();
	}
	public function tambah_pokjar($datatoinput)
	{
		$this->db->insert("pokjar",$datatoinput);
	}

	public function tambah_anggota_pokjar($datatoinput)
	{
		$this->db->insert("anggota_pokjar",$datatoinput);
	}

	public function tambah_mapel_pokjar($datatoinput)
	{
		$this->db->insert("mapel_pokjar",$datatoinput);
	}

	public function edit_pokjar($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_pokjar'=> $datatoinputedit['id_pokjar']))
		->update("pokjar");
	}

	public function get_id_mapel($id){
		$query=$this->db->get_where('v_pokjar_mapel',array('id_detail'=> $id));
		return $query->row()->id_matapelajaran;
	}

	public function detail($id)
	{
		$query=$this->db->get_where('pokjar',array('id_pokjar'=> $id));
		return $query->row();
	}

	public function delete_pokjar($id)
	{
		$this->db->delete('pokjar',array('id_pokjar' => $id ));
	}

	public function lihat_anggota($id)
	{
		$query = $this->db->get_where('v_anggota_pokjar',array('id_pokjar' => $id ));
		return $query->result();
	}
	public function lihat_mapel($id)
	{
		$query = $this->db->get_where('v_pokjar_mapel',array('id_pokjar' => $id ));
		return $query->result();
	}	
}