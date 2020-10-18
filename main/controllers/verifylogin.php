<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class VerifyLogin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pegawai','',TRUE);
	}
	function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nikkepegawaian','NIK Pegawai','trim|required|xss_clean');
		$this->form_validation->set_rules('passwordpegawai','Password Pegawai','trim|required|xss_clean|callback_check_database');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('Login');
		}
			else
		{
			redirect('home','refresh');
		}
	}
	function check_database($passwordpegawai)
	{
		$nikkepegawaian=$this->input->post('nikkepegawaian');
		$result=$this->Pegawai->login($nikkepegawaian,$passwordpegawai);
		if($result)
		{
			$sess_array =array();
			foreach($result as $row)
			{
			$sess_array = array('idpeg'=>$row->idpeg,'nikkepegawaian'=>$row->nikkepegawaian);
			$this->session->set_userdata('logged_in',$sess_array);
			}
			return TRUE;
		}
			else
		{
			$this->form_validation->set_message('check_database','Salah memasukkan NIK atau Password');
			return false;
		}
	}
}
?>