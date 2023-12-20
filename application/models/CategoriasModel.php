<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CategoriasModel extends CI_Model
{
    public $tabla;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabla = 'categorias';
    }



    // Método para obtener un usuario por su ID
    public function obtener_por_id($id)
    {
        $query = $this->db->get_where($this->tabla, array('id' => $id));
        return $query->row();
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->tabla);
        $consulta = $this->db->get();
        if (!empty($consulta))
            return $consulta->result();
        else {
            return false;
        }
    }

    public function getWhere($where)
    {
        $this->db->select('*');
        $this->db->from($this->tabla);
        $this->db->where($where);
        $consulta = $this->db->get();
        if (count($consulta->result()) > 0)
            return $consulta->result();
        else {
            return false;
        }
    }


    public function insert($dataInsert)
    {
        $this->db->insert($this->tabla, $dataInsert);
    }

    public function updateWhere($updateWhere, $dataUpdate)
    {
        $this->db->update($this->tabla,$dataUpdate, $updateWhere);
        return true;
    }
}
