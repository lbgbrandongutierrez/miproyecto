<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zona_model extends CI_Model {

	public function listarzona()//getall
	{
		$this->db->select('*');
		$this->db->from('zona');
		
		return $this->db->get();
	}

	public function agregarzona($data)//insert
	{ 
		$this->db->insert('zona',$data);
	}
	

	public function recuperarzona($id)//getuser
	{
		$this->db->select('*');
		$this->db->from('zona');
		$this->db->where('idzona',$id);
		return $this->db->get();
	}


	public function modificarzona($id,$data)//update
	{
		$this->db->where('idzona',$id);
		return $this->db->update('zona',$data);
	}

	public function eliminarzona($id)//delete
	{
		$this->db->where('idzona',$id);
		$this->db->delete('zona');
	}
}
