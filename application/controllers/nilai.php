<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Nilai extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_nilai');
		$this->load->model('m_presenter');
		if($this->session->userdata('user_role')!='2'){
			echo "
                <script>alert('Maaf, akses tidak diijinkan.')</script>
                <script>window.location='/sinipres/login'</script>
            ";
		}
	}

	function index(){
		$id_kelas = $this->session->userdata('id_kelas');
		$data['title'] = 'Penilaian';
		$data['presenter'] = $this->m_presenter->presenter($id_kelas)->result();

		$this->load->view('v_nilai', $data);
	}

	function submit_nilai(){
		$user_id = $this->input->post('user_id');
		$nilai1 = $this->input->post('nilai1');
		$nilai2 = $this->input->post('nilai2');
		$nilai3 = $this->input->post('nilai3');
		$nilai4 = $this->input->post('nilai4');
		$total = $nilai1+$nilai2+$nilai3+$nilai4;
		$avg = $total/4;

		$data = array(
			'user_id' => $user_id,
			'nilai1' => $nilai1,
			'nilai2' => $nilai2,
			'nilai3' => $nilai3,
			'nilai4' => $nilai4,
			'total' => $total,
			'avg' => $avg
		);

		$simpan = $this->m_nilai->simpan_nilai($data);
		if(!$simpan){
			$this->session->sess_destroy();
			echo "<script>alert('Terima kasih atas penilaiannya :)')</script>";
			echo "<script>window.location='".base_url()."'</script>";
		}else{
			echo "<script>alert('Maaf, ada kesalahan.')</script>";
			echo "<script>window.history.back()</script>";
		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}