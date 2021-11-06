<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Personaje_model extends CI_Model {

  // ------------------------------------------------------------------------

  	function get_simple_all(){

		$result = $this->db->select("ID, ID_user, name, surname, profesion, listable")
					->get("personaje");
		
		return $result->result_array();

  	}

	function get_simple_list($id){
		
		$result = $this->db->select("ID, ID_user, name, surname, profesion, listable")
					->where("ID_user", $id)
					->get("personaje");
		
		return $result->result_array();


	}

	function get($id){

		$query = $this->db->select("*")
						-> where ("ID", $id)
						-> get ("personaje")
						-> row_array();

		if($query == null){
			return false;
		}else{
			return $query;
		}

	}

	function add($datos){

		$this->db->insert("personaje",$datos);

		return $this->db->insert_id();
	}

	function delete($id){

		$this->db->where("ID", $id)->delete("personaje");

		return $this->db->affected_rows();

	}

	function edit_simple($id, $datos){

		$allow = [ "name", "surname", "profesion"];
		$array = [];

		foreach ($datos as $key => $value) {
			if( in_array($key,$allow) ){
				$array[$key] = $value;
			}
		}

		$this->db->where("ID", $id)->update("personaje", $array);

		return $this->db->affected_rows();

	}

	function edit($id, $datos){

		$this->db->where("ID", $id) ->update("personaje", $datos);

		return $this->db->affected_rows();

	}

	function contar($id){
		$results = $this->db->where("ID_user",$id)->count_all_results('personaje');

		return $results;
	}
}