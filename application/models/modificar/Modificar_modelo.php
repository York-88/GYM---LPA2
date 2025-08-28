<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modificar_modelo extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function editarUsuario($id_usuario, $datos) {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->update('usuarios', $datos);
    }
    
    public function eliminarUsuario($id_usuario) {
        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('usuarios', ['estado' => 0]);
        
    }

    public function editarEjercicio($id_ejercicio, $datos) {
        $this->db->where('id_ejercicio', $id_ejercicio);
        return $this->db->update('ejercicios', $datos);
    }
    public function eliminarEjercicio($id_ejercicio) {
        $this->db->where('id_ejercicio', $id_ejercicio);
        $this->db->update('ejercicios', ['estado' => 0]);
    }

}  