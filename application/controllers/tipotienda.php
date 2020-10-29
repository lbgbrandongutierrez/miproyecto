<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipotienda extends CI_Controller {

	public function prueba()
	{
		$query=$this->db->get('tipotienda');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function index()
	{
		$listatipotienda=$this->tipotienda_model->listartipotienda();
		$data['tipotienda']=$listatipotienda;
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipotienda/listatipotienda_view',$data);
		$this->load->view('inc/footer');
	}

	

	public function agregar()//addnew
	{
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipotienda/agregartipotienda_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()//insert
	{
		
		$data['nombre']=$_POST['nombre'];
		$data['descripcion']=$_POST['descripcion'];
		$this->tipotienda_model->agregartipotienda($data);
		redirect('tipotienda/index','refresh');
	}

	public function modificar()//edit
	{
		$id=$_POST['idtipotienda'];
		//$data['']=$this->tipotienda_model->recuperartipotienda($id);
		$data['infotipotienda']=$this->tipotienda_model->recuperartipotienda($id);
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipotienda/modificartipotienda_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()//update
	{
		$id=$_POST['idtipotienda'];
		$nombre=$_POST['nombre'];
		$data['nombre']=$nombre;
		$descripcion=$_POST['descripcion'];
		$data['descripcion']=$descripcion;
		$this->tipotienda_model->modificartipotienda($id,$data);
		redirect('tipotienda/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->tipotienda_model->eliminartipotienda($id);
		redirect('tipotienda/index','refresh');
	}
	
}
