<?php
class stock extends CI_Controller
{

    public function __construct(){
        parent:: __construct();
        $this->load->model('m_stok');
    }

	public function index()
	{
		$data['stok']= $this->m_stok->getAll();
		$this->load->view('toko/header2');
		$this->load->view('toko/index',$data);
	}

}

