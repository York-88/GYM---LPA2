<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Obtener_rutinas extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function obtenerRutinas() {
        
		$query = $this->db->get('rutinas');
		return $query->result();
	}
}
?>