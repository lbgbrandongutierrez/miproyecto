<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zona extends CI_Controller {

	public function prueba()
	{
		$query=$this->db->get('zona');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function index()
	{
		$listazona=$this->zona_model->listarzona();
		$data['zona']=$listazona;
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('zona/listazona_view',$data);
		$this->load->view('inc/footer');
	}

	

	public function agregar()//addnew
	{
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('zona/agregarzona_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()//insert
	{
		
		$data['zona']=$_POST['zona'];
		$data['detalle']=$_POST['detalle'];
		$this->zona_model->agregarzona($data);
		redirect('zona/index','refresh');
	}

	public function modificar()//edit
	{
		$id=$_POST['idzona'];
		//$data['']=$this->tipotienda_model->recuperartipotienda($id);
		$data['infozona']=$this->zona_model->recuperarzona($id);
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('zona/modificarzona_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()//update
	{
		$id=$_POST['idzona'];
		$zona=$_POST['zona'];
		$data['zona']=$zona;
		$detalle=$_POST['detalle'];
		$data['detalle']=$detalle;
		$this->zona_model->modificarzona($id,$data);
		redirect('zona/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->zona_model->eliminarzona($id);
		redirect('zona/index','refresh');
	}
	
}
