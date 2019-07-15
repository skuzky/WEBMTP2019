<?php
/**
* 
*/
class Modmatkul extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert($data){
		$this->db->insert('matakuliah', $data);
		if($this->db->affected_rows()=='1'){
			return TRUE;
		}
		return FALSE;
	}

	function getdata(){
		$data=array();
		$q = $this->db->get('matakuliah');
		if($q->num_rows()>0){
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$q->free_result();
		return $data; 
	}

	function getmkid($idmk){
		$data=array();
		$this->db->where('id_matkul',$idmk);
		$q = $this->db->get('matakuliah');
		if ($q->num_rows()>0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$q->free_result();
		return $data;
	}

	function getsemester($mk){
		$data=array();
		$this->db->select('*');
		$this->db->like('semester',$mk);
		$q = $this->db->get('matakuliah');
		if ($q->num_rows()>0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$q->free_result();
		return $data;
	}

}
?>