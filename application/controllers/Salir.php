<?php
/* controlador que permite salir del sistema */
defined('BASEPATH') OR exit('No direct script access allowed');

class Salir extends CI_Controller {

	public function __construct(){
			// cargar o heredar las propiedades, metodods variables de la clase padre
			parent:: __construct();
		 	$this->load->helper('url_helper');
	}

	public function index()
	{
		// invocar el metodo sess_destroy de la clase session y redireccionarlo a la principal del sistema
		$this->session->sess_destroy();
		redirect('login');
	}
}
