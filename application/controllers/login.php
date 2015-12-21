<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$data['title'] = 'Sistem Nilai Presentasi';
		$this->load->view('v_login', $data);
	}

	public function masuk(){
		$user = $this->input->post('user_name');
		$pass = $this->input->post('user_password');
		$cek = $this->m_login->cek_user($user, $pass);

		if($cek->num_rows() == 1){
			foreach($cek->result() as $sess){
				$sess_data['user_id'] = $sess->user_id;
				$sess_data['user_name'] = $sess->user_name;
				$sess_data['user_nama'] = $sess->user_nama;
				$sess_data['user_role'] = $sess->user_role;
				$sess_data['id_kelas'] = $sess->id_kelas;
				$this->session->set_userdata($sess_data);
			}

			if($sess->user_role == '1'){
				redirect('admin');
			}elseif($sess->user_role == '2'){
				redirect('nilai');
			}elseif($sess->user_role == '3'){
				redirect('presenter');
			}
		}else{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password salah. Ulangi kembali.');
			redirect('login');
		}
	}
}