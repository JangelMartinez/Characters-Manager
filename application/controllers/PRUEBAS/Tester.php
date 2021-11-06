<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index(){

		// Usuarios
			$this->load->model("Usuarios_model", "m_usuarios");

			//$this->m_usuarios->add("test3@luis.es", "123321");
			// $this->m_usuarios->edit(7, "siete@gmail.es", "312312");
			// $this->m_usuarios->edit(8, "tadsasd", "1323");
			// $tmp = $this->m_usuarios->get_list();
			// $tmp = $this->m_usuarios->get(1);
			// $this->m_usuarios->delete(7);
		
		// Personajes
			$this->load->model("Personaje_model", "m_personaje");

			//$datos = ["ID_user"=> 1, "name" => "Jose Angel", "surname" => "Martinez", "profesion" => "informatico"];
			//$datos1 = ["ID_user"=> 1, "name" => "Marta", "surname" => "Ricart", "profesion" => "Funcionaria"];
			//$datos2 = ["ID_user"=> 1, "name" => "Claudia", "surname" => "Martinez", "profesion" => "Estudiante"];
			//$this->m_personaje->add($datos2);
			//$datos = ["name" => "Jose Angel", "surname" => "Martinez Socarrades", "profesion" => "informatico"];
			//$this->m_personaje->edit_simple(2,$datos);
			//$datos = ["sexo"=>"masculino", "color_pelo"=>"castaño","corte_pelo"=>"corto"];
			//$this->m_personaje->edit(2,$datos);
			//$tmp = $this->m_personaje->get_simple_all();
			//$tmp = $this->m_personaje->get(2);
			//print_r($tmp);
			//$this->m_personaje->delete(2);

		//Personajes relacionados
			$this->load->model("Relacionados_model", "m_relacionados");

			//$datos = ["ID_personaje_principal"=>4,"ID_personaje_secundario"=>5, "tipo_relacion"=>"hija"];
			//$this->m_relacionados->add($datos);
			//$temp = $this->m_relacionados->get(4);
			//print_r($temp);
			//$datos = ["tipo_relacion" => "amiga"];
			//$this->m_relacionados->edit(4,$datos);
			//$this->m_relacionados->delete(4);

		//More information
			$this->load->model("Moreinfo_model", "m_moreinfo");

			//$datos = ["ID_personaje"=>3, "Tipo"=>"Debilidad", "Descripcion"=>"Ansiedad"];
			//$this->m_moreinfo->add($datos);
			//$this->m_moreinfo->edit(1, $datos);
			//$tmp = $this->m_moreinfo->get(3);
			//print_r($tmp);
			//$this->m_moreinfo->delete(2);

		//Personajes Favoritos
			$this->load->model("Favoritos_model", "m_favoritos");

			//$datos = ["ID_user"=>1,"ID_personaje"=>4,"Notas"=>"Mi segundo personaje"];
			//$notas = "mi primer personaje modificado";
			//$this->m_favoritos->add($datos);
			//$this->m_favoritos->edit(3, $notas);
			//$tmp = $this->m_favoritos->get(1);
			//print_r($tmp);
			//$this->m_favoritos->delete(4);




			

		// Personajes relacionados

		// More_info

		// Favoritos
	}


}