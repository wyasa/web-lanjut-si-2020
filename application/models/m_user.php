<?php

class m_user extends CI_Model
{

    private $table ='user';
    
    public function getAll()
    {
        //select from table
        return $this->db->get($this->table)->result();
    }



    public function cek_login ($input_username,$input_password)
    {
        $this->db->where('username',$input_username);
        $this->db->where('password',$input_password);
        return $this->db->get($this->table);

    }

    public function m_Add( $data_input ){
        //insert into value
        $this->db->insert($this->table, $data_input);
  
    }



}





?>