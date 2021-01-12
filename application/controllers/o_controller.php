<?php

class i_controller extends CI_Controller
{
    public function __construct(){
		parent:: __construct();

		$this-> load-> model('m_input');
		if (!$this->session->userdata ('username')){
			redirect ('login/index');

		}
	}
	public function index () {
		$data['pembelian']= $this-> m_input->getAll();
		$this->load->view('toko/header');
		$this->load->view('input/i_index',$data);
	}

	public function tambah(){
		$this->load->view('toko/header');
		$this->load->view('input/i_tambah');
	}

	public function proses_tambah(){
		$kd_pembelian = $this->input->post('kd_pembelian');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		$tgl = $this->input->post('tgl');
		

		$data_input = [
			'kd_pembelian'=> $kd_pembelian,
			'id'=> $id,
			'nama'=> $nama,
			'merk'=> $merk,
			'kategori'=> $kategori,
			'jumlah'=> $jumlah,
			'tgl'=> $tgl,
			
			
		];


		$simpan = $this-> m_input->m_Add($data_input);
		redirect('i_controller/index');
	}

	public function hapus($input_id)
		{
			// echo $input_nim;
			$this-> m_input-> delete($input_id);
			redirect('i_controller/index');
		}

	public function edit ($input_id)
		{
			$data['data_id']= $this-> m_input->getWhere($input_id);
			$this->load->view('toko/header');
			return $this-> load-> view('input/i_edit',$data);
	}

		


	public function simpan_edit ()
	{	$kd_pembelian = $this->input->post('kd_pembelian');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		$tgl = $this->input->post('tgl');

		

	$data = array(

		'kd_pembelian'=> $kd_pembelian,
			'id'=> $id,
			'nama'=> $nama,
			'merk'=> $merk,
			'kategori'=> $kategori,
			'jumlah'=> $jumlah,
			'tgl'=> $tgl,
	);
 
	$where = array(
		'kd_pembelian' => $kd_pembelian
	);
 
	$this-> m_input-> update_data($where,$data,'pembelian');
	redirect('i_controller/index');
		
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


}
?>