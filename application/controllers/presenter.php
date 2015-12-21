<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Presenter extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_nilai');
		$this->load->model('m_presenter');
		if($this->session->userdata('user_role')!='3'){
			echo "
                <script>alert('Maaf, akses tidak diijinkan.')</script>
                <script>window.location='/sinipres/login'</script>
            ";
		}
	}

	function index(){
		$user_nama = $this->session->userdata('user_nama');
		$user_id = $this->session->userdata('user_id');

		$data['nama'] = $user_nama;
		$data['title'] = 'Selamat datang! '.$user_nama;
		$data['nilai'] = $this->m_nilai->ambil_nilai($user_id)->result();
		$data['jumlah_nilai'] = $this->m_nilai->ambil_nilai($user_id);

		$this->load->view('v_presenter', $data);
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}