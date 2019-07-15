<?php
/**
* 
*/
class Dosen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('moddosen');
	}

	public function index(){
		$datamk = array(
					array(
						'id_dosen' => '60030476',
						'nama_dosen' => 'Ardiansyah, S.T., M. Cs',
						'jabatan_akademik' => 'Lektor / III.C '	
					),
					array(
						'id_dosen' => '60040497',
						'nama_dosen' => 'Dewi Soyusiawaty, S.T., M.T',
						'jabatan_akademik' => 'Asisten Ahli / III.C '
					),
					array(
						'id_dosen' => '60040496',
						'nama_dosen' => 'Murinto, S.Si., M. Kom',
						'jabatan_akademik' => 'Lektor/ III.C '
					),
					array(
						'id_dosen' => '60980174',
						'nama_dosen' => 'Rusydi Umar, S.T., M.T, Ph.D.',
						'jabatan_akademik' => 'Lektor / III.D '
					),
					array(
						'id_dosen' => '60910095',
						'nama_dosen' => 'Drs. Wahyu Pujiyono, M. Kom ',
						'jabatan_akademik' => 'Lektor / III.D '
					),
					array(
						'id_dosen' => '60030475',
						'nama_dosen' => 'Drs. Tedy Setiadi, M.T',
						'jabatan_akademik' => 'Lektor / III.C  '
					)
				);

	foreach ($datads as $key => $value) {
		$dms = $this->moddosen->insert($value);
		if($dms == TRUE){
			echo 'Data Dosen'.$value['nama_dosen'].'berhasil ditambahkan<br>';
		}else{
			echo 'Data Dosen'.$value['nama_dosen'].'Gagal ditambahkan<br>';
		}
	}

}

	public function lihatdosen(){
		$data['ds'] = $this->moddosen->lihatsemua();
		$this->load->view('dosen_layout', $data);
	}


}

?>