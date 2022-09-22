<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model
{
 
	public function listarUsuario()
	{

		$this->db->select("*"); //select*
		$this->db->from('usuario u');
		$this->db->where('u.estado','1');
		
		
		return $this->db->get();	//devolucion del resultado de la consulta
	}


	public function insert($data)
	{
		$this->db->insert('usuario',$data);
	}

	public function delete($id,$data)
	{	
		$this->db->where('idUsuario',$id);
		$this->db->update('usuario',$data);
	}
	
	public function get($id)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idUsuario', $id);
		return $this->db->get();
	}
	
	public function update($id, $data)
	{
		$this->db->where('idUsuario',$id);
		$this->db->update('usuario',$data);
	}

	public function validarUsuario($login,$clave)
	{
		$this->db->select('*');
		$this->db->from('usuario u');
		$this->db->where('u.login',$login);
		$this->db->where('u.contrasenia',$clave);
		$this->db->where('u.estado',1);
		return $this->db->get();

	}

/*
	public function buscarID($ID)
	{
		$this->db->like('IDjugador',$ID);
		$this->db->or_like('nombre',$ID);
		$this->db->or_like('usuario',$ID);
		$query = $this->db->get('cliente');
		return $query->result();
	}

	public function buscarIDiden($ID)
	{
		$this->db->select('*');
		$this->db->from('cliente c');
		$this->db->where('c.IDjugador', $ID);
		$this->db->where('c.estado', 1);
		return $this->db->get()->result();
	}

*/
	
}


//idUsuario,e.nombres,foto,login,password,tipo, DATE_FORMAT((fechaRegistro),('%d/%m/%Y')) as fechaRegistro, DATE_FORMAT((fechaActualizacion),('%d/%m/%Y')) as fechaActualizacion