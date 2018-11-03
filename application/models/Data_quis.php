<?php
/**
* 
*/
class Data_quis extends CI_Model
{
	
	public function List_quis()
	{
		$query = $this->db->get('quis');
		return $query->result();
	}

	public function quis_by_pokjar($id){
		return $this->db->get_where("quis", array("id_pokjar" => $id))->result();
	}

	public function detail($id){
		return $this->db->get_where("quis", array("id_quis" => $id))->row();
	}

	public function hapus_soal($id, $id_quis)
	{
		$this->db->delete("quis_detail", array("id_list_quis" => $id, "id_quis" => $id_quis));
	}

	public function tambah_quis($datatoinput)
	{
		$this->db->insert("quis",$datatoinput);
	}
	
	public function simpan_soal($datatoinput)
	{
		$this->db->insert("quis_detail",$datatoinput);
	}

	public function delete_quis($id)
	{
		$this->db->delete('quis',array('id_quis' => $id ));
	}
}