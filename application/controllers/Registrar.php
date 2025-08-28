<?php

use Dom\Document;

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Registrar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('registro_usuario/RegistroModel');
		$this->load->model('obtener/ObtenerRolesModel');
		$this->load->model('registro_usuario/RegistrarEjercicio_model');
		$this->load->model('obtener/Obtener_ejercicios');
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

			$id_rutina = $this->RegistroModel->agregarRutina($rutina);

			if ($id_rutina) {
				$this->session->set_flashdata('mensaje', 'Rutina registrada con éxito ✅');
				$this->session->set_userdata('id_rutina', $id_rutina);
				redirect('Registrar/registrarDetallesRutina/'. $id_rutina);
			} else {
				$this->session->set_flashdata('mensaje', 'Error al registrar ❌');
				redirect('Obtener/obtenerRutinas');
			}
		} else {
			$this->load->view('fijos/head_login');
			$this->load->view('rutinas/agregar_rutina');
			$this->load->view('fijos/footer');
		}
	}

		public function registrarDetallesRutina($id_rutina = null) {
			if ($this->input->post()) {
				$id_rutina = $this->input->post('id_rutina');
				$ejercicios = $this->input->post('ejercicios');
				$niveles = $this->input->post('niveles');

				if (!empty($ejercicios)) {
					foreach ($ejercicios as $id_ejercicio) {
						$detalle = [
							'id_rutina'    => $id_rutina,
							'id_ejercicio' => $id_ejercicio,
							'id_nivel'     => isset($niveles[$id_ejercicio]) ? $niveles[$id_ejercicio] : null
						];
						$this->db->insert('detalle_rutina', $detalle);
					}
					$this->session->set_flashdata('mensaje', 'Ejercicios agregados a la rutina correctamente.');
				} else {
					$this->session->set_flashdata('mensaje', 'Debes seleccionar al menos un ejercicio.');
				}
				redirect('Obtener/obtenerRutinas');
			} else {
				$data['id_rutina'] = $id_rutina;
				$data['ejercicios'] = $this->Obtener_ejercicios->obtenerEjercicios();
				$data['niveles'] = $this->Obtener_ejercicios->obtenerNiveles();
				$this->load->view('fijos/head_login');
				$this->load->view('rutinas/agregar_detalles', $data);
				$this->load->view('fijos/footer');
			}
		}

		public function editarRutina(){
			$id_rutina = $this->db->insert_id();
			
		}
		

	public function registrarEjercicio() {

		if ($this->input->post()) {

			$ejercicio = array(
				'nombre_ejercicio' => $this->input->post('nombre_ejercicio'),
				'objetivo' => $this->input->post('objetivo')
			);

			if ($this->RegistrarEjercicio_model->agregarEjercicio($ejercicio)) {
				$this->session->set_flashdata('mensaje', 'Ejercicio registrado con éxito ✅');
			} else {
				$this->session->set_flashdata('mensaje', 'Error al registrar ❌');
			}

			redirect('Obtener/obtenerEjercicios');

		} else {
			$this->load->view('fijos/head_login');
			$this->load->view('rutinas/registrar_ejercicio');
			$this->load->view('fijos/footer');
		}

	}

	public function listar() {

		$this->load->view('fijos/head');
		$this->load->view('usuario/lista');
		
    }

}

