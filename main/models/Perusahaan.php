<?php
Class perusahaan extends CI_Model
{
	function __construct()
    {
		parent::__construct();
		$this->load->database();
		
	}
	public function add($data)
	{		
		$result = $this->db->insert('perusahaanpembuat', $data); 
		return $result;
	}
}
?>