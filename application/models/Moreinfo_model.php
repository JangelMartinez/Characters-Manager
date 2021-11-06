<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Moreinfo_model extends CI_Model {

	function get($id_per_pri){

		$result = $this->db->select("*")
					->where("ID", $id_per_pri)
					->get("more_info");
		
		return $result->row_array();

  	}


	function add($datos){

		$this->db->insert("more_info",$datos);

		return $this->db->insert_id();
	}

	function delete($id){

		$this->db->where("ID", $id)->delete("more_info");

		return $this->db->affected_rows();

	}


	function edit($id, $datos){

		$this->db->where("ID", $id) ->update("more_info", $datos);

		return $this->db->affected_rows();

	}

	function get_join($id_per_pri){
		$result = $this->db->select("more_info.ID, more_info.ID_personaje, more_info.Tipo, more_info.Descripcion")
					->where("ID_personaje", $id_per_pri)
					->join("personaje", 'personaje.ID = more_info.ID_personaje')
					->get("more_info");

		return $result->result_array();
	}
 
}

