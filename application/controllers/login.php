<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		//$this->load->model('usuario_model');
	}
	public function prueba()
	{
		$query=$this->db->get('usuario');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
	public function index(){
		
			if (isset($_POST['clave']))
		 	{
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['usuario'],md5($_POST['clave']))){
				redirect('welcome');
			}else{
				redirect('login');
			
			}
			
			/*
			if ($this->form_validation->run() == FALSE)
		{
			//$this->load->view('myform');
			redirect('welcome');
		}
		else
		{
			$this->load->view('formsuccess');
		}
			*/


		}
		$this->load->view('admin/login_view');
		
	}
	/*public function clogeo(){
		$usuario=$this->input->post('usuario');
		$clave=$this->input->post('clave');
		$res=$this->usuario_model->mlogeo($usuario,$clave);
		var_dump($res);
	}*/
	public function clogout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
	
}