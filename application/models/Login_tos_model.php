<?php
/**
* 
*/
class Login_tos_model extends CI_Model
{
	
	public function login($email,$password)
	{
		$d = $this->db->from('user')->where(array('email' =>$email , 'password' =>$password ))->get();
		return $d->row();
	}
}