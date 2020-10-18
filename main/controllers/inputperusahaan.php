<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class InputPerusahaan extends CI_Controller{
	function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form'));
	$this->load->library(array('form_validation', 'table', 'session'));
	$this->load->model('Perusahaan');
	}
function index()
	{
		$data_perusahaan_input= array();
		$this->form_validation->set_rules('namaperusahaan', '', '');
		$this->form_validation->set_rules('kodeperusahaan', '', '');
		$this->form_validation->set_rules('emailperusahaan', '', '');
		$this->form_validation->set_rules('sektorindustri', '', '');
		$this->form_validation->set_rules('subsektorindustri', '', '');
		$this->form_validation->set_rules('tanggalberdiri', '', '');
		$this->form_validation->set_rules('alamatperusahaan', '', '');
		$this->form_validation->set_rules('idprov', '', '');
		$this->form_validation->set_rules('teleponperusahaan', '', '');
		$this->form_validation->set_rules('papanperusahaan', '', '');
		$this->form_validation->set_rules('bidangusaha', '', '');
		$this->form_validation->set_rules('npwp', '', '');
		$this->form_validation->set_rules('npkp', '', '');
		$this->form_validation->set_rules('biroperusahaan', '', '');
		$this->form_validation->set_rules('faksimile', '', '');
		$this->form_validation->set_rules('websiteperusahaan', '', '');
			if ($this->form_validation->run())
			{
				$data = array(
					'namaperusahaan'=>$this->input->post('namaperusahaan'),
					'kodeperusahaan'=>$this->input->post('kodeperusahaan'),
					'emailperusahaan'=>$this->input->post('emailperusahaan'),
					'sektorindustri'=>$this->input->post('sektorindustri'),
					'subsektorindustri'=>$this->input->post('subsektorindustri'),
					'tanggalberdiri'=>$this->input->post('tanggalberdiri'),
					'alamatperusahaan'=>$this->input->post('alamatperusahaan'),
					'idprov'=>$this->input->post('idprov'),
					'teleponperusahaan'=>$this->input->post('teleponperusahaan'),
					'papanperusahaan'=>$this->input->post('papanperusahaan'),
					'bidangusaha'=>$this->input->post('bidangusaha'),
					'npwp'=>$this->input->post('npwp'),
					'npkp'=>$this->input->post('npkp'),
					'biroperusahaan'=>$this->input->post('biroperusahaan'),
					'faksimile'=>$this->input->post('faksimile'),
					'websiteperusahaan'=>$this->input->post('websiteperusahaan'),
				);
				$result = $this->Perusahaan->add($data);
				if ($result) redirect(site_url('InputPerusahaan'), 'refresh');
			}
			
			$this->load->view('InputPerusahaan', $data_perusahaan_input);
	}	
}
?>