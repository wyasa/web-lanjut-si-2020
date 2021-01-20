<?php

class m_user extends CI_Model
{

    private $table ='user';
    
    public function getAll()
    {
        //select from table
        return $this-> db->get($this-> table)->result();
    }



    public function cek_login ($input_username, $input_password)
    {
        $this-> db->where('username',$input_username);
        $this-> db->where('password',$input_password);
    
        return $this-> db->get($this->table);

    }

    public function m_Add( $data_input ){
        //insert into value
        $this-> db->insert($this-> table, $data_input);
  
    }

    public function delete ($input_id)
    {
        $this-> db->delete ($this-> table, ['id'=>$input_id]);
    }

    public function getWhere ($input_id)
    {
        return $this-> db->get_where ($this-> table, ['id'=> $input_id])->row_object();

    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	




}





?>