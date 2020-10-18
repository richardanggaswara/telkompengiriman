<?php if(!defined('BASEPATH'))exit('No direct script access allowed');
class KolomPekerjaan extends CI_Controller{
	function __construct()
	{
	parent::__construct();
	$this->load->library(array('form_validation', 'table', 'session'));
	$this->load->helper(array('form','url'));
	$this->load->model('Kolom');
	}
	function index()
	{
		$data_kolom_input= array();
		$this->form_validation->set_rules('namabarang', '', '');
		$this->form_validation->set_rules('noijinperusahaan', '', '');
		$this->form_validation->set_rules('noijinjasa', '', '');
		$this->form_validation->set_rules('idprovkirim', '', '');
		$this->form_validation->set_rules('idprovdari', '', '');
		$this->form_validation->set_rules('pegawaijasapengirim', '', '');
		$this->form_validation->set_rules('pegawaitelkompenerima', '', '');
		$this->form_validation->set_rules('date', '', '');
		$this->form_validation->set_rules('alamatkirim', '', '');
		$this->form_validation->set_rules('statuskirim', '', '');
			if ($this->form_validation->run())
			{
				$data = array(
					'namabarang'=>$this->input->post('namabarang'),
					'noijinperusahaan'=>$this->input->post('noijinperusahaan'),
					'noijinjasa'=>$this->input->post('noijinjasa'),
					'idprovkirim'=>$this->input->post('idprovkirim'),
					'idprovdari'=>$this->input->post('idprovdari'),
					'pegawaijasapengirim'=>$this->input->post('pegawaijasapengirim'),
					'pegawaitelkompenerima'=>$this->input->post('pegawaitelkompenerima'),
					'alamatkirim'=>$this->input->post('alamatkirim'),
				);
				date_default_timezone_set('Asia/Jakarta');
				$date = date('Y/m/d');
				$data['date'] = $date;
				$statuskirim = 'terkirim';
				$data['statuskirim'] = $statuskirim;
				$result = $this->Kolom->add($data);
				if ($result) redirect(site_url('KolomPekerjaan'), 'refresh');
			}
			
			$this->load->view('KolomPekerjaan', $data_kolom_input);
	}

	 function get_barang(){
		$this->load->model('Kolom');
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Kolom->get_namabarang($q);
		}
	  }
	 function get_pegawaijasa(){
		$this->load->model('Kolom');
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Kolom->get_namapegawaijas($q);
		}
	  }
	  function get_pegawaitelkom(){
		$this->load->model('Kolom');
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Kolom->get_namapegawaitel($q);
		}
	  }
}
?>