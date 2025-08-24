<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Autenticar_model extends CI_Model {
        
        public function __construct() {
        parent::__construct();
        
        }

        public function autenticarUsuario($documento, $contraseña) {

            $contraseña_encriptada = sha1($contraseña);

            $this->db->where('documento',$documento);
            $this->db->where('contraseña',$contraseña_encriptada);
            //$this->db->where('id_rol', $id_rol);
            $query = $this->db->get('usuarios');
            return $query->row();
        }

        public function usuarioTieneRol($id_usuario, $id_rol) {
            
            $this->db->where('id_usuario', $id_usuario);
            $this->db->where('id_rol', $id_rol);
            $query = $this->db->get('detalle_usuario');
            return $query->num_rows() > 0;
        }
    }


?>