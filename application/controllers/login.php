<?php

class login extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_login');
    }

    public function proses ()
    {
        $input_username = $this->input->post('txtusername');
        $input_password = md5($this->input->post('txtpassword'));

        $this->load->model('m_user');

        $cek = $this->m_user->cek_login($input_username, $input_password);

            //cek apakah data sesuai
        if ( $cek->num_rows() > 0) {
                $isi = $cek->row_object();
                $data_session = [
                    'nama_pengguna' => $isi->nama_lengkap,
                    'hak_pengguna'=> $isi->hak_akses
                ];

                //masukan data pengguna kedsalam session
                $this->session->set_userdata($data_session);
                redirect ('AController/index');
            }else{
                 $this->session->set_flashdata('pesan', 'Maaf username atau password anda salah');
                 redirect ('login/index');
            }

        }

        public function logout ( )
        {
            $this->session->sess_destroy();
            redirect ('login/index');
        }



    }
