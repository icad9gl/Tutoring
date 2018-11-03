<?php
/**
* 
*/
class Data_mapel_pengajar extends CI_Model
{	
	
	public function List_mapel_pengajar()
	{
		$query = $this->db->get('v_mapel_pengajar');
		return $query->result();
	}

	public function tambah_mapel_pengajar($datatoinput)
	{
		$this->db->insert("mapel_pengajar",$datatoinput);
	}

	public function List_mapel_not_in_pokjar($id_pokjar)
	{
		$query = $this->db->from('v_mapel_pengajar')
			->where('id_mapel_pengajar NOT IN (select id_mapel_pengajar from mapel_pokjar where id_pokjar = "' . $id_pokjar . '")')
			->get();
		return $query->result();
	}

	public function edit_mapel_pengajar($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_mapel_pengajar'=> $datatoinputedit['id_mapel_pengajar']))
		->update("mapel_pengajar");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('mapel_pengajar',array('id_mapel_pengajar'=> $id));
		return $query->row();
	}

	public function delete_mapel_pengajar($id)
	{
		$this->db->delete('mapel_pengajar',array('id_mapel_pengajar' => $id ));
	}
}