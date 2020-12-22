<?php

class m_user extends CI_Model
{

    private $table ='user';



    public function cek_login ($input_username,$input_password)
    {
        $this->db->where('username',$input_username);
        $this->db->where('password',$input_password);
        return $this->db->get($this->table);

    }




}





?>