<?php

/**
 * 
 */
class mahasiswa extends Ci_Controller
{
	
	public function index ($jur=0, $nim=0)
	{
		$data ['nama']= 'Gede Wiyana yasa';
		$data ['alamat']= 'gedur';
		$data ['nim']= $nim;
		$data ['jurusan']=$jur;


		

		$this->load->view('mahasiswa/V_index',$data);
	}

	public function jurusan ()
	{
		 echo 'D3 Sistem Informasi gimana  ';
	}
}