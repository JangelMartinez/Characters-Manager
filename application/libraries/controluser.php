<?php

Class controluser{

	function __construct(){

		$status = false;
		$this->CI =& get_instance();
		$this->CI->load->database('default',TRUE);
		$this->db = $this->CI->db;

		if(empty($_COOKIE["token"]) == false){
			$sql = $this->db->select("*")->from("Users")->where("token",$_COOKIE["token"])->get()->row_array();

			if($sql != NULL){
				$status = true;
			}
		}

		if($status == true){
			define("USER", ["status"=>true,"data"=>$sql]);
			return true;

		}else{
			define("USER", ["status"=>false]);
			return false;
		}

	}

	function check_ID($id=0){
		
		// ¿ESTÁ LOGUEADO?
		if(USER["status"] == false){
			return false;
		}

		// ES SU ID
		if(USER["data"]["ID"] != $id){
			return false;
		}

		return true;

	}

	function edit_user(){

			header("Refresh:0");
			redirect("/Usuario/perfil");

	}
	


}