<?php

class AModel extends CI_Model
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
    public function delete ($input_nim)
    {
        $this->db->delete($this->table, ['nim' => $input_nim]);
    }
    public function getWhere ($input_nim)
    {
        return $this->db->get_where($this->table, ['nim'=> $input_nim])->row_object();

    }

}

?>