<?php
/**
* 
*/
class Data_laporan extends CI_Model
{
	
	public function List_laporan()
	{
		$query = $this->db->get('laporan');
		return $query->result();
	}
}