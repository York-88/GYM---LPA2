<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modificar extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('modificar/Modificar_modelo');
        $this->load->model('obtener/ObtenerUsuarioModel');
        $this->load->model('obtener/Obtener_ejercicios');
    }


    public function editar($id_usuario) {
        $usuario['usuario'] = $this->ObtenerUsuarioModel->obtenerUsuarioPorId($id_usuario);
        $usuario['id_usuario'] = $id_usuario;
        if (!$usuario) {
            show_error("El usuario no existe");
        }
        $this->load->view('fijos/head_login');
        $this->load->view('usuario/actualizar', $usuario);
        $this->load->view('fijos/footer');
    }


    public function editarUsuario() {
        $id_usuario = $this->input->post('id_usuario');
        $datos = [
            'documento'        => $this->input->post('documentoUsuario'),
            'nombre'           => $this->input->post('nombreUsuario'),
            'apellido'         => $this->input->post('apellidoUsuario'),
            'direccion'        => $this->input->post('direccionUsuario'),
            'telefono'         => $this->input->post('telefonoUsuario'),
            'salario'          => $this->input->post('salarioUsuario'),
            'inicio_contrato'  => $this->input->post('fechaInicio'),
            'fin_contrato'     => $this->input->post('fechaFinalizacion')
        ];
        $nueva_contraseña = $this->input->post('contraseñaUsuario');
        if (!empty($nueva_contraseña)) {
            $datos['contraseña'] = sha1($nueva_contraseña);
        }
        $this->Modificar_modelo->editarUsuario($id_usuario, $datos);
        $this->session->set_flashdata('mensaje', 'Usuario editado correctamente.');
        redirect('Welcome/dashboard');
    }

    public function eliminarUsuario() {
        $id_usuario = $this->uri->segment(3);
        $this->Modificar_modelo->eliminarUsuario($id_usuario);
        $this->session->set_flashdata('mensaje', 'Usuario eliminado correctamente.');
        redirect('welcome/dashboard');
    }

    public function editarEjercicio($id_ejercicio) {
        $ejercicio['ejercicio'] = $this->Obtener_ejercicios->obtenerEjercicioPorId($id_ejercicio);
        if ($this->input->post()) {
            $datos = [
                'nombre_ejercicio' => $this->input->post('nombre'),
                'objetivo'         => $this->input->post('descripcion')
            ];
            $this->Modificar_modelo->editarEjercicio($id_ejercicio, $datos);
            $this->session->set_flashdata('mensaje', 'Ejercicio editado correctamente.');
            redirect('Obtener/obtenerEjercicios');
        }

        $ejercicio['id_ejercicio'] = $id_ejercicio;
        if (!$ejercicio) {
            show_error("El ejercicio no existe");
        }
        $this->load->view('fijos/head_login');
        $this->load->view('rutinas/actualizar_ejercicio', $ejercicio);
        $this->load->view('fijos/footer');
    }
    public function eliminarEjercicio() {
        $id_ejercicio = $this->uri->segment(3);
        $this->Modificar_modelo->eliminarEjercicio($id_ejercicio);
        $this->session->set_flashdata('mensaje', 'Ejercicio eliminado correctamente.');
        redirect('Obtener/obtenerEjercicios');
    }

}
