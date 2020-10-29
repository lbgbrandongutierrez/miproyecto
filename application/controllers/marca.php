<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marca extends CI_Controller {

	public function prueba()
	{
		$query=$this->db->get('marca');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function index()
	{
		$listamarca=$this->marca_model->listarmarca();
		$data['marca']=$listamarca;
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('marca/listamarca_view',$data);
		$this->load->view('inc/footer');
	}

	public function agregar()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('marca/agregarmarca_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()
	{
		$data['marca']=$_POST['marca'];
	
		$this->marca_model->agregarmarca($data);
		redirect('marca/index','refresh');
	}

	public function modificar()
	{
		$id=$_POST['idmarca'];
		$data['infomarca']=$this->marca_model->recuperarmarca($id);

		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('marca/modificarmarca_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()
	{
		$id=$_POST['idmarca'];
		$marca=$_POST['marca'];
		$data['marca']=$marca;
		$this->marca_model->modificarmarca($id,$data);
		redirect('marca/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->marca_model->eliminarmarca($id);
		redirect('marca/index','refresh');
	}
}