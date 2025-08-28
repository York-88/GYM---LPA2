<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Obtener_rutinas extends CI_Model {

	public function __construct() {
		parent::__construct();
	}


	public function obtenerRutinas() {
		$this->db->select('rutinas.*, asignacion_rutina.fecha_asignacion, usuarios.nombre AS nombre_entrenador');
		$this->db->from('rutinas');
		$this->db->join('asignacion_rutina', 'rutinas.id_rutina = asignacion_rutina.id_rutina', 'left');
		$this->db->join('usuarios', 'asignacion_rutina.id_entrenador = usuarios.id_usuario', 'left');
		 $this->db->join('detalle_usuario', 'usuarios.id_usuario = detalle_usuario.id_usuario', 'left');
		$this->db->where('detalle_usuario.id_rol', 2);
		$query = $this->db->get();
		return $query->result();
	}

	public function obtenerInfoRutinaPorId($id_rutina){
        $this->db->where('id_rutina', $id_rutina);
        $query = $this->db->get('detalle_rutina');
        return $query->result();
    }

	public function obtenerTodasRutinas() {
	$query = $this->db->get('rutinas');
	error_log('Consulta obtenerTodasRutinas ejecutada');
	error_log('Num rows: ' . $query->num_rows());
	error_log('Resultado: ' . print_r($query->result(), true));
	return $query->result();
    }
}
?>