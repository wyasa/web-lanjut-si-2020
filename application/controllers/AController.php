
<?php


class AController extends CI_Controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->model('AModel');
		if (!$this->session->userdata ('nama_pengguna')){
			redirect ('login/index');

		}
	}

	public function index () {
		$data['mahasiswa']= $this-> AModel->getAll();
		$this->load->view('template/header');
		$this->load->view('mahasiswa/v_index',$data);
	}

	public function tambah(){
		$this->load->view('mahasiswa/v_tambah');
	}

	public function proses_tambah(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		

		$data_input = [
			'nim'=> $nim,
			'nama'=> $nama,
			'alamat' => $alamat,
			
		];


		

		$simpan = $this-> AModel->m_Add($data_input);
		redirect('AController/index');
	}

	public function hapus($input_nim)
		{
			// echo $input_nim;
			$this->AModel->delete($input_nim);
			redirect('AController/index');
		}

	public function edit ($input_nim)
		{
			$data['data_nim']= $this-> AModel ->getWhere($input_nim);
			$this->load->view('template/header');
			return $this->load->view('mahasiswa/v_edit',$data);
	}

	
	public function coba(){

		$this->load->view('users/coba');
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