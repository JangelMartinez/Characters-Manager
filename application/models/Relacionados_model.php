<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Relacionados_model extends CI_Model {

	function get($id){

		$result = $this->db->select("*")
					->where("ID", $id)
					->get("personajes_relacionados");
		
		return $result->row_array();

  	}


	function add($datos){

		$this->db->insert("personajes_relacionados",$datos);

		return $this->db->insert_id();
	}

	function delete($id){

		$this->db->where("ID", $id)->delete("personajes_relacionados");

		return $this->db->affected_rows();

	}


	function edit($id,$datos){

		$this->db->where("ID", $id)->update("personajes_relacionados", $datos);

		return $this->db->affected_rows();

	}

	function get_join($id_per_pri){
		$result = $this->db->select("personajes_relacionados.*, personaje.name")
					->where("ID_personaje_principal", $id_per_pri)
					->join("personaje", 'personaje.ID = personajes_relacionados.ID_personaje_secundario')
					->get("personajes_relacionados");

		return $result->result_array();
	}
  
}

