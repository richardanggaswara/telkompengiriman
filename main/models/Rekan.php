<?php
Class rekan extends CI_Model
{
	function __construct()
    {
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		
	}
	public function add($data)
	{		
		$result = $this->db->insert('perusahaanjasa', $data); 
		return $result;
	} 
}
?>