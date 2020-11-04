<?php

/**
 * 
 */
class mahasiswa extends Ci_Controller
{
	
	public function index ($nim=0,$jur=0)
	{
		$data ['nama']= 'Gede Wiyana yasa';
		$data ['alamat']= 'gedur';
		$data ['nim']= $nim;
		$data ['jurusan']=$jur;

		$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();


		$this->load->view('mahasiswa/V_index',$data);
	}

	public function jurusan ()
	{
		 echo 'D3 Sistem Informasi gimana  ';
	}
}