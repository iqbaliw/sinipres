<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Jadi_presenter extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_presenter');
	}

	function index(){
		$data['title'] = 'Jadi Presenter';
		$data['kelas'] = $this->m_presenter->kelas()->result();

		$this->load->view('v_jadi_presenter', $data);
	}

	function register(){
		$nama = $this->input->post('user_nama');
		$user = $this->input->post('user_name');
		$pass = $this->input->post('user_password');
		$kelas = $this->input->post('id_kelas');

		$cek = $this->m_presenter->cek_user($user);
		if($cek->num_rows() > 0){
			$this->session->set_flashdata('pesan', 'Maaf, username sudah terdaftar.');
			redirect('jadi_presenter');
		}else{
			$data = array(
				'user_nama' => $nama,
				'user_name' => $user,
				'user_password' => $pass,
				'user_role' => 3,
				'id_kelas' => $kelas
			);

			$simpan = $this->m_presenter->register($data);
			if(!$simpan){
				echo "<script>alert('Pendaftaran berhasil!')</script>";
				echo "<script>window.location='".base_url()."'</script>";
			}else{
				echo "<script>alert('Maaf, ada kesalahan. Pendaftaran gagal!')</script>";
				echo "<script>window.location='".base_url()."jadi_presenter'</script>";
			}
		}
	}
}