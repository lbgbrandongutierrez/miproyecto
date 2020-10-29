<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipotienda_model extends CI_Model {

	public function listartipotienda()//getall
	{
		$this->db->select('*');
		$this->db->from('tipotienda');
		
		return $this->db->get();
	}

	public function agregartipotienda($data)//insert
	{ 
		$this->db->insert('tipotienda',$data);
	}
	

	public function recuperartipotienda($id)//getuser
	{
		$this->db->select('*');
		$this->db->from('tipotienda');
		$this->db->where('idtipotienda',$id);
		return $this->db->get();
	}


	public function modificartipotienda($id,$data)//update
	{
		$this->db->where('idtipotienda',$id);
		return $this->db->update('tipotienda',$data);
	}

	public function eliminartipotienda($id)//delete
	{
		$this->db->where('idtipotienda',$id);
		$this->db->delete('tipotienda');
	}
}
