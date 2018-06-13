<?php
/**
 * Controlador de Socios en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Cuota extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			// cargar la libreria crud 
			$this->load->library("grocery_CRUD");
		 	if (!$this->session->userdata("id")) { 
		 		redirect('login');
		 	}

	}
	public function index()
	{
		$data["nombreusuario"]=$this->session->userdata("nombrecompleto");
		$crud=new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('cuota');
		$crud->set_subject("Listado de Cuotas de Natillapp");

		//Relacionamiento
		$crud->set_relation('idcuota','cuota','valor');

		// la siguiente funcion me permite definir que campo quiero ver en la principal
		$crud->columns('cuota','valor'); 		
		// la siguiente funcion me permite definir el nombre que deseo que me muestre para un campo
		$crud->display_as('cuota','Id de la Cuota');
		$crud->display_as('valor','Cantidad Cuotas');

		// esta funcion permite indicar cual es campo o datos que no se puede repetir 
		//$crud->unique_fields(array('idcuota'));
		// esta funcion definir que campos son obligatorios
		$crud->required_fields('cuota','valor'); 
		// esta funcion permite definir por cual campo ordenar
		$crud->order_by('cuota','desc');
		// estas fucniones permiten bloquear los botones de las acciones en cada registro
		//$crud->unset_delete();
		//$crud->unset_edit();
		//$crud->unset_add();

		//$crud->unset_jquery();
		$tabla=$crud->render();
		$data["tabla"]=$tabla->output;
		$data["css_files"]=$tabla->css_files;
		$data["js_files"]=$tabla->js_files; 
		$this->load->view('cuota',$data);
	}
}




