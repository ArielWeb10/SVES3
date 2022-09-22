<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("producto_model");
	}


	public function index()
	{
		$listaProductos=$this->producto_model->listarProducto();
		$listaCategoria=$this->producto_model->listarCategoria();
		$listaMarca=$this->producto_model->listarMarca();
		$data['producto']=$listaProductos;
		$data['categorias']=$listaCategoria;
		$data['marcas']=$listaMarca;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('producto/index',$data );  
		$this->load->view('layouts/footer');
	}


	
	public function insert(){
		$data['codigo']=$_POST['txtCodigo'];
		$data['nombreProducto']=$_POST['txtNombreProducto'];
		$data['precioNormal']=$_POST['txtPrecioNormal'];		
		$data['stock']=$_POST['txtStock'];
		$data['descripcion']=$_POST['txtDescripcion'];
		$data['idCategoria']=$_POST['cbxCategoria'];
		$data['idMarca']=$_POST['cbxMarca'];

		$this->producto_model->insert($data);
		redirect('producto','refresh');

	}
	

	public function delete($id){
		$data = array('estado' => 0 );
		$this->producto_model->delete($id,$data);
		redirect('producto','refresh');
		
	}


	public function edit($id=NULL){
		//funcion GET
		if ($id!=NULL) {
			//mostrar datos
		$data['getProducto'] = $this->producto_model->get($id);
		$listaCategoria=$this->producto_model->listarCategoria();
		$listaMarca=$this->producto_model->listarMarca();
		$data['categorias']=$listaCategoria;
		$data['marcas']=$listaMarca;
		$this->load->view('layouts/header'); 
		$this->load->view('layouts/aside'); 
		$this->load->view('producto/edit',$data);
		$this->load->view('layouts/footer');
		}
		else
		{
			//regresar a index enviar parametro
			redirect('');
		}
	}
	
  
	public function update(){
		$id=$_POST['txtIdProducto'];
		$data['codigo']=$_POST['txtCodigo'];
		$data['nombreProducto']=$_POST['txtNombreProducto'];
		$data['precioNormal']=$_POST['txtPrecioNormal'];		
		$data['stock']=$_POST['txtStock'];
		$data['descripcion']=$_POST['txtDescripcion'];
		$data['idCategoria']=$_POST['cbxCategoria'];
		$data['idMarca']=$_POST['cbxMarca'];

		$this->producto_model->update($id,$data);
		redirect('producto','refresh');
	}
/* funciones que pordrian servir  
	function buscarIDiden(){
		$ID=$_POST['idj'];

		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}

*/


}