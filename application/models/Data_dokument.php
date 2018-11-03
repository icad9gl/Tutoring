<?php
/**
* 
*/
class Data_dokument extends CI_Model
{	
	
	public function List_dokument()
	{
		$query = $this->db->get('v_dokument');
		return $query->result();
	}

	public function tambah_dokument($datatoinput)
	{
		$this->db->insert("dokument",$datatoinput);
	}

	public function edit_dokument($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_dokument'=> $datatoinputedit['id_dokument']))
		->update("dokument");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('dokument',array('id_dokument'=> $id));
		return $query->row();
	}

	public function delete_dokument($id)
	{
		$this->db->delete('dokument',array('dokument' => $id ));
	}
}