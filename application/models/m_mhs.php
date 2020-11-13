<?php

class m_mhs extends CI_Model
{
    private $table = 'mahasiswa';

    public function getAll()
    {
        //select from table
        return $this->db->get($this->table)->result();
    }

    
    public function m_Add( $data_input ){
        //insert into value
        $this->db->insert($this->table, $data_input);
  
    }
}

?>