<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	function add($email, $password){
		
		$token = time().rand(100000,1000000).rand(100000,1000000).rand(100000,1000000);

		$array = [
			"email" => $email,
			"password" => sha1($password),
			"token" => sha1($token)
		];

		$this->db->insert("Users", $array);


		return sha1($token);

	}

	/*function edit($id, $email=null, $password=null){

		if($email != null){ $this->db->set("email", $email); }

		if($password != null){ $this->db->set("password", sha1($password)); }

		$this->db->where("ID", $id)->update("Users");

		return true;

	}*/

	/*function edit($id, $email=null, $password=null){

		$array = [];

		if($email != null){ $array["email"]=$email; }
		if($password != null){ $array["password"]=sha1($password); }

		$this->db->where("ID", $id)->update("Users", $array);

		return true;

	}*/


	function edit($id, $to_change){

		$allow = ["email", "password"];
		$array = [];

		foreach ($to_change as $key => $value) {
			if( in_array($key,$allow) ){
				$array[$key] = $value;
			}
		}

		if(USER['data']['password'] != $array['password']){
			echo "el password es diferente";
			$array = [
				'email' => $array['email'],
				'password' => sha1($array['password'])
			];
		}

		$this->db->where("ID", $id)->update("Users", $array);

		return $this->db->affected_rows();
	}


	function get_list(){

		$result = 
			$this->db
				->select("ID, email, token, created")
				// ->where()
				// ->order_by("ID", "DESC")
				->get("Users");

		return $result->result_array();

	}

	function get($id){
		
		$query = $this->db
			->select("ID, email, token, created")
			->where("ID", $id)
			->get("Users")
			->row_array();

		/*	$query = $this->db
			->select("ID, email, token, created")
			->from("Users")
			->where("ID", $id)
			->get()
			->row_array(); */

		if($query == null){
			return false;
		}else{
			return $query;
		}

	}

	function delete($id){

		$this->db->where("ID", $id)->delete("Users");

		return $this->db->affected_rows();

	}


	
	function login($email, $password){

		$password = sha1($password);
		
		$query = $this->db
			->select("*")
			->from("Users")
			->where("email", $email)
			->where("password", $password)
			->get()
			->row_array();

		if($query == NULL){
			return ["status"=>false];
		}else{
			$token = sha1(time().json_encode($query));
			$this->db->set("token",$token)->where("ID", $query["ID"])->update("Users");
			return ["status"=>true, "token"=>$token];
		}

	}

	function recovery_password($id, $old_password, $new_password1, $new_password2){
		

	}

	function remove_users_inactived(){

	}

	function user($token){
		$result = $this->db->select("ID")->where("token", $token)->get("Users")->row_array();
		
		return $result["ID"];
	}


}
