<?php
defined('BASEPATH') or exit('No direct script access allowed');


class moreinfo extends CI_Controller
{
    
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->input->post('formulario') != 'OK'){
			
			$this->load->model('Personaje_model','m_personaje');
			$listado = $this->m_personaje->get_simple_all();

			
			$html = $this->load->view('masinfo/search_more',["listado" => $listado],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{
			
			
			$this->listar($this->input->post('personaje'));

		}
			
	}

	public function listar($id, $mensaje = null)
	{
			
		$this->load->model('Personaje_model','m_personaje');
		$listado = $this->m_personaje->get($id);
		

		$this->load->model('Moreinfo_model','m_info');
		$moreinfo = $this->m_info->get_join($id);

		$html2 = $this->load->view('masinfo/listar_more',["listado" => $listado, "moreinfo" => $moreinfo, 'borrado' => $mensaje],true);

		$this->load->view('panel',['contenido' => @$html, 'contenido2' =>$html2]);
	}

	public function add(){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		if ($this->input->post('formulario') != 'OK'){
			
			$this->load->model('Personaje_model','m_personaje');
			$listado = $this->m_personaje->get_simple_all();

			
			$html = $this->load->view('masinfo/nueva_more',["listado" => $listado],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{
			
			$this->load->model('Moreinfo_model','m_mor');

			$datos = [
				'ID_personaje' => $this->input->post('persona'),
				'tipo' => $this->input->post('tipo'),
				'Descripcion' => $this->input->post('descripcion')
			];

			$query = $this->m_mor->add($datos);

			if ($query > 0){
				$mensaje = "Se ha añadido una nueva información en el personaje con id ".$datos['ID_personaje'];
			}else{
				$mensaje = "No se ha podido añadir la nueva información ";
			}
			
			$this->listar($this->input->post('persona'), $mensaje);

		}
	}

	public function editar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model('Moreinfo_model','m_more');

		if ($this->input->post('formulario') != 'OK'){

			$this->load->model('Personaje_model','m_personaje');
			$listado = $this->m_personaje->get_simple_all();
			

			$query = $this->m_more->get($id);
			
			$html = $this->load->view('masinfo/edit_more',["listado" => $listado, "moreinfo" => $query, "id" => $id],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{

			$datos = [
				'ID_personaje' => $this->input->post('persona'),
				'tipo' => $this->input->post('tipo'),
				'Descripcion' => $this->input->post('descripcion')
			];

			$query = $this->m_more->edit($this->input->post('id'),$datos);

			if ($query > 0){
				$mensaje = "Se ha modificado la información en el personaje con id ".$datos['ID_personaje'];
			}else{
				$mensaje = "No se ha podido modificar la información ";
			}
			
			$this->listar($this->input->post('persona'), $mensaje);
		}
	}

	public function borrar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model("Moreinfo_model", "m_more");
		$datos = $this->m_more->get($id);
		$query = $this->m_more->delete($id);
		
		if ($query > 0){
			$mensaje = "Se ha eliminado la información con id ".$id;
		}else{
			$mensaje = "No se ha podido eliminar la información ";
		}
		
		
		$this->listar($datos['ID_personaje'], $mensaje);

	}



}


/* End of file Relaciones.php */
/* Location: ./application/controllers/Relaciones.php */