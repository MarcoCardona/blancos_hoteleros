<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Carga el modelo 'UsuariosModel'
        $this->load->library('session');
        $this->load->model('UsuariosModel');
    }

    public function mostrar_login()
    {
        // Muestra la vista del formulario de login (login_view.php)
        $this->load->view('admin/usuarios/login');
    }



    public function validarLogin()
    {
        // Recibe los datos del formulario de login
        $usuario = $this->input->post('usuario');
        $contrasena = sha1($this->input->post('contrasena')); // Se asume que la contraseña está en SHA1 en la base de datos

        // Realiza la validación en la base de datos usando el modelo UsuariosModel
        $loginExitoso = $this->UsuariosModel->validarCredenciales($usuario, $contrasena);

        // Verifica si las credenciales son válidas y envía una respuesta JSON
        if ($loginExitoso) {
            $this->session->set_userdata('bh_sesion', array("usuario" => $usuario));
            $response['success'] = true;
            $response['message'] = 'Inicio de sesión exitoso';
            echo json_encode($response);
        } else {
            $response['success'] = false;
            $response['message'] = 'Usuario o contraseña incorrectos';
            echo json_encode($response);
        }
    }

    // Otros métodos del CRUD de usuarios (ejemplo: agregar, editar, eliminar, listar) pueden ir aquí
}
