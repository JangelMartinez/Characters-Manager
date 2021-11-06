<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Favoritos extends CI_Controller
{
    
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			
	}

	public function add($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		if($this->input->post("formulario") != "OK"){
			$html = $this->load->view('favoritos/nuevo_fav',[],true);
			$this->load->view('panel',['contenido' => $html]);
		}else{
			$token = $_COOKIE['token'];
			$this->load->model("Usuarios_model","m_usuarios");
			$id_user = $this->m_usuarios->user($token);

			$datos = [
				"ID_user" => $id_user,
				"ID_personaje" => $id,
				"Notas" => $this->input->post('notas')
			];

			$this->load->model("Favoritos_model","m_favorito");
			$query = $this->m_favorito->add($datos);

			if ($query >= 0){
				$mensaje = "Se ha añadido el personaje a la lista de favoritos ";
				$this->listar($mensaje);
			}else{
				$mensaje = "No se ha podido añadir el personaje a la lista de favoritos";
				$this->listar($mensaje);
			}

		}

	}

	public function listar(){
		
		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$token = $_COOKIE['token'];
		$this->load->model('Usuarios_model','m_usuario');
		$id = $this->m_usuario->user($token);
		
		$this->load->model('Favoritos_model','m_fav');
		$listado = $this->m_fav->list($id);
		
		$html = $this->load->view('favoritos/listar_fav',["listado"=>$listado],true);
		$this->load->view('panel',['contenido' => $html]);
	}

	public function edit($id){
		
		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		if($this->input->post("formulario") != "OK"){
			$this->load->model('Personaje_model','m_personaje');
			$query = $this->m_personaje->get($id);

			$this->load->model('Favoritos_model','m_fav');
			$listado = $this->m_fav->get($id);

			$html = $this->load->view('favoritos/edit_fav',['listado' => $listado, 'personaje' => $query],true);
			$this->load->view('panel',['contenido' => $html]);
		}else{
			$this->edit_save($id, $this->input->post('notas'));
		}
	}

	public function edit_save($id,$notas){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}


		$this->load->model('Favoritos_model','m_fav');
		$this->m_fav->edit($id, $notas);
		/*
		if ($query >= 0){
			$mensaje = "Se ha actualizado los datos del personaje ".$id;
			$this->listar($mensaje);
		}else{
			$mensaje = "No se ha podido actualizar. Pruebe otra vez y compruebe los valores de los campos.";
			$this->listar($mensaje);
		}*/

		$this->listar();
	}

	public function borrar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model('Favoritos_model','m_fav');
		$this->m_fav->delete($id);

		$this->listar();
	}

}


/* End of file Favoritos.php */
/* Location: ./application/controllers/Favoritos.php */