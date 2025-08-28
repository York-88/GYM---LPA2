<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrarEjercicio_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function agregarEjercicio($ejercicio) {
        $this->db->insert('ejercicios', $ejercicio);
        return $this->db->insert_id();
    }

    public function agregarEjerciciosRutina($id_rutina, $ejercicios, $niveles) {
        foreach ($ejercicios as $id_ejercicio) {
            $detalle = [
                'id_rutina'    => $id_rutina,
                'id_ejercicio' => $id_ejercicio,
                'id_nivel'     => isset($niveles[$id_ejercicio]) ? $niveles[$id_ejercicio] : null
            ];
            $this->db->insert('detalle_rutina', $detalle);
        }
    }
}
?>
