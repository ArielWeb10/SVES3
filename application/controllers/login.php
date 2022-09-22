<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Comunicacion con el modelo
		$this->load->model("usuario_model");
	}


	public function index()
	{
		$data['msg']=$this->uri->segment(3);
		if ($this->session->userdata('usuario')) 
		{
			redirect('usuario','refresh'); // aqui entraba panel (login/panel)
		}
		else
		{
			$this->load->view('login/index',$data);
		}

	}

	public function validarusuario()
	{
		$usuario=$_POST['txtLogin'];
		$clave=md5($_POST['txtClave']);
		//$clave=$_POST['txtClave'];
		
		$consulta=$this->usuario_model->validarUsuario($usuario,$clave);
		if ($consulta->num_rows()>0) 
		{
			foreach ($consulta->result() as $row) 
			{
				$this->session->set_userdata('idUsuario',$row->idUsuario);
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);
				$this->session->set_userdata('foto',$row->foto);
				//redirect('login/panel','refresh');// sesion exitosa
				
				redirect('usuario','refresh');
			}
		}
		else
		{
			//redirect('login/index/1','refresh'); // del ing Pavel
			//redirect('login','refresh');
			header("location: login?fallo=true");
			//$data['msg']="Error de entrada";
			//$this->load->view('login/login',$data);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
		//redirect('login/index/3','refresh');

	}

	/*
	public function panel()
	{
		if ($this->session->userdata('usuario')) 
		{
			$this->load->view('inic/header'); 
			$this->load->view('tablero/index');
			$this->load->view('inic/footer');
			
		}
		else
		{
			//$this->load->view('loginform',$data);
			//redirect('login/index/2','refresh');
			redirect('login','refresh');
		}

	}




*/



}

