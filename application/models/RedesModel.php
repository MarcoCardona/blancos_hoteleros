<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RedesModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = "redesSociales";
    }

    // Método para obtener todos los usuarios
    public function obtener()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }


    // Método para obtener un usuario por su ID
    public function obtener_por_id($idRed)
    {
        $query = $this->db->get_where($this->tabla, array('idRed' => $idRed));
        return $query->row();
    }

    // Método para insertar un nuevo usuario
    public function insertar($datos_productos)
    {
        $this->db->insert($this->tabla, $datos_productos);
        return $this->db->insert_id();
    }

    // Método para actualizar un usuario por su ID
    public function actualizar($idRed, $datos_productos)
    {
        $this->db->where('idRed', $idRed);
        return $this->db->update($this->tabla, $datos_productos);
    }

    // Método para eliminar un usuario por su ID
    public function eliminar($idRed)
    {
        $this->db->where('idRed', $idRed);
        return $this->db->delete($this->tabla);
    }
}
