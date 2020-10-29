<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function prueba()
	{
		$query=$this->db->get('categoria');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}

	public function index()
	{
		$listacategoria=$this->categoria_model->listarcategoria();
		$data['categoria']=$listacategoria;
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('categoria/listacategoria_view',$data);
		$this->load->view('inc/footer');
	}

	

	public function agregar()//addnew
	{
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('categoria/agregarcategoria_view');
		$this->load->view('inc/footer');
	}

	public function agregarbd()//insert
	{
		
		$data['categoria']=$_POST['categoria'];
		$this->categoria_model->agregarcategoria($data);
		redirect('categoria/index','refresh');
	}

	public function modificar()//edit
	{
		$id=$_POST['idcategoria'];
		//$data['']=$this->categoriatienda_model->recuperarcategoriatienda($id);
		$data['infocategoria']=$this->categoria_model->recuperarcategoria($id);
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('categoria/modificarcategoria_view',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()//update
	{
		$id=$_POST['idcategoria'];
		$categoria=$_POST['categoria'];
		$data['categoria']=$categoria;
		$this->categoria_model->modificarcategoria($id,$data);
		redirect('categoria/index','refresh');
	}

	public function eliminarbd()
	{
		$id=$_POST['id'];
		$this->categoria_model->eliminarcategoria($id);
		redirect('categoria/index','refresh');
	}
	
}