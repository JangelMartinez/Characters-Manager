<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personajes extends CI_Controller {

	public function index(){
		$this->load->view('hola_mundo');
	}

	

	public function nuevo(){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		if($this->input->post("formulario") != "OK"){
			$html = $this->load->view('personajes/nuevo',[],true);
			$this->load->view('panel',['contenido' => $html]);
		}else{

			$datos = [
				"ID_user" => USER["data"]["ID"],
				"name" => $this->input->post('name'),
				"surname" => $this->input->post('surname'),
				"sexo" => $this->input->post('sexo'),
				"identidad_genero" => $this->input->post('id_gen'),
				"fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
				"profesion" => $this->input->post('profesion'),
				"altura" => $this->input->post('altura'),
				"color_pelo" => $this->input->post('color'),
				"corte_pelo" => $this->input->post('corte'),
				"color_ojos" => $this->input->post('ojos'),
				"ori_sexual" => $this->input->post('ori_sex'),
				"complexion" => $this->input->post('complexion'),
				"raza" => $this->input->post('raza'),
				"religion" => $this->input->post('religion'),
				"tipo_alimentacion" => $this->input->post('alimentacion'),
				"objetivo" => $this->input->post('objetivo'),
				"historia" => $this->input->post('historia'),
				"personalidad" => $this->input->post('personalidad'),
				"idiomas" => $this->input->post('idioma'),
				"Notas" => $this->input->post('notas'),
				"photo" => $this->input->post('imagen')
			];

			$this->nuevo_guardar($datos);
			
		}

	}

	public function nuevo_guardar($datos){

		// 1º Sacar la extensión

		$name = sha1(microtime().$_FILES['imagen']['name'].json_encode(USER).rand(1000000,10000000));
		$complete_name = $name.".".pathinfo($_FILES["imagen"]["name"])["extension"];

		// 2º Genererar un HASH alteatorio SHA1 y añadirle "." extensión

		$url_a_guardar = "CDN/images/uploads/".$complete_name;

		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $url_a_guardar)) {
			$mensaje2 = "El fichero es válido y se subió con éxito.\n";
		} else {
			$mensaje2 = "¡Posible ataque de subida de ficheros!.\n";
		}

		$datos["photo"] = $complete_name;

		print_r($datos);

		
		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model("Personaje_model","m_personaje");
		$query = $this->m_personaje->add($datos);
		
		if ($query > 0){
			$mensaje = "Se ha creado un nuevo personaje. ";
			$this->listar($mensaje.' '.$mensaje2);
		}else{
			$mensaje = "No se ha podido crear el personaje.";
			$this->listar($mensaje.' '.$mensaje2);
		}

		
	}

	public function listar($mensaje = null){

		$usuario = [];
		if(USER['status'] == true){
			$usuario = USER['data'];
		}

		//echo base_url("index.php/personajes/listar");
		$this->load->model("Personaje_model", "m_personaje");
		$listado = $this->m_personaje->get_simple_list(@$usuario['ID']);

		
		$html = $this->load->view('personajes/listar',["listado"=>$listado, "borrado"=>$mensaje],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function listar_all(){

		$this->load->model("Personaje_model", "m_personaje");
		$listado = $this->m_personaje->get_simple_all();
		
		$html = $this->load->view('personajes/listar',["listado"=>$listado],true);

		$this->load->view('panel',["contenido" => $html]);
	}

	public function ver($id){

		

			$this->load->model("Personaje_model", "m_personaje");
			$listado =$this->m_personaje->get($id);

			$this->load->model("Relacionados_model", "m_rel");
			$relacionados = $this->m_rel->get_join($id);

			$this->load->model("Moreinfo_model", "m_more");
			$moreinfo = $this->m_more->get_join($id);

			$html = $this->load->view('personajes/ver', ["listado" => $listado, "relacionados" => $relacionados, "moreinfo" => $moreinfo], true);
			$this->load->view('panel',['contenido' => $html]);

	}

	function pdf($id){


				$this->load->model("Personaje_model", "m_personaje");
				$listado =$this->m_personaje->get($id);

				$this->load->model("Relacionados_model", "m_rel");
				$relacionados = $this->m_rel->get_join($id);

				$this->load->model("Moreinfo_model", "m_more");
				$moreinfo = $this->m_more->get_join($id);
			
				include_once ("vendor/autoload.php");
				include_once ("application/views/personajes/ver_pdf.php");
				//$css1 = file_get_contents("bootstrap.min.css");
				//$css1 = file_get_contents("style.css");
				
				$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

				
				$ver_pdf = getTemplate($listado,$relacionados,$moreinfo);

				//$mpdf->writeHtml($css1, \Mpdf\HTMLParserMode::HEADER_CSS);
				$mpdf->writeHtml($ver_pdf, \Mpdf\HTMLParserMode::DEFAULT_MODE);

				//var_dump($mpdf);


				$mpdf->output($listado['name'].'.pdf','D');
				$html = $this->load->view('personajes/ver', ["listado" => $listado, "relacionados" => $relacionados, "moreinfo" => $moreinfo], true);
				$this->load->view('panel',['contenido' => $html]);



	}

	public function editar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}
			
		$this->load->model("Personaje_model", "m_personaje");
		$query = $this->m_personaje->get($id);

		if($this->controluser->check_ID($query["ID_user"]) == false){
			exit("NO TIENES PERMISOS");
		}

		//echo base_url("index.php/personajes/listar");
		if($this->input->post("formulario") != "OK"){

			$html = $this->load->view('personajes/editar',["listado"=>$query],true);

			$this->load->view('panel',["contenido" => $html]);

		}else{
			print_r($_FILES);
			$datos = [
				"name" => $this->input->post('name'),
				"surname" => $this->input->post('surname'),
				"sexo" => $this->input->post('sexo'),
				"identidad_genero" => $this->input->post('id_gen'),
				"fecha_nacimiento" => $this->input->post('fecha_nacimiento'),
				"profesion" => $this->input->post('profesion'),
				"altura" => $this->input->post('altura'),
				"color_pelo" => $this->input->post('color'),
				"corte_pelo" => $this->input->post('corte'),
				"color_ojos" => $this->input->post('ojos'),
				"ori_sexual" => $this->input->post('ori_sex'),
				"complexion" => $this->input->post('complexion'),
				"raza" => $this->input->post('raza'),
				"religion" => $this->input->post('religion'),
				"tipo_alimentacion" => $this->input->post('alimentacion'),
				"objetivo" => $this->input->post('objetivo'),
				"historia" => $this->input->post('historia'),
				"personalidad" => $this->input->post('personalidad'),
				"idiomas" => $this->input->post('idioma'),
				"Notas" => $this->input->post('notas'),
				"photo" => $this->input->post('imagen_defecto')
			];
			$this->editar_guardar($id,$datos);
		}
		
		
	}

	public function editar_guardar($id, $datos){
		
		print_r($_FILES);
		if(!empty($_FILES['imagen']['name'])){
			$name = sha1(microtime().$_FILES['imagen']['name'].json_encode(USER).rand(1000000,10000000));
			$complete_name = $name.".".pathinfo($_FILES["imagen"]["name"])["extension"];

			// 2º Genererar un HASH alteatorio SHA1 y añadirle "." extensión

			$url_a_guardar = "CDN/images/uploads/".$complete_name;

			echo "URL a guardar : ".$url_a_guardar;

			if (move_uploaded_file($_FILES['imagen']['tmp_name'], $url_a_guardar)) {
				if(!empty($datos["photo"])){
					unlink("CDN/images/uploads/".$datos["photo"]);
				}
				
				$mensaje2 = "El fichero es válido y se subió con éxito.\n";
			} else {
				$mensaje2 = "¡Posible ataque de subida de ficheros!.\n";
			}

			$datos["photo"] = $complete_name;
		}

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}
			
			$this->load->model('Personaje_model', "m_personaje");
			$query = $this->m_personaje->edit($id,$datos);

			if ($query >= 0){
				$mensaje = "Se ha actualizado los datos del personaje ".$id." .";
				$this->listar($mensaje.' '.$mensaje2);
			}else{
				$mensaje = "No se ha podido actualizar. Pruebe otra vez y compruebe los valores de los campos.";
				$this->listar($mensaje.' '.$mensaje2);
			}

		
	}

	public function borrar($id){

		if(USER["status"] == false){
			redirect("/Usuario/login");
			return;
		}

		$this->load->model("Personaje_model", "m_personaje");
		$query = $this->m_personaje->delete($id);

		print_r($query);

		if ($query >= 0){
			$mensaje = "Se ha borrado el personaje con el identificador. ".$id;
		
		}else{
			$mensaje = "No se ha podido borrar.";
		}

		$this->listar($mensaje);
		
	}

}
