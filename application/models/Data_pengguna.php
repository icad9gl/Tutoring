<?php
/**
* 
*/
class Data_pengguna extends CI_Model
{
	
	public function List_pengguna()
	{
		$query = $this->db->get('user');
		return $query->result();
	}
}