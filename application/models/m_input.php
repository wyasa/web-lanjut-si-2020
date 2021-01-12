<?php

class m_input extends CI_Model
{
    private $table = 'pembelian';

    public function getAll()
    {
        //select from table
        return $this-> db->get($this-> table)->result();
    }

    
    public function m_Add( $input ){
        //insert into value
        $this-> db->insert($this-> table, $input);
  
    }
    public function delete ($input_id)
    {
        $this-> db->delete($this-> table, ['kd_pembelian' => $input_id]);
    }
    public function getWhere ($input_id)
    {
        return $this-> db->get_where($this-> table, ['kd_pembelian'=>$input_id])->row_object();

    }
    function update_data($where,$data,$table){
		$this-> db->where($where);
		$this-> db->update($table,$data);
	}	

}

?>