<?php 


class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('modeluser');
	}
	public function index()
	{
			$this->load->view('detail_layout.php');
	}

} 

?>