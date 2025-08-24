<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObtenerUsuarioModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function obtenerUsuario(){

		$query = $this->db->get('usuarios');
        return $query->result();
	}

    public function obtenerUsuarioPorId($id_usuario){
        $this->db->where('id_usuario', $id_usuario);
        $query = $this->db->get('usuarios');
        return $query->row();
    }
    
    public function obtenerEmpleados() {
        
        $this->db->select('u.*');
        $this->db->from('usuarios u');
        $this->db->join('detalle_usuario du', 'du.id_usuario = u.id_usuario');
        $this->db->where('du.id_rol', "4");
        $query = $this->db->get();
        return $query->result();
    }
    public function obtenerClientes() {
        
        $this->db->select('u.*');
        $this->db->from('usuarios u');
        $this->db->join('detalle_usuario du', 'du.id_usuario = u.id_usuario');
        $this->db->where('du.id_rol', "3");
        $query = $this->db->get();
        return $query->result();
    }
    public function obtenerEntrenadores() {
        
        $this->db->select('u.*');
        $this->db->from('usuarios u');
        $this->db->join('detalle_usuario du', 'du.id_usuario = u.id_usuario');
        $this->db->where('du.id_rol', "2");
        $query = $this->db->get();
        return $query->result();
    }

}


?>