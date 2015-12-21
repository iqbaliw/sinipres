<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_nilai extends CI_Model{
	function simpan_nilai($data){
		$this->db->insert('tbl_t_nilai', $data);
	}

	function ambil_nilai($user_id){
		return $this->db->get_where('tbl_t_nilai', array('user_id' => $user_id));
	}
}