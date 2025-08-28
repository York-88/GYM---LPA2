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

        // Dashboard del cliente: envía rutinas y entrenadores a la vista
        public function dashboardCliente() {
            $data = array();
            // Rutinas asignadas al cliente
            $data['rutinas_asignadas'] = $this->Obtener_rutinas->obtenerRutinas();
            // Todas las rutinas para el select
            $data['todas_rutinas'] = $this->Obtener_rutinas->obtenerTodasRutinas();
            if (property_exists($this, 'Obtener_entrenadores')) {
                $data['entrenadores'] = $this->Obtener_entrenadores->obtenerEntrenadores();
            }
            $this->load->view('dashboard', $data);
        }
}


