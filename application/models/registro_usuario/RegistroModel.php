<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    function agregarUsuario($usuario,$rol) {
        $this->db->insert('usuarios',$usuario);

        $id_usuario = $this->db->insert_id();
        $id_rol = $rol['Id_rol'];   
        if ($id_usuario) {
            $usuario_detalle = array(
                'id_usuario' => $id_usuario,
                'id_rol'=> $id_rol
            );
            $this->db->insert('detalle_usuario',$usuario_detalle);
        
            return TRUE;
        }   
    }
}
?>