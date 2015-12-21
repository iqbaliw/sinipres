<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_login extends CI_Model{
	function cek_user($user, $pass){
		$this->db->select('*');
		return $this->db->get_where('tbl_m_user', 
			array(
				'user_name' => $user,
				'user_password' => $pass
		));
	}
}