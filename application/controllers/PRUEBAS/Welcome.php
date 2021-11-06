<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		//$this->load->view('login');
		echo "WELCOME";
	}

	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('register');
	}

	public function listar(){
		$html = $this->load->view('personajes/listar',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function nuevo(){
		$html = $this->load->view('personajes/nuevo',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function favoritos(){
		$html = $this->load->view('personajes/favoritos',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}
	
	public function perfil(){
		$html = $this->load->view('profile/profile',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function edit_perfil(){
		$html = $this->load->view('profile/edit_profile',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function search_rel(){
		$html = $this->load->view('relacionados/search_rel',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}
	public function nueva_rel(){
		$html = $this->load->view('relacionados/nueva_rel',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function search_more(){
		$html = $this->load->view('masinfo/nueva_more',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function nueva_more(){
		$html = $this->load->view('masinfo/nueva_more',[],true);

		$this->load->view('panel',["contenido" => $html]);
	}
}
