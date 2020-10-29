<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo extends CI_Controller {

	public function prueba()
	{
		$query=$this->db->get('tipo');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function index()
	{
		$listatipo=$this->tipo_model->listartipo();
		$data['tipo']=$listatipo;
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipo/listatipo_view',$data);
		$this->load->view('inc/footer');
	}

	

	public function agregar()//addnew
	{
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipo/agregartipo_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()//insert
	{
		
		$data['tipo']=$_POST['tipo'];
		$this->tipo_model->agregartipo($data);
		redirect('tipo/index','refresh');
	}

	public function modificar()//edit
	{
		$id=$_POST['idtipo'];
		//$data['']=$this->tipotienda_model->recuperartipotienda($id);
		$data['infotipo']=$this->tipo_model->recuperartipo($id);
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('tipo/modificartipo_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()//update
	{
		$id=$_POST['idtipo'];
		$tipo=$_POST['tipo'];
		$data['tipo']=$tipo;
		$this->tipo_model->modificartipo($id,$data);
		redirect('tipo/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->tipo_model->eliminartipo($id);
		redirect('tipo/index','refresh');
	}
	
}