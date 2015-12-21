<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_presenter extends CI_Model{
	function kelas(){
		return $this->db->get('tbl_m_kelas');
	}

	function cek_user($user){
		return $this->db->get_where('tbl_m_user', array('user_name' => $user));
	}

	function register($data){
		$this->db->insert('tbl_m_user', $data);
	}

	function presenter($id_kelas){
		$this->db->order_by('user_nama', 'ASC');
		return $this->db->get_where('tbl_m_user', array('user_role' => 3, 'id_kelas' => $id_kelas));
	}
}