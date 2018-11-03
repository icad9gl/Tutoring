<?php
/**
* 
*/
class Data_siswa extends CI_Model
{
	
	public function List_siswa()
	{
		$query = $this->db->get('siswa');
		return $query->result();
	}

	public function List_siswa_not_in_pokjar()
	{
		$query = $this->db->from('siswa')
			->where('id_siswa NOT IN (select id_siswa from anggota_pokjar)')
			->get();
		return $query->result();
	}

	public function tambah_siswa($datatoinput)
	{
		$this->db->insert("siswa",$datatoinput);
	}

	public function edit_siswa($datatoinputedit)
	{
		$this->db->set($datatoinputedit)
		->where(array('id_siswa'=> $datatoinputedit['id_siswa']))
		->update("siswa");
	}

	public function detail($id)
	{
		$query=$this->db->get_where('siswa',array('id_siswa'=> $id));
		return $query->row();
	}

	public function delete_siswa($id)
	{
		$this->db->delete('siswa',array('id_siswa' => $id ));
	}
}