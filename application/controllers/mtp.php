<?php 


/**
* 
*/
class Mtp extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library(array('table','form_validation'));
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('modmtp');
	}
	public function index()
	{
		$data['proses']=$this->modmtp->getdata();
		$this->load->view('layout_mtp_list',$data);
	}
	private function init_valid(){
		$this->form_validation->set_rules('jenis_mtp','Jenis MTP');
		$this->form_validation->set_rules('nama_tim','Nama Tim','trim|required');
		$this->form_validation->set_rules('nama_ketua','Nama Ketua','trim|required');
		$this->form_validation->set_rules('kontak_wa','Kontak WA Ketua','trim|required');
		$this->form_validation->set_rules('anggota_1','Anggota 1','trim|required');
		$this->form_validation->set_rules('anggota_2','Anggota 2','trim|required');
		$this->form_validation->set_rules('anggota_3','Anggota 3','trim|required');
		$this->form_validation->set_rules('anggota_4','Anggota 4','trim|required');
		$this->form_validation->set_rules('anggota_5','Anggota 5','trim|required');
		$this->form_validation->set_rules('anggota_6','Anggota 6','trim|required');
		$this->form_validation->set_rules('anggota_7','Anggota 7','trim|required');
		$this->form_validation->set_rules('proyek','Proyek Yang Dikerjakan','trim|required');
		$this->form_validation->set_rules('pembimbing','Pembimbing','trim|required');

	}
	public function tambahdata()
	{
		$this->init_valid();
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout_mtp_add');
		}
		else{
			$datamtp = array(
								'jenis_mtp'=>set_value('jenis_mtp'),
								'nama_tim'=>set_value('nama_tim'),
								'nama_ketua'=>set_value('nama_ketua'),
								'kontak_wa'=>set_value('kontak_wa'),
								'anggota_1'=>set_value('anggota_1'),
								'anggota_2'=>set_value('anggota_2'),
								'anggota_3'=>set_value('anggota_3'),
								'anggota_4'=>set_value('anggota_4'),
								'anggota_5'=>set_value('anggota_5'),
								'anggota_6'=>set_value('anggota_6'),
								'anggota_7'=>set_value('anggota_7'),
								'proyek'=>set_value('proyek'),
								'pembimbing'=>set_value('pembimbing')
								);
			$quser = $this->modmtp->insert($datamtp);
			if ($quser==TRUE){
				redirect('mtp');
			}else {
				echo "Gagal simpan";
				# code...
			}
		}
	}

	public function tampil(){
		$this->load->view('tampil_detail_kelompok.php');
	}

	public function uploadFile(){
		$this->load->view('upload_page.php');
	}

	public function seminar(){
		$this->load->view('form_seminar.php');
	}

		public function saveSeminar(){
		$this->init_valid();
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout_mtp_add');
		}
		else{
			$dataseminar = array(
				'nama_tim'=>set_value('nama_tim'), 
				'hari_tgl' =>set_value('hari_tanggal'),	
				'tempat_ujian'=>set_value('tempat_ujian'),
				'judul_mtp'=>set_value('judul_mtp'),
				'penguji'=>set_value('penguji'),						
				'email'=>set_value('email') );
			$quser = $this->modseminar->insert($datamtp);
			if ($quser==TRUE){
				redirect('mtp');
			}else {
				echo "Gagal simpan";
				}
			}
		}


}

 ?>