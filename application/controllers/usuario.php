<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("usuario_model");

	}


	public function index()
	{
		$listaUsuarios=$this->usuario_model->listarUsuario();
		$data['usuario']=$listaUsuarios;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('usuario/index',$data );  
		$this->load->view('layouts/footer');
	}
	
	public function insert(){

		$data['nombres']=$_POST['txtNombres'];
		$data['primerApellido']=$_POST['txtPrimerApellido'];
		$data['segundoApellido']=$_POST['txtSegundoApellido'];
		$data['fechaNacimiento']=$_POST['txtFechaNacimiento'];
		$data['ci']=$_POST['txtCarnetIdentidad'];
		$data['genero']=$_POST['txtSexo'];
		$data['telefono']=$_POST['txtTelefono'];
		$data['email']=$_POST['txtEmail'];
		$data['login']=$_POST['txtLogin'];
		$data['contrasenia']=md5($_POST['txtContrasenia']);		
		$data['tipo']=$_POST['cbxTipo'];

		//recuperacion de datos de la imagen
		$nombreImagen=$_FILES['imagen']['name'];
		$rutaOrigen=$_FILES['imagen']['tmp_name'];
		$rutaDestino='img/'.$nombreImagen;
		copy($rutaOrigen,$rutaDestino);
		$data['foto']=$rutaDestino;


		$this->usuario_model->insert($data);
		redirect('usuario','refresh');

	}
	

	public function delete($id){
		$data = array('estado' => 0 );
		$this->usuario_model->delete($id,$data);
		redirect('usuario','refresh');
		
	}

	public function edit($id=NULL){
		//funcion GET
		if ($id!=NULL) {
			//mostrar datos
		$data['getUsuario'] = $this->usuario_model->get($id);
		//$data['empleado'] = $this->empleado_model->listarEmpleado();
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('usuario/edit',$data);
		$this->load->view('layouts/footer');
		}
		else
		{
			//regresar a index enviar parametro
			redirect('');
		}
	}

	public function getUsuario(){
		$id=$_POST['id'];
		$user= $this->usuario_model->get($id);

		echo json_encode($user->result());
	}

	
	public function update(){
		$id=$_POST['txtIdUsuario'];
		$data['nombres']=$_POST['txtNombres'];
		$data['primerApellido']=$_POST['txtPrimerApellido'];
		$data['segundoApellido']=$_POST['txtSegundoApellido'];
		$data['fechaNacimiento']=$_POST['txtFechaNacimiento'];
		$data['ci']=$_POST['txtCarnetIdentidad'];
		$data['genero']=$_POST['txtSexo'];
		$data['telefono']=$_POST['txtTelefono'];
		$data['email']=$_POST['txtEmail'];
		$data['login']=$_POST['txtLogin'];
		$data['contrasenia']=md5($_POST['txtContrasenia']);		
		$data['tipo']=$_POST['cbxTipo'];

		//recuperacion de datos de la imagen
		$nombreImagen=$_FILES['imagen']['name'];
		if($nombreImagen!==""){
		$nombreImagen=$_FILES['imagen']['name'];
		$rutaOrigen=$_FILES['imagen']['tmp_name'];
		$rutaDestino='img/'.$nombreImagen;
		copy($rutaOrigen,$rutaDestino);
		$data['foto']=$rutaDestino;
		}

		$this->usuario_model->update($id,$data);
		redirect('usuario','refresh');
	}
/* funciones que pordrian servir  
	function buscarIDiden(){
		$ID=$_POST['idj'];

		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}

   		$nombreImagen=$_FILES['imagen']['name'];
		if($nombreImagen!==""){
		$nombreImagen=$_FILES['imagen']['name'];
		$rutaOrigen=$_FILES['imagen']['tmp_name'];
		$rutaDestino='img/'.$nombreImagen;
		copy($rutaOrigen,$rutaDestino);
		$data['foto']=$rutaDestino;
		}

*/


}