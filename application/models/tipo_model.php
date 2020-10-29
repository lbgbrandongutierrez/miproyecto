<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo_model extends CI_Model {

	public function listartipo()//getall
	{
		$this->db->select('*');
		$this->db->from('tipo');
		
		return $this->db->get();
	}

	public function agregartipo($data)//insert
	{ 
		$this->db->insert('tipo',$data);
	}
	

	public function recuperartipo($id)//getuser
	{
		$this->db->select('*');
		$this->db->from('tipo');
		$this->db->where('idtipo',$id);
		return $this->db->get();
	}


	public function modificartipo($id,$data)//update
	{
		$this->db->where('idtipo',$id);
		return $this->db->update('tipo',$data);
	}

	public function eliminartipo($id)//delete
	{
		$this->db->where('idtipo',$id);
		$this->db->delete('tipo');
	}
}
