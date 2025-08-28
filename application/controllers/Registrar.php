<?php

use Dom\Document;

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Registrar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('registro_usuario/RegistroModel');
		$this->load->model('obtener/ObtenerRolesModel');
		
	}

    public function registrarUsuario() {
		
		if ($this->input->post()) {

			$usuario = array(
				'Documento' => $this->input->post('documentoUsuario'),
				'Nombre'=> $this->input->post('nombreUsuario'),
				'Apellido' => $this->input->post('apellidoUsuario'),
				'Direccion' => $this->input->post('direccionUsuario'),
				'Salario' => $this->input->post('salarioUsuario'),
				'Inicio_contrato' => $this->input->post('fechaInicio'),
				'fin_contrato' => $this->input->post('fechaFinalizacion'),
				'Telefono' => $this->input->post('telefonoUsuario'),
				'Contraseña' => sha1($this->input->post('contraseñaUsuario'))
			);

			$rol = array(
				'Id_rol' => $this->input->post('rolUsuario')
			);


			if ($this->RegistroModel->agregarUsuario($usuario,$rol)) {
				$this->session->set_flashdata('mensaje', 'Usuario registrado con éxito ✅');
			} else {
				$this->session->set_flashdata('mensaje', 'Error al registrar ❌');
			}

			if ($this->session->userdata('logueado')) {
				redirect('Welcome/dashboard');
			} else {
				redirect('Welcome');
			}

		} else {
			$roles['roles'] = $this->ObtenerRolesModel->obtenerRoles();
			$roles['id_rol_especifico'] = $this->uri->segment(3);

			if ($this->session->userdata('logueado')) {
				$this->load->view('fijos/head_login',$roles);
			} else {
				$this->load->view('fijos/head',$roles);
			}
			
			
			$this->load->view('usuario/registro',$roles);
		}
		
	}
	public function registrarRutina() {

		if ($this->input->post()) {

			$rutina = array(
				'grupo_muscular' => $this->input->post('grupo_muscular'),
				'objetivo' => $this->input->post('objetivo')
			);

			if ($this->RegistroModel->agregarRutina($rutina)) {
				$this->session->set_flashdata('mensaje', 'Rutina registrada con éxito ✅');
			} else {
				$this->session->set_flashdata('mensaje', 'Error al registrar ❌');
			}

			redirect('Welcome/dashboard');

		} else {
			$this->load->view('fijos/head_login');
			$this->load->view('rutinas/registrar_rutina');
			$this->load->view('fijos/footer');
		}
		
	}
	public function registrarEjercicio() {




	public function listar() {

		$this->load->view('fijos/head');
		$this->load->view('usuario/lista');
		
    }

}

