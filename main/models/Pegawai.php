<?php
Class pegawai extends CI_Model
{
	function __construct()
    {
		parent::__construct();
		$this->load->database();
		
	}
	function login($nikkepegawaian, $passwordpegawai)
	{
		$this->db->select('idpeg,nikkepegawaian,passwordpegawai');
		$this->db->from('pegawaitelkom');
		$this->db->where('nikkepegawaian',$nikkepegawaian);
		$this->db->where('passwordpegawai',MD5($passwordpegawai));
		$this->db->limit(1);
		$query=$this->db->get();
			if($query->num_rows()==1)
				{
					return $query->result();
				}
				else{
					return false;
				}
	}
	public function add($data)
	{		
		$result = $this->db->insert('pegawaitelkom', $data); 
		return $result;
	}
}
?>