<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = "usuarios";
    }

    public function validarCredenciales($user, $password)
    {
        // Consulta para obtener un usuario por nombre de usuario y contraseña (asumiendo que 'usuarios' es tu tabla)
        $this->db->where('user', $user);
        $this->db->where('password', $password);
        $query = $this->db->get($this->tabla);

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Otros métodos CRUD para los usuarios pueden ir aquí (ejemplo: agregar, editar, eliminar, listar)
}
