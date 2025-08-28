<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('obtener/Obtener_rutinas');
        $this->load->model('Cliente_citas_model');
    }

    // Método para agendar cita
    public function escogerCita() {
        $id_usuario = $this->session->userdata('id_usuario');
        $id_rutina = $this->input->post('rutina');
        $id_entrenador = $this->input->post('entrenador');
        $fecha = $this->input->post('fecha');
        $this->Cliente_citas_model->agendarCita($id_usuario, $id_rutina, $id_entrenador, $fecha);
        redirect('Welcome/dashboard');
    }
}
