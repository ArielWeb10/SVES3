<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Venta extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("usuario_model");
		//$this->load->model("empleado_model");
		$this->load->model("venta_model");
	}


	public function index()
	{
		$listaUsuarios = $this->usuario_model->listarUsuario();
		//$listaEmpleados = $this->usuario_model->listarEmpleado();
		$data['usuario'] = $listaUsuarios;
		//$data['empleado'] = $listaEmpleados;
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('venta/index', $data);
		$this->load->view('layouts/footer');
	}
	public function buscar_en_bd_cliente()
	{

		// aca empieza

		$palabra_buscar = $_POST['palabra'];

		$data = array(
			"opcion" => "buscadorCliente",
			"clientes" => $this->venta_model->buscar($palabra_buscar),

		);
		$this->load->view('venta/VO_venta', $data);
	}
	public function buscar_en_bd_producto()
	{

		// aca empieza

		$palabra_buscar = $_POST['palabraProducto'];

		$data = array(
			"opcion" => "buscadorProducto",
			"productos" => $this->venta_model->buscarProducto($palabra_buscar),

		);
		$this->load->view('venta/VO_venta', $data);
	}
	/*----------------------------------------------------------------
	public function insert(){
		$data['idEmpleado']=$_POST['cbxEmpleado'];
		$data['foto']=$_POST['txtFoto'];
		$data['login']=$_POST['txtLogin'];
		$data['contrasenia']=$_POST['txtContrasenia'];		
		$data['tipo']=$_POST['txtTipo'];
		
		
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
			$data['empleado'] = $this->empleado_model->listarEmpleado();
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
	
	public function update(){
		$id=$_POST['txtIdUsuario'];
		$data['idEmpleado']=$_POST['cbxEmpleado'];
		$data['foto']=$_POST['txtFoto'];
		$data['login']=$_POST['txtLogin'];
		$data['contrasenia']=$_POST['txtContrasenia'];		
		$data['tipo']=$_POST['txtTipo'];
		
		$this->usuario_model->update($id,$data);
		redirect('usuario','refresh');
	}
	*/
	/* funciones que pordrian servir  
	function buscarIDiden(){
		$ID=$_POST['idj'];
		
		$result=$this->clienteModel->buscarIDiden($ID);
		echo json_encode($result);
	}
	
	*/
}
