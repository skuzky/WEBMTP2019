 <?php 
/**
*
*
*/

class modeluser extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	} 
	function checklogin(){
		$uname = $this->input->post('uname');
		$pass  = $this->input->post('pass');
		// $this->db->where('username', $this->input->post('uname'));
		// $this->db->where('password', $this->input->post('pass'));
		// $this->db->limit(1);
		// $q = $this->db->get('user');
		// if($q->num_rows() > 0){
		// 	// $this->session->set_userdata(array('uname'=>$row['username']));
		// 	return true;
		// }
		// return false;
		$cek = $this->db->query("SELECT * FROM user where username='$uname' AND password='$pass'");
		$row = $cek->row_array();
		if ($cek->num_rows()>=1){ // cek jml record yang ditemukan
		   // Session username diciptakan dan menyimpan data username si user
		   $this->session->set_userdata(array('username'=>$row['username']));
		   // echo "Login Sukses";
		   return true;
		}else{
			return false;
		}

	}
}

 ?>