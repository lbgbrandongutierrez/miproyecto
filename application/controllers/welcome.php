<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//cargando la vista welcome_message
		$this->load->view('inc/head');
		$this->load->view('inc/aside');
		$this->load->view('admin/dashboard');
		$this->load->view('inc/footer');
	}

	

}
