<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester2 extends CI_Controller {

	// index.php/{controlador}
	// http://127.0.0.1/alumnos/jose-angel/codeigniter-3/index.php/usuarios
	public function index(){
		$this->load->view('hola_mundo');
	}

	// index.php/{controlador}/{metodo}
	// http://127.0.0.1/alumnos/jose-angel/codeigniter-3/index.php/usuarios/listar
	function listar(){
		echo "Soy la función listar!";
	}

	// index.php/{controlador}/{metodo}/{argumentos}
	// http://127.0.0.1/alumnos/jose-angel/codeigniter-3/index.php/usuarios/recuperar/2/3
	function recuperar($id, $id2){
		echo "Recuperando ID: {$id} {$id2}";
	}

}
