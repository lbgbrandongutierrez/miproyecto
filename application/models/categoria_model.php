<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria_model extends CI_Model {

	public function listarcategoria()//getall
	{
		$this->db->select('*');
		$this->db->from('categoria');
		
		return $this->db->get();
	}

	public function agregarcategoria($data)//insert
	{ 
		$this->db->insert('categoria',$data);
	}
	

	public function recuperarcategoria($id)//getuser
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('idcategoria',$id);
		return $this->db->get();
	}


	public function modificarcategoria($id,$data)//update
	{
		$this->db->where('idcategoria',$id);
		return $this->db->update('categoria',$data);
	}

	public function eliminarcategoria($id)//delete
	{
		$this->db->where('idcategoria',$id);
		$this->db->delete('categoria');
	}
}
