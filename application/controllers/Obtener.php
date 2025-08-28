<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obtener extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('obtener/ObtenerRolesModel');
        $this->load->model('obtener/Obtener_ejercicios');
        $this->load->model('obtener/Obtener_rutinas');
    }

	public function obtenerRoles(){

        $roles['roles'] = $this->ObtenerRolesModel->obtenerRoles();
        $this->load->view('fijos/head', $roles);
	}

    public function obtenerEjercicios(){

        $ejercicios['ejercicios'] = $this->Obtener_ejercicios->obtenerEjercicios();
        $this->load->view('fijos/head_login', $ejercicios);
        $this->load->view('rutinas/ejercicio', $ejercicios);
        $this->load->view('fijos/footer');
	}

    public function obtenerRutinas(){
        $rutinas['rutinas'] = $this->Obtener_rutinas->obtenerRutinas();
        $this->load->view('fijos/head_login');
        $this->load->view('rutinas/rutinas', $rutinas);
        $this->load->view('fijos/footer');
    }

    
	
}
