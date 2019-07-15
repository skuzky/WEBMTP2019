<?php
/**
* 
*/
class Moddosen extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insert($data){
		$this->db->insert('dosen', $data);
		if($this->db->affected_rows()=='1'){
			return TRUE;
		}
		return FALSE;
	}

	function getdata(){
		$data=array();
		$q = $this->db->get('dosen');
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
		$this->db->where('id_dosen',$idmk);
		$q = $this->db->get('dosen');
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
		$this->db->like('jabatan_akademik',$mk);
		$q = $this->db->get('dosen');
		if ($q->num_rows()>0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$q->free_result();
		return $data;
	}

	//SELECT dosen.id_dosen, dosen.nama_dosen, matakuliah.nama_matkul, matakuliah_has_dosen.kelas
	//FROM dosen, matakuliah_has_dosen, matakuliah 
	//WHERE dosen.id_dosen = matakuliah_has_dosen.ds_id_dosen AND matakuliah.id_matkul = matakuliah_has_dosen.mk_id_matkul;

	function lihatsemua(){
		$data=array();
		$this->db->select('dosen.id_dosen, dosen.nama_dosen, matakuliah.nama_matkul, matakuliah_has_dosen.kelas');
		$this->db->from('dosen, matakuliah_has_dosen, matakuliah ');
		$this->db->where('dosen.id_dosen = matakuliah_has_dosen.ds_id_dosen AND matakuliah.id_matkul = matakuliah_has_dosen.mk_id_matkul');
		$query = $this->db->get(); 
    		if($query->num_rows() != 0)
    		{
       			foreach ($query->result_array() as $row) {
					$data[] = $row;
				}
    		}
    		$query->free_result();
    		return $data;
  
	}
	

}
?>