
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
		$this->load->view('user/v_user.php');
	}

	public function index () {
		$data['user']= $this-> AModel->getAll();
		$this->load->view('template/header');
		$this->load->view('user/v_index',$data);
	}



	public function proses_tambah(){
		$id= $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$hak_akses = $this->input->post('hak_akses');

		$data_input = [
			'id'=> $id,
			'username'=> $username,
			'password' => $password,
			'nama_lengkap' => $nama_lengkap,
			'hak_akses' => $hak_akses,
			
		];


		

		$simpan = $this-> m_user->m_Add($data_input);
		redirect('user/v_user');
	}

	public function hapus($input_nim)
		{
			// echo $input_nim;
			$this->AModel->delete($input_nim);
			redirect('AController/index');
		}

	public function edit ($input_nim)
		{
			$data['data_nim']= $this->AModel->getWhere($input_nim);
			$this->load->view('template/header');
			return $this->load->view('mahasiswa/v_edit',$data);
	}

	


	public function simpan_edit ()
	{	$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
 
	$data = array(
		'nim' => $nim,
		'nama' => $nama,
		'alamat' => $alamat
	);
 
	$where = array(
		'nim' => $nim
	);
 
	$this->AModel->update_data($where,$data,'mahasiswa');
	redirect('AController/index');
		
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