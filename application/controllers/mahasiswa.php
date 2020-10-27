<?php

/**
 * 
 */
class mahasiswa extends Ci_Controller
{
	
	public function index ()
	{
		$data ['nama']= 'Gede Wiyana yasa';
		$data ['alamat']= 'gedur';
		$data ['nim']= '1901050001';

		$this->load->view('mahasiswa/V_index',$data);
	}

	public function jurusan ()
	{
		 echo 'D3 Sistem Informasi gimana  ';
	}
}