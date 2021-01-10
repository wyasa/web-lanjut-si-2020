
<?php


class user extends CI_Controller
{
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_user');
		// if (!$this->session->userdata ('nama_pengguna')){
		// 	redirect ('login/index');

		// }
	}

	public function view_index(){
		$this-> load ->view('template/header');
		$this->load->view('users/v_user.php');
	}

	public function index () {
		$data['user']= $this-> m_user ->getAll();
		$this->load->view('template/header');
		$this->load->view('users/v_index',$data);
	}



	public function conf(){
		$this->load->view('users/conf') ;

	}


	public function login () {
		$this->load->view('v_login.php');
	}


	public function proses_tambah(){
		$id= $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	
		$hak_akses = $this->input->post('hak_akses');

		$data_input = [
			'id'=> $id,
			'username'=> $username,
			'password' => $password,
			'hak_akses' => $hak_akses,
			
		];


		$simpan = $this-> m_user->m_Add($data_input);
		redirect('user/conf');
	}

	public function hapus ($input_id)
		{
			// echo $input_nim;
			$this-> m_user-> delete($input_id);
			redirect('user/index');
		}

		
	public function edit ($input_id) 
	{
		$data ['data_id'] = $this -> m_user ->getWhere($input_id);	
		$this-> load->view ('template/header');
			return $this-> load-> view('users/v_edit',$data);
			
	}

	
	public function simpan_edit (){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama_lengkap = $this->input->post('nama_lengkap');
		$hak_akses = $this->input->post('hak_akses');
 
	$data = array(
			'id'=> $id,
			'username'=> $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'hak_akses' => $hak_akses,
			
	);
 
	$where = array(
		'id' => $id
	);
 
	$this-> m_user->update_data($where,$data,'user');
	redirect('user/index');
		
	}


	}
	

	// public function index ($nim=0,$jur=0)
	// {
	// 	$data ['nama']= 'Gede Wiyana yasa';
	// 	$data ['alamat']= 'gedur';
	// 	$data ['nim']= $nim;
	// 	$data ['jurusan']=$jur;

	// 	$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();


	// 	$this->load->view('mahasiswa/V_index',$data);
	// }

	// public function jurusan ()
	// {
	// 	 echo 'D3 Sistem Informasi gimana  ';
	// }

?>