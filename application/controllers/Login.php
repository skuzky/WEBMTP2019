<?php 


class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('modeluser');
		$this->load->library('form_validation','session');
	}
	public function index()
	{
			$this->load->view('login_layout');
	}

	public function checkLogin(){
		$this->form_validation->set_rules('uname','Nim','trim|required|max_length[10]|numeric');
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[5]|max_length[12]|alpha_numeric');
		if($this->form_validation->run() == FALSE){
			$this->load->view('login_layout');
		}
		else
		{
			$q = $this->modeluser->checklogin();
			// $row1 = $q->row_array();
			if($q == TRUE){
				// $data = array('user_login_in' => TRUE);

				// $this->session->set_userdata($data);
				// $this->session->set_userdata('error');
				// echo $this->session->userdata('user_login_in').'<br>';
				// echo "Nim Anda : ".set_value('uname');
				// $this->session->set_userdata(array(
				// 	'nim'=>$row1['username'],
				// 	'level'=>'users')
				// );
				$this->load->view('loading');
			}
			else{
				echo "Anda Gagal login";
			}
		}
	}

	public function logout(){
    $newdata = array(
                'username'  =>'',
                'password' => '',
                // 'logged_in' => FALSE,
               );

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect('halaman_utama','refresh');
}

} 

?>