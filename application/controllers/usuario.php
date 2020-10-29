<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/*public function index()
	{
		
		$data['msg']=$this->uri->segment(3);
		if ($this->session->userdata('usuario')) 
		{
			redirect('usuario/panel','refresh');
		}
		else 
		 {
		 	$this->load->view('inc/head');
			$this->load->view('loginform',$data);
			$this->load->view('inc/footer');
		}
	}
	public function validarusuario()
	{
		$usuario=$_POST['usuario'];
		$clave=md5($_POST['clave']);
		$consulta=$this->usuario_model->validar($usuario,$clave);
		if ($consulta->num_rows()>0)
		 {
			foreach ($consulta->result() as $row)
			 {
				$this->session->set_userdata('idusuario',$row->idusuario);
				$this->session->set_userdata('usuario',$row->usuario);
				$this->session->set_userdata('idrol',$row->idrol);
				redirect('usuario/panel','refresh');
			}
		} 
		else {
			redirect('usuario/index/1','refresh');
		}
		

	}
	public function panel()
	{
		if ($this->session->userdata('login')) {
			$this->load->view('admin/dashboard_view');
		} else {
			redirect('usuario/index/2','refresh');
		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuario/index/3','refresh');

		
	}*/

	

}