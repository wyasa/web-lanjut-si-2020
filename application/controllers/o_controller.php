<?php

class o_controller extends CI_Controller
{
    public function __construct(){
		parent:: __construct();

		$this-> load-> model('m_output');
		if (!$this->session->userdata ('username')){
			redirect ('login/index');

		}
	}
	public function index () {
		$data['penjualan']= $this-> m_output->getAll();
		$this->load->view('toko/header');
		$this->load->view('output/o_index',$data);
	}

	public function tambah(){
		$this->load->view('toko/header');
		$this->load->view('output/o_tambah');
	}

	public function proses_tambah(){
		$kd_penjualan = $this->input->post('kd_penjualan');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		$tgl = $this->input->post('tgl');
		

		$data_input = [
			'kd_penjualan'=> $kd_penjualan,
			'id'=> $id,
			'nama'=> $nama,
			'merk'=> $merk,
			'kategori'=> $kategori,
			'jumlah'=> $jumlah,
			'tgl'=> $tgl,
			
			
		];


		$simpan = $this-> m_output->m_Add($data_input);
		redirect('o_controller/index');
	}

	public function hapus($input_id)
		{
			// echo $input_nim;
			$this-> m_output-> delete($input_id);
			redirect('o_controller/index');
		}

	public function edit ($input_id)
		{
			$data['data_id']= $this-> m_output->getWhere($input_id);
			$this->load->view('toko/header');
			return $this-> load-> view('output/o_edit',$data);
	}

		


	public function simpan_edit ()
	{	$kd_penjualan = $this->input->post('kd_penjualan');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$jumlah = $this->input->post('jumlah');
		$tgl = $this->input->post('tgl');

		

	$data = array(

		'kd_penjualan'=> $kd_penjualan,
			'id'=> $id,
			'nama'=> $nama,
			'merk'=> $merk,
			'kategori'=> $kategori,
			'jumlah'=> $jumlah,
			'tgl'=> $tgl,
	);
 
	$where = array(
		'kd_penjualan' => $kd_penjualan
	);
 
	$this-> m_output-> update_data($where,$data,'penjualan');
	redirect('o_controller/index');
		
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



}
?>