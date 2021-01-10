<?php

class m_stok extends CI_Model
{
    private $table = 'stok';

    public function getAll()
    {
        //select from table
        return $this-> db->get($this-> table)->result();
    }

    
    public function m_Add( $data_input ){
        //insert into value
        $this-> db->insert($this-> table, $data_input);
  
    }
    public function delete ($input_id)
    {
        $this-> db->delete($this-> table, ['id' => $input_id]);
    }
    public function getWhere ($input_id)
    {
        return $this-> db->get_where($this-> table, ['id'=> $input_id])->row_object();

    }
    function update_data($where,$data,$table){
		$this-> db->where($where);
		$this-> db->update($table,$data);
	}	

}

?>