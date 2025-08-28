<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obtener_ejercicios extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtenerEjercicios(){

        $query = $this->db->get('ejercicios');
        return $query->result();
    }

    public function obtenerEjercicioPorId($id_ejercicio){
        $this->db->where('id_ejercicio', $id_ejercicio);
        $query = $this->db->get('ejercicios');
        return $query->row();
    }

    public function obtenerInfoRutina($id_rutina){
        $this->db->where('id_rutina', $id_rutina);
        $query = $this->db->get('detalle_rutina');
        return $query->row();
    }
    public function obtenerNiveles(){
        $query = $this->db->get('niveles');
        return $query->result();
    }

}

?>