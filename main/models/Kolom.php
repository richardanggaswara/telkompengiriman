<?php
Class kolom extends CI_Model
{
	function __construct()
    {
		parent::__construct();
		$this->load->database();
		
	}
	public function add($data)
	{		
		$result = $this->db->insert('kirimbarang', $data); 
		return $result;
	}
	function get_namabarang($q){
		$this->db->select('namabarang');
		$this->db->like('namabarang', $q);
		$query = $this->db->get('barang');
		if($query->num_rows > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['namabarang'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
	function get_namapegawaitel($q){
			$this->db->select('namapegawai');
			$this->db->like('namapegawai', $q);
			$query = $this->db->get('pegawaitelkom');
			if($query->num_rows > 0){
		  foreach ($query->result_array() as $row){
			$row_set[] = htmlentities(stripslashes($row['namapegawai'])); //build an array
		  }
		  echo json_encode($row_set); //format the array into json data
		}
	  }
	function get_namapegawaijas($q){
		$this->db->select('namapegawai');
		$this->db->like('namapegawai', $q);
		$query = $this->db->get('pegawaijasa');
		if($query->num_rows > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['namapegawai'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
}
?>