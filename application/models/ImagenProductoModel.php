<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ImagenProductoModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = "imagenproductos";
    }

    // Método para obtener todos los usuarios
    public function obtener()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }

    // Método para obtener un usuario por su ID
    public function obtener_por_id($idImagen)
    {
        $query = $this->db->get_where($this->tabla, array('idImagen' => $idImagen));
        return $query->row();
    }


    // Método para obtener un usuario por su ID
    public function obtener_por_idProducto($idProducto)
    {
        $query = $this->db->get_where($this->tabla, array('idProducto' => $idProducto));
        return $query->result();
    }


    // Método para insertar un nuevo usuario
    public function insertar($datos_imagenes)
    {
        $this->db->insert($this->tabla, $datos_imagenes);
        return $this->db->insert_id();
    }

    // Método para actualizar un usuario por su ID
    public function actualizar($idImagen, $datos_imagenes)
    {
        $this->db->where('idImagen', $idImagen);
        return $this->db->update($this->tabla, $datos_imagenes);
    }

    // Método para eliminar un usuario por su ID
    public function eliminar($idImagen)
    {
        $this->db->where('idImagen', $idImagen);
        return $this->db->delete($this->tabla);
    }
}
