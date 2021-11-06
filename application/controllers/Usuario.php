<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index(){

		// Si está logueado lo redirig
			if(USER["status"]==true){
				redirect("personajes/listar");
			}else{
				redirect("/personajes/listar_all");
			}
	}

	public function login(){

		if($this->input->post("formulario") != "OK"){
			$this->load->view('login');
		}else{

		// Comprobamos los datos enviados
			$this->load->model("Usuarios_model", "m_usuarios");

			$prueba = $this->m_usuarios->login( $this->input->post("login"), $this->input->post("password") );

			if($prueba["status"] == false){
				redirect("/?act=error");
			}else{
				//echo "OK";
				setcookie("token", $prueba["token"], time()+(365*24*60*60), "/");
				redirect("/personajes/listar_all");
			}
		}
	}

	public function registrar(){

		
		if($this->input->post("formulario") != "OK"){
			$this->load->view('register');
			echo "no entra en el formulario";
		}else{

			echo "entro a crear el usuario";
			$this->load->model("Usuarios_model", "m_usuarios");

			$token = $this->m_usuarios->add($this->input->post("email"), $this->input->post("password"));
			echo "<br> este es el tocken:".$token;
			setcookie("token", $token, time()+(365*24*60*60), "/");
			redirect("/Personajes/listar");
			
		}
	}

	function salir(){

		setcookie("token", "", time() - 3600, "/");
					redirect("/Usuario");

	}

	public function perfil(){

		if (USER["status"] == true){
			$usuario = USER["data"];
		}

		$this->load->model("Personaje_model", 'm_personaje');
		$count = $this->m_personaje->contar($usuario['ID']);


		$html = $this->load->view('profile/profile',['usuario' => $usuario, "num_per" => $count], true);
		$this->load->view('panel',['contenido' => $html]);
	}

	public function edit_perfil(){

		if (USER["status"] == true){
			$usuario = USER["data"];
		}

		if($this->input->post("formulario") != "OK"){

			$this->load->model("Personaje_model", 'm_personaje');
			$count = $this->m_personaje->contar($usuario['ID']);


			$html = $this->load->view('profile/edit_profile',['usuario' => $usuario, "num_per" => $count], true);
			$this->load->view('panel',['contenido' => $html]);
		}else{

			$datos=[
				'email'=> $this->input->post('email'),
				'password' => $this->input->post('password')
			];

			$this->edit_perfil_save($datos);

		}
	}

	public function edit_perfil_save($datos){

		if (USER["status"] == true){
			$usuario = USER["data"];
		}

		$this->load->model("Usuarios_model","m_user");
		$this->m_user->edit($usuario['ID'], $datos);

		$this->controluser->edit_user();

		
	}

}
