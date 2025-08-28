<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticar extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('autenticar/Autenticar_model');
    }


public function autenticarUsuario() {
    $id_rol = $this->input->post('id_rol');
    if ($this->input->post()) {
        $documento = $this->input->post('Documento');
        $contraseña = $this->input->post('Contraseña');

        $user = $this->Autenticar_model->autenticarUsuario($documento, $contraseña);

        if ($user) {
            if ($this->Autenticar_model->usuarioTieneRol($user->id_usuario, $id_rol)) {
                $this->session->set_userdata([
                    'id_usuario'=> $user->id_usuario,
                    'nombre' => $user->nombre,
                    'apellido' => $user->apellido,
                    'documento'  => $user->documento,
                    'id_rol' => $id_rol,
                    'logueado' => TRUE
                ]);
                redirect('Welcome/dashboard/'.$id_rol);
            } else {
                $data['error'] = "El usuario no tiene el rol seleccionado.";
                $data['id_rol'] = $id_rol;
                $this->load->view('inicio', $data);
            }
        } else {
            $data['error'] = "Usuario o contraseña incorrecta";
            $data['id_rol'] = $id_rol;
            $this->load->view('inicio', $data);
            $this->load->view('fijos/footer');
        }
    }
}

    public function login_form(){
        $this->load->view('login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}
