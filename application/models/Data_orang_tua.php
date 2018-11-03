<?php
/**
* 
*/
class Data_orang_tua extends CI_Model
{
	
	public function List_orang_tua()
	{
		$query = $this->db->get('orang_tua');
		return $query->result();
	}

	public function tambah_orang_tua($datatoinput)
	{
		$this->db->insert("orang_tua",$datatoinput);
	}

	public function edit_orang_tua($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_orang_tua'=> $datatoinputedit['id_orang_tua']))
		->update("orang_tua");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('orang_tua',array('id_orang_tua'=> $id));
		return $query->row();
	}

	public function delete_orang_tua($id)
	{
		$this->db->delete('orang_tua',array('id_orang_tua' => $id ));
	}
}