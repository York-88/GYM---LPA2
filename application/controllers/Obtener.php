<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obtener extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('obtener/ObtenerRolesModel');
        
    }

	public function obtenerRoles(){

        $roles['roles'] = $this->ObtenerRolesModel->obtenerRoles();
        $this->load->view('fijos/head', $roles);
	}

    
	
}
