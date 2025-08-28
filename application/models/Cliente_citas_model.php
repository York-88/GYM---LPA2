<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_citas_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function agendarCita($id_usuario, $id_rutina, $id_entrenador, $fecha) {
        if (empty($id_usuario)) {
            error_log('Error: id_cliente es nulo al agendar cita');
            return false;
        }
        $data = array(
            'id_cliente' => $id_usuario,
            'id_rutina' => $id_rutina,
            'id_entrenador' => $id_entrenador,
            'fecha_asignacion' => $fecha
        );
        $this->db->insert('asignacion_rutina', $data);
    }

    public function obtenerCitasPorUsuario($id_usuario) {
        $this->db->select('asignacion_rutina.*, rutinas.grupo_muscular, usuarios.nombre AS nombre_entrenador');
        $this->db->from('asignacion_rutina');
        $this->db->join('rutinas', 'asignacion_rutina.id_rutina = rutinas.id_rutina', 'left');
        $this->db->join('usuarios', 'asignacion_rutina.id_entrenador = usuarios.id_usuario', 'left');
        $this->db->where('asignacion_rutina.id_cliente', $id_usuario);
        $query = $this->db->get();
        return $query->result();
    }
}
