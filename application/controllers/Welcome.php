<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 public function __construct() {
        parent::__construct();
		$this->load->model('obtener/Obtener_rutinas');
        $this->load->model('obtener/ObtenerRolesModel');
		$this->load->model('obtener/ObtenerUsuarioModel');
		$this->load->helper('form');
    }
	 public function index(){

		$roles['roles'] = $this->ObtenerRolesModel->obtenerRoles();
		$this->load->view('fijos/head',$roles);
		$this->load->view('login',$roles);
		$this->load->view('fijos/footer');
		
	}
	public function inicio(){

		$usuario['usuario'] = $this->ObtenerUsuarioModel->obtenerUsuario();
		$id_rol['id_rol'] = $this->uri->segment(3); 
		$this->load->view('inicio', $id_rol, $usuario);
		$this->load->view('fijos/footer');

	}

	public function planes(){
		
		$roles['roles'] = $this->ObtenerRolesModel->obtenerRoles();

		$this->load->view('fijos/head',$roles);
		$this->load->view('planes',$roles);
		$this->load->view('fijos/footer');
		
	}

	public function dashboard() {
		
	$data = array();
	$data['roles'] = $this->ObtenerRolesModel->obtenerRoles();
	$data['empleados'] = $this->ObtenerUsuarioModel->obtenerEmpleados();
	$data['clientes'] = $this->ObtenerUsuarioModel->obtenerClientes();
	$data['entrenadores'] = $this->ObtenerUsuarioModel->obtenerEntrenadores();
	// Rutinas asignadas y todas las rutinas para compatibilidad con dashboard cliente
	$data['rutinas_asignadas'] = $this->Obtener_rutinas->obtenerRutinas();
	$data['todas_rutinas'] = $this->Obtener_rutinas->obtenerTodasRutinas();
	// Citas agendadas del usuario
	$id_usuario = $this->session->userdata('id_usuario');
	$this->load->model('Cliente_citas_model');
	$data['citas_agendadas'] = $this->Cliente_citas_model->obtenerCitasPorUsuario($id_usuario);
	$this->load->view('fijos/head_login',$data);
	$this->load->view('dashboard',$data);
	$this->load->view('fijos/footer');
	}

	public function actualizar() {
		$usuario['roles'] = $this->ObtenerRolesModel->obtenerRoles();
		$usuario['usuario'] = $this->ObtenerUsuarioModel->obtenerUsuario();
		$this->load->view('fijos/head_login',$usuario);
		$this->load->view('usuario/actualizar',$usuario);
		$this->load->view('fijos/footer');

	}

	
	
}
