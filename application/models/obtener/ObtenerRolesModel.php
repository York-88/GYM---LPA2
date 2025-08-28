<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObtenerRolesModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function obtenerRoles(){

		$query = $this->db->get('roles');
        return $query->result();
	}

}

?>