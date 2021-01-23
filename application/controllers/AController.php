
<?php


class AController extends CI_Controller

{



	public function __construct(){
		parent:: __construct();

		$this->load->model('m_stok');
		if (!$this->session->userdata ('username')){
			redirect ('login/index');

		}
	}



	public function index () {
		$data['stok']= $this-> m_stok->getAll();
		$this->load->view('toko/header');
		$this->load->view('toko/index',$data);
	}

	public function tambah(){
		$this->load->view('toko/v_tambah');
	}

	public function proses_tambah(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		

		$data_input = [
			'id'=> $id,
			'nama'=> $nama,
			'merk'=> $merk,
			'kategori'=> $kategori,
			'jumlah'=> $jumlah,
			
			
		];


		

		$simpan = $this-> m_stik->m_Add($data_input);
		redirect('AController/index');
	}

	public function hapus($input_id)
		{
			// echo $input_nim;
			$this-> m_stok-> delete($input_id);
			redirect('AController/index');
		}

	public function edit ($input_id )
		{
			$data['data_id']= $this-> m_stok->getWhere($input_id);
			$this->load->view('toko/header');
			return $this-> load-> view('toko/edit',$data);
	}

	
	public function coba(){

		$this->load->view('toko/index');
	}


	


	public function simpan_edit ()
	{	$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		

	$data = array(
		'id' => $id,
		'nama' => $nama,
		'merk' => $merk,
		'kategori' => $kategori,
		'jumlah' => $jumlah,
	);
 
	$where = array(
		'id' => $id
	);
 
	$this-> m_stok-> update_data($where,$data,'stok');
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