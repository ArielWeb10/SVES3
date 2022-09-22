<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("categoria_model");
	}


	public function index()
	{
		//$listaProductos=$this->producto_model->listarProducto();
		$listaCategoria=$this->categoria_model->listarCategoria();
		//$listaMarca=$this->producto_model->listarMarca();
		//$data['productos']=$listaProductos;
		$data['categoria']=$listaCategoria;
		//$data['marcas']=$listaMarca;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('categoria/index',$data );  
		$this->load->view('layouts/footer');
	}


	
	public function insert(){
		$data['nombreCategoria']=$_POST['txtNombreCategoria'];
		//$data['FechaRegistro']=$_POST['txtFechaRegistro'];
	
		$this->categoria_model->insert($data);
		redirect('categoria','refresh');

	}
	

	public function delete($id){
		$data = array('estado' => 0 );
		$this->categoria_model->delete($id,$data);
		redirect('categoria','refresh');
		
	}


	public function edit($id=NULL){
		//funcion GET
		if ($id!=NULL) {
			//mostrar datos
		$data['getCategoria'] = $this->categoria_model->get($id);
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('categoria/edit',$data);
		$this->load->view('layouts/footer');
		}
		else
		{
			//regresar a index enviar parametro
			redirect('');
		}
	}
	
  	public function update(){
		$id=$_POST['txtIdCategoria'];
		$data['nombreCategoria']=$_POST['txtNombreCategoria'];
		//$data['fechaRegistro']=$_POST['txtFechaRegistro'];

		$this->categoria_model->update($id,$data);
		redirect('categoria','refresh');
	}
/* funciones que pordrian servir  
	function buscarIDiden(){
		$ID=$_POST['idj'];

		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}

*/


}