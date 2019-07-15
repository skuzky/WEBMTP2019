
<?php 



class Modmtp extends CI_Model
{
	function __construct()
	{
		parent:: __construct();

	}
	function insert ($data){
		$this->db->insert('mtp', $data);
		if($this->db->affected_rows() == '1') {
			return TRUE;
		}
		return FALSE;
	}
	function getdata(){
		$data = array();
		$q = $this->db->get('mtp');
		if ($q->num_rows()>0){
			foreach ($q->result_array() as $row) {
				$data[] = $row;
				# code...
			}
		}
		$q->free_result();
		return $data;
	}
}

 ?>