<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Relaciones extends CI_Controller
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

			
			$html = $this->load->view('relacionados/search_rel',["listado" => $listado],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{
			
			
			$this->listar($this->input->post('personaje'));

		}
			
	}

	public function listar($id, $mensaje = null)
	{
			
		$this->load->model('Personaje_model','m_personaje');
		$listado = $this->m_personaje->get($id);
		

		$this->load->model('Relacionados_model','m_relacionados');
		$relacionados = $this->m_relacionados->get_join($id);

		//$html = $this->load->view('relacionados/search_rel',["listado" => $listado, 'id' => $id],true);
		$html2 = $this->load->view('relacionados/listar_rel',[ "listado" => $listado, "relacionados" => $relacionados, 'borrado' => $mensaje],true);

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

			
			$html = $this->load->view('relacionados/nueva_rel',["listado" => $listado],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{
			
			$this->load->model('Relacionados_model','m_rel');

			$datos = [
				'ID_personaje_principal' => $this->input->post('primario'),
				'ID_personaje_secundario' => $this->input->post('secundario'),
				'tipo_relacion' => $this->input->post('tipo_relacion')
			];

			$query = $this->m_rel->add($datos);

			if ($query > 0){
				$mensaje = "Se ha añadido una nueva relación en el personaje con id ".$datos['ID_personaje_principal'];
			}else{
				$mensaje = "No se ha podido añadir la nueva relación ";
			}
			
			$this->listar($this->input->post('primario'), $mensaje);

		}
	}

	public function editar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}


		if ($this->input->post('formulario') != 'OK'){

			$this->load->model('Personaje_model','m_personaje');
			$listado = $this->m_personaje->get_simple_all();
			
			$this->load->model('Relacionados_model','m_rel');
			$query = $this->m_rel->get($id);

			print_r($query);

			
			$html = $this->load->view('relacionados/edit_rel',["listado" => $listado, "relacionado" => $query],true);
			$this->load->view('panel',['contenido' => $html]);

		}else{
			
			$this->load->model('Relacionados_model','m_rel');

			$datos = [
				'ID_personaje_principal' => $this->input->post('primario'),
				'ID_personaje_secundario' => $this->input->post('secundario'),
				'tipo_relacion' => $this->input->post('tipo_relacion')
			];

			$query = $this->m_rel->edit($this->input->post('id'),$datos);

			if ($query > 0){
				$mensaje = "Se ha modificado la relación en el personaje con id ".$datos['ID_personaje_principal'];
			}else{
				$mensaje = "No se ha podido modificar la relación ";
			}
			
			$this->listar($this->input->post('primario'), $mensaje);
		}
	}

	public function borrar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model("Relacionados_model", "m_rel");
		$datos = $this->m_rel->get($id);
		$query = $this->m_rel->delete($id);

		print_r($datos);
		
		if ($query > 0){
			$mensaje = "Se ha eliminado la relación con id ".$id;
		}else{
			$mensaje = "No se ha podido eliminar la relación ";
		}
		
		
		$this->listar($datos['ID_personaje_principal'], $mensaje);

	}



}


/* End of file Relaciones.php */
/* Location: ./application/controllers/Relaciones.php */