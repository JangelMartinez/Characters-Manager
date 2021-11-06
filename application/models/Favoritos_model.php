<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Favoritos_model extends CI_Model {

	function list($id_user){

		$result = $this->db->select("favoritos.*, personaje.name, personaje.listable")
					->where("favoritos.ID_user", $id_user)
					->join("personaje",'personaje.ID = favoritos.ID_personaje')
					->get("favoritos");
		
		return $result->result_array();

  	}

	function get($id_personaje){

		$result = $this->db->select("*")
					->where("ID_personaje", $id_personaje)
					->get("favoritos")
					->row_array();

		if($result == null){
			return false;
		}else{
			return $result;
		}
	}

	function favorito($id_per){

		$query = $this->db->select ("*")
						->where ("ID_personaje", $id_per)
						->get("favoritos");

		if($query == null){
			return false;
		}else{
			return true;
		}
	}


	function add($datos){

		$this->db->insert("favoritos",$datos);

		return $this->db->insert_id();
	}

	function delete($id_per){

		$this->db->where("ID_personaje", $id_per)->delete("favoritos");

		return $this->db->affected_rows();

	}


	function edit($id_per, $Notas){

		$this->db->set("Notas", $Notas)
				->where("ID_personaje", $id_per) ->update("favoritos");

		return $this->db->affected_rows();

	}
  
}

