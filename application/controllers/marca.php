<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marca extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("marca_model");
	}


	public function index()
	{
		//$listaProductos=$this->producto_model->listarProducto();
		$listaMarca=$this->marca_model->listarMarca();
		//$listaMarca=$this->producto_model->listarMarca();
		//$data['productos']=$listaProductos;
		$data['marcas']=$listaMarca;
		//$data['marcas']=$listaMarca;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('marca/index',$data );  
		$this->load->view('layouts/footer');
	}


	
	public function insert(){
		$data['nombreMarca']=$_POST['txtNombreMarca'];
		//$data['FechaRegistro']=$_POST['txtFechaRegistro'];
	
		$this->marca_model->insert($data);
		redirect('marca','refresh');

	}
	

	public function delete($id){
		$data = array('estado' => 0 );
		$this->marca_model->delete($id,$data);
		redirect('marca','refresh');
		
	}


	public function edit($id=NULL){
		//funcion GET
		if ($id!=NULL) {
			//mostrar datos
		$data['getMarca'] = $this->marca_model->get($id);
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('marca/edit',$data);
		$this->load->view('layouts/footer');
		}
		else
		{
			//regresar a index enviar parametro
			redirect('');
		}
	}
	
  	public function update(){
		$id=$_POST['txtIdMarca'];
		$data['nombreMarca']=$_POST['txtNombreMarca'];
		//$data['FechaRegistro']=$_POST['txtFechaRegistro'];

		$this->marca_model->update($id,$data);
		redirect('marca','refresh');
	}
/* funciones que pordrian servir  
	function buscarIDiden(){
		$ID=$_POST['idj'];

		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}

*/


}