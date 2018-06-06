<?php
/**
 * Modelo de Login en Natillapp
 * Autor: Jorge Eliécer Muñoz Herrera
 * Github: http://bit.ly/GitJorge
 * 2018
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
	function __construct(){
		$this->load->database();
		// cargar el helper security
		$this->load->helper("security");
	}

	function validar_acceso() {
		// parametros con la clase de seguridad
		$correo=$this->security->xss_clean($this->input->post("usuario"));
		$clave=$this->security->xss_clean($this->input->post("clave"));

		// comparamos con la tabla
		$query=$this->db->get_where("superusuario",array("correosocio"=>$correo,"clave"=>$clave));
		// para saber cual fue el ultimo query se ejecuta last_query
		echo $this->db->last_query();
		return $query->result_array();
	}

}
?>


