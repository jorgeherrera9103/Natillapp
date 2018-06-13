<?php
/**
 * Controlador de Préstamos en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Prestamo extends CI_Controller {
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
		$crud->set_table('prestamo');
		$crud->set_subject("Listado de Préstamos de Natillapp");

		//  agregar la funcion quem e asocia el usuario a ESTA TABLA
		// si deseo que en combo del seleccionador se vea mas datos, se crean cada campo enceraddos {}
		$crud->set_relation('idsocio','socio','nombres');

		// la siguiente funcion me permite definir que campo quiero ver en la principal
		$crud->columns('valorprestamo', 'cantcuotas', 'idsocio'); 
				
		// la siguiente funcion me permite definir el nombre que deseo que me muestre para un campo
		$crud->display_as('cantcuotas','Cantidad de Cuotas');
		$crud->display_as('valorprestamo','Valor del Préstamo');
		$crud->display_as('idsocio','Nombre del Socio');

		// esta funcion permite indicar cual es campo o datos que no se puede repetir 
		$crud->unique_fields(array('idsocio'));


		// esta funcion definir que campos son obligatorios
		$crud->required_fields('valorprestamo', 'cantcuotas', 'idsocio');
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
		$this->load->view('prestamo',$data);
	}
}




