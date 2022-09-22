<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends CI_Model
{
 
	public function listarCliente()
	{
		$this->db->select("c.idCliente, c.nombre as cliente, c.usuario, c.IDjugador");
		$this->db->from('cliente c');
		$this->db->where('c.estado','1');
		return $this->db->get();
	}


	public function insert($data)
	{
		$this->db->insert('cliente',$data);
	}


	public function delete($id,$data)
	{	
		$this->db->where('idCliente',$id);
		$this->db->update('cliente',$data);
	}

	public function get($id)
	{

		$this->db->select('*');
		$this->db->from('cliente c');
		$this->db->where('c.idCliente', $id);
		return $this->db->get();
	}

	public function update($id, $data)
	{
		$this->db->where('idCliente',$id);
		$this->db->update('cliente',$data);

	}

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


	
}