<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ayuda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		///$this->load->model("clienteModel");
	}


	public function index()
	{
		//$listaClientes=$this->clienteModel->listarCliente();
		//$data['clientes']=$listaClientes;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('cliente/index'); // ,$data  
		$this->load->view('layouts/footer');
	}

/* funciones que pordrian servir
	
	public function insert(){
		$data['nombre']=$_POST['txtNombre'];
		$data['usuario']=$_POST['txtUsuario'];
		$data['IDjugador']=$_POST['txtIDjugador'];

		$this->clienteModel->insert($data);
		redirect('cliente','refresh');

	}

	public function delete($id){
		$data = array('estado' => 0 );
		$this->clienteModel->delete($id,$data);
		redirect('cliente','refresh');
		
	}


	public function edit($id=NULL){
		//funcion GET
		if ($id!=NULL) {
			//mostrar datos
		$data['getCliente'] = $this->clienteModel->get($id);
		$this->load->view('layoutsV/header'); 
		$this->load->view('layoutsV/aside'); 
		$this->load->view('cliente/edit',$data);
		$this->load->view('layoutsV/footer');
		}
		else
		{
			//regresar a index enviar parametro
			redirect('');
		}
	}


	public function update(){
		$id=$_POST['txtID'];
		$data['nombre']=$_POST['txtNombre'];
		$data['usuario']=$_POST['txtUsuario'];
		$data['IDjugador']=$_POST['txtIDjugador'];

		$this->clienteModel->update($id,$data);
		redirect('cliente','refresh');
	}

	function buscarIDiden(){
		$ID=$_POST['idj'];

		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}

*/


}