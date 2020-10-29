<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marca_model extends CI_Model {

	public function listarmarca()//getall
	{
		$this->db->select('*');
		$this->db->from('marca');

		return $this->db->get();
	}

	public function agregarmarca($data)//insert
	{
		$this->db->insert('marca',$data);
	}
	

	public function recuperarmarca($id)//getuser
	{
		$this->db->select('*');
		$this->db->from('marca');
		$this->db->where('idmarca',$id);
		return $this->db->get();
	}


	public function modificarmarca($id,$data)//update
	{
		$this->db->where('idmarca',$id);
		$this->db->update('marca',$data);
	}

	public function eliminarmarca($id)//delete
	{
		$this->db->where('idmarca',$id);
		$this->db->delete('marca');
	}
}