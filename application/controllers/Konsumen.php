<?php 
/**
* 
*/
class Konsumen extends CI_Controller
{
	
	function __construct(){
		parent:: __construct();
		$this->load->library(array('table','form_validation'));
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('modkonsumen');
		  $this->load->helper('date');
	}

	public function index(){
		$data['transaksi']=$this->modkonsumen->getdata();
		$this->load->view('Konsumen_layout_list',$data);
	}

	private function init_valid(){
		$this->form_validation->set_rules('namabarang','Nama Barang','trim|required|alpha');
		$this->form_validation->set_rules('hargasatuan','Harga Satuan','trim|required|numeric|is_natural_no_zero');
		$this->form_validation->set_rules('jumlah','jumlah','trim|required|numeric|is_natural_no_zero');

	}

	public function tambahbeli(){
		$this->init_valid();
		if($this->form_validation->run() == FALSE) {
			$this->load->view('Konsumen_layout_add');
		}
		else{
			$databeli = array(
								'namabarang'=>set_value('namabarang'),
								'hargasatuan'=>set_value('hargasatuan'),
								'jumlah'=>set_value('jumlah'),
								'tanggal'=>date('Y-m-d')
								);
			$quser = $this->modkonsumen->insert($databeli);
			if ($quser==TRUE){
				redirect('konsumen');
			}else {
				echo "Gagal simpan";
				# code...
			}
		}
	}
}

 ?>