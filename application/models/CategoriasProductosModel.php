<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriasProductosModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = "categoriaProductos";
    }

    // Método para obtener todos los usuarios
    public function obtener()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }

    // Método para obtener un usuario por su ID
    public function obtener_por_id($id)
    {
        $query = $this->db->get_where($this->tabla, array('id' => $id));
        return $query->row();
    }

    // Método para obtener la lista de categorias por producto
    public function obtener_por_idProducto($idProducto)
    {
        $query = $this->db->get_where($this->tabla, array('idProducto' => $idProducto));
        return $query->result();
    }

    // Método para insertar un nuevo usuario
    public function insertar($datos_productos)
    {
        $this->db->insert($this->tabla, $datos_productos);
        return $this->db->insert_id();
    }

    // Método para actualizar un usuario por su ID
    public function actualizar($idProducto, $datos_productos)
    {
        $this->db->where('idProducto', $idProducto);
        return $this->db->update($this->tabla, $datos_productos);
    }

    // Método para eliminar un usuario por su ID
    public function eliminar($idProducto)
    {
        $this->db->where('idProducto', $idProducto);
        return $this->db->delete($this->tabla);
    }
}
