<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RedesController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("RedesModel");
	}

	public function index()
	{
		$data = array(
			"page" => $this->page("Lista de redes sociales", "Marco Antonio Cardona", "redes/lista.css", "redes/lista.js"),
		);
		$this->load->view('admin/redes/lista', $data);
	}

	public function obtener()
	{
		$dataCategorias = $this->RedesModel->obtener();
		echo json_encode($dataCategorias);
	}

	public function nueva()
	{
		$dataInsert = $this->input->post();
		$dataInsert['status'] = 1;
		$this->RedesModel->insert($dataInsert);
		echo true;
	}

	public function get($id)
	{
		$dataCategoria = $this->RedesModel->getWhere(array("id" => $id));
		echo json_encode($dataCategoria[0]);
	}

	public function update($id)
	{
		$dataUpdate = json_decode(file_get_contents('php://input'));
		$this->RedesModel->updateWhere(array("id" => $id), $dataUpdate);
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
