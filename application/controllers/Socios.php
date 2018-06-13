<?php
/**
 * Controlador de Socios en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Socios extends CI_Controller {
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
		$crud->set_table('socio');
		$crud->set_subject("Listado de Socios de Natillapp");

		//  agregar la funcion quem e asocia el usuario a ESTA TABLA
		// si deseo que en combo del seleccionador se vea mas datos, se crean cada campo enceraddos {}
		$crud->set_relation('idcuota','cuota','valor');
		// $crud->set_relation('tipoempresa','tbl_tipoempresa','nombre');

		// la siguiente funcion me permite definir que campo quiero ver en la principal
		$crud->columns('correosocio','clave','nombres','apellidos','celular','identificacion','idcuota'); 		
		// la siguiente funcion me permite definir el nombre que deseo que me muestre para un campo
		$crud->display_as('correosocio','Correo del Socio');
		$crud->display_as('idcuota','Valor de la Cuota');
		$crud->display_as('idsocio','Id del Socio');

		// esta funcion permite indicar cual es campo o datos que no se puede repetir 
		$crud->unique_fields(array('identificacion'));
		
		
		// esta funcion definir que campos son obligatorios
		$crud->required_fields('correosocio','clave','nombres','apellidos','celular','identificacion','idcuota');
		// esta funcion permite definir por cual campo ordenar
		$crud->order_by('idsocio','asc');
		// estas fucniones permiten bloquear los botones de las acciones en cada registro
		//$crud->unset_delete();
		//$crud->unset_edit();
		//$crud->unset_add();

		//$crud->unset_jquery();
		$tabla=$crud->render();
		$data["tabla"]=$tabla->output;
		$data["css_files"]=$tabla->css_files;
		$data["js_files"]=$tabla->js_files; 
		$this->load->view('socios',$data);
	}
}




