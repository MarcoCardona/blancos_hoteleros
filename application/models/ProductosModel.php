<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductosModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = "productos";
    }

    // Método para obtener todos los usuarios
    public function obtener()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }

    public function obtener_ultimos($cantidad)
    {
        $this->db->from($this->tabla);
        $this->db->order_by('fechaInsert', 'desc'); // Reemplaza 'fecha_columna' con el nombre real de tu columna de fecha
        $this->db->limit(4);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result(); // Devuelve los resultados si existen registros
        } else {
            return false; // Devuelve falso si no hay registros encontrados
        }
    }

    // Método para obtener un usuario por su ID
    public function obtener_por_id($idProducto)
    {
        $query = $this->db->get_where($this->tabla, array('idProducto' => $idProducto));
        return $query->row();
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
