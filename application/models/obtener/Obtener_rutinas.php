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

	public function obtenerRutinaPorId($id_rutina){
		$this->db->where('id_rutina', $id_rutina);
		$query = $this->db->get('rutinas');

		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return null;
		}
	}

	public function obtenerInfoRutinaPorId($id_rutina){
		$this->db->select('detalle_rutina.id_nivel, niveles.nivel, detalle_rutina.id_ejercicio, ejercicios.nombre_ejercicio');
		$this->db->from('detalle_rutina');
		$this->db->join('ejercicios', 'ejercicios.id_ejercicio = detalle_rutina.id_ejercicio');
		$this->db->join('niveles', 'niveles.id_nivel = detalle_rutina.id_nivel');
		$this->db->where('detalle_rutina.id_rutina', $id_rutina);
		$query = $this->db->get();
		return $query->result();
	}
	public function getDetallesPorRutinaYNivel($id_rutina, $id_nivel) {
		$this->db->select('ejercicios.nombre_ejercicio, niveles.nombre_nivel');
		$this->db->from('detalle_rutina');
		$this->db->join('ejercicios', 'ejercicios.id_ejercicio = detalle_rutina.id_ejercicio');
		$this->db->join('niveles', 'niveles.id_nivel = detalle_rutina.id_nivel');
		$this->db->where('detalle_rutina.id_rutina', $id_rutina);
		$this->db->where('detalle_rutina.id_nivel', $id_nivel);
		return $this->db->get()->result();
	}

	public function getRutina($id_rutina) {
		return $this->db->get_where('rutinas', ['id_rutina' => $id_rutina])->row();
	}

	public function getNivel($id_nivel) {
		return $this->db->get_where('niveles', ['id_nivel' => $id_nivel])->row();
	}

}
?>