<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class InputPegawai extends CI_Controller{
	function __construct()
	{
	parent::__construct();
	$this->load->library(array('form_validation', 'table', 'session'));
	$this->load->helper(array('form','url'));
	$this->load->model('Pegawai');
	}
	function index()
	{
		$data_pegawai_input= array();
		$this->form_validation->set_rules('nikkepegawaian', '', '');
		$this->form_validation->set_rules('namapegawai', '', '');
		$this->form_validation->set_rules('passwordpegawai', '', '');
		$this->form_validation->set_rules('passwordconfirm', '', 'required|matches[passwordpegawai]');
		$this->form_validation->set_rules('alamatpegawai', '', '');
		$this->form_validation->set_rules('telponrumahpeg', '', '');
		$this->form_validation->set_rules('telponhppeg', '', '');
		$this->form_validation->set_rules('statuspeg', '', '');
		$this->form_validation->set_rules('jabatanpeg', '', '');
		$this->form_validation->set_rules('divisipekerjaanpeg', '', '');
		$this->form_validation->set_rules('nodivisi', '', '');
		$this->form_validation->set_rules('emailpegawai', '', '');
			if ($this->form_validation->run())
			{
				$passwordpegawai = $this->input->post('passwordpegawai');
				$data = array(
					'nikkepegawaian'=>$this->input->post('nikkepegawaian'),
					'namapegawai'=>$this->input->post('namapegawai'),
					'passwordpegawai'=>md5($passwordpegawai),
					'alamatpegawai'=>$this->input->post('alamatpegawai'),
					'telponrumahpeg'=>$this->input->post('telponrumahpeg'),
					'telponhppeg'=>$this->input->post('telponhppeg'),
					'statuspeg'=>$this->input->post('statuspeg'),
					'jabatanpeg'=>$this->input->post('jabatanpeg'),
					'divisipekerjaanpeg'=>$this->input->post('divisipekerjaanpeg'),
					'nodivisi'=>$this->input->post('nodivisi'),
					'emailpegawai'=>$this->input->post('emailpegawai'),
				);
				date_default_timezone_set('Asia/Jakarta');
				$date = date('Y/m/d');
				$data['tglpenetapan'] = $date; 
				$result = $this->Pegawai->add($data);
				if ($result) redirect(site_url('InputPegawai'), 'refresh');
			}
			
			$this->load->view('InputPegawai', $data_pegawai_input);
	}	
	
}
?>