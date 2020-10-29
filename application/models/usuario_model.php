<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		//$this->load->model('usuario_model');
	}
	public function login($usuario, $clave)
	{
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);
		$q=$this->db->get('usuario');
		if ($q->num_rows()>0) {
			return true;
		} else {
			return false;
		}
	}

	/*public function validar($usuario, $clave)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);

		return $this->db->get();
		
	}*/
	
	/*public function mlogeo($usuario,$clave){
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);
		$resultado=$this->db->get('usuario');
		if ($resultado->num_rows()>0) {
			return $resultado->row();
		} else {
			return false;
		}
		
	}*/
	
}
