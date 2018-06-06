<?php
/**
 * Controlador de Login en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){

		// cargar o heredar las propiedades, metodods variables de la clase padre
		parent:: __construct();
		// invocar el hekper que me permite cargar la ruta base para no estar copiandola y evitar errores
		$this->load->helper('url');
		 $this->load->helper('url_helper');
		 $this->load->helper('form');
		 $this->load->Model('login_model');
}

	public function index()
	{
		// Preguntar si se presiona el boton es porque se esta pidiendo usuario y cvlave para validar y permitir el acceso al sistema. En este caso se utilizara:
		// 1. Crear el modelo login o crear la funcion validar acceso dentro del modelo usuario
		// 2. cargar las variables de session para permitir el acceso
		//3. redireccionar a principal
		// 4. en principal en el constructor validar si estas variabvles estan cargadas lo deje pasar olo devuelva al login

		if (count($this->input->post())>0) {
			$proceso=$this->login_model->validar_acceso();
			if (count($proceso)>0) {
				$data_session=array(

					"id"=>$proceso[0]["idsuperusuario"],
					// "nombrecompleto"=>$proceso[0]["nombre"]." ".$proceso[0]["apellido"],
					"correosocio"=>$proceso[0]["correosocio"]
				);
				// invocar la libreria session y su metodo set_userdata
				$this->session->set_userdata($data_session);
				redirect('principal');
			} else {
				redirect('/');
			}
		}
		$this->load->view('login'); // nombre de archivo
	}
}
