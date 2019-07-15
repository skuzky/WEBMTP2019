<?php
/**
* 
*/
class Matakuliah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('modmatkul');
	}

	public function index(){
		$datamk = array(
					array(
						'id_matkul' => '1810296',
						'nama_matkul' => 'APPL',
						'semester' => 'VI'	
					),
					array(
						'id_matkul' => '1810394',
						'nama_matkul' => 'PRPL',
						'semester' => 'IV'	
					),
					array(
						'id_matkul' => '1810721',
						'nama_matkul' => 'DDP',
						'semester' => 'I'	
					),
					array(
						'id_matkul' => '1810631',
						'nama_matkul' => 'Logika Informatika',
						'semester' => 'I'	
					)
				);

	foreach ($datamk as $key => $value) {
		$qmk = $this->modmatkul->insert($value);
		if($qmk == TRUE){
			echo 'Matakuliah'.$value['nama_matkul'].'berhasil ditambahkan<br>';
		}else{
			echo 'Matakuliah'.$value['nama_matkul'].'Gagal ditambahkan<br>';
		}
	}

}

	public function lihatmatakuliah(){
		$data['mk'] = $this->modmatkul->getdata();
		$this->load->view('mk_layout', $data);
	}

	public function lihatmatakuliah2($id_matkul){
		$data['mk'] = $this->modmatkul->getmkid($id_matkul);
		$this->load->view('mk_layout', $data);
	}

	public function lihatmatakuliah3($id_matkul){
		$data['mk'] = $this->modmatkul->getsemester($id_matkul);
		$this->load->view('mk_layout', $data);
	}

}

?>