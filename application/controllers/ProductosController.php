<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductosController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("CategoriasModel");
	}

	public function index()
	{
		$data = array(
			"page" => $this->page("Lista de productos", "Marco Antonio Cardona", "productos/productos.css", "productos/lista.js"),
		);
		$this->load->view('admin/productos/lista', $data);
	}

	public function nuevo()
	{
		$dataCategorias = $this->CategoriasModel->getAll();
		$data = array(
			"page" => $this->page("Nuevo producto", "Marco Antonio Cardona", "productos/nuevo.css", "productos/nuevo.js"),
			"categorias"=>$dataCategorias
		);
		$this->load->view('admin/productos/nuevo', $data);
	}


	public function getAll()
	{
		$dataCategorias = $this->CategoriasModel->getAll();
		echo json_encode($dataCategorias);
	}

	public function nueva()
	{
		$dataInsert = $this->input->post();
		$dataInsert['status'] = 1;
		$this->CategoriasModel->insert($dataInsert);
		echo true;
	}

	public function get($id)
	{
		$dataCategoria = $this->CategoriasModel->getWhere(array("id" => $id));
		echo json_encode($dataCategoria[0]);
	}

	public function update($id)
	{
		$dataUpdate = json_decode(file_get_contents('php://input'));
		$this->CategoriasModel->updateWhere(array("id" => $id), $dataUpdate);
		echo true;
	}

	public function page($titulo_page, $usuario,  $css, $js)
	{
		return  array(
			"head" => array(
				"titulo" => $titulo_page,
				"css" => $css
			),
			"header" => array("usuario" => $usuario),
			"footer" => array("js" => $js)
		);
	}
}
