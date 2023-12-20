<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackendController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");

		$this->load->model("ProductosModel");
		$this->load->model("CategoriasModel");
		$this->load->model("ImagenProductoModel");
		$this->load->model("CategoriasProductosModel");
		$this->load->model("TamanosProductosModel");
		$this->load->model("CaracteristicasProductosModel");
		$this->load->model("ColoresProductosModel");
	}

	public function bienvenido()
	{

		$dataProducto = $this->ProductosModel->obtener_ultimos(4);

		foreach ($dataProducto as $p) {
			$p->colores  = array();
			$p->images_url  = array();
			$p->tamanos  = array();
			$dataColores = $this->ColoresProductosModel->obtener_por_idProducto($p->idProducto);
			foreach ($dataColores as $c) {
				$p->colores[] = $c->color;
			}
			$dataImagenes = $this->ImagenProductoModel->obtener_por_idProducto($p->idProducto);
			foreach ($dataImagenes as $c) {
				$p->images_url[] = base_url() . 'productos/producto_' . $p->idProducto . '/' . $c->img;
			}

			$dataTamanos = $this->TamanosProductosModel->obtener_por_idProducto($p->idProducto);
			foreach ($dataTamanos as $t) {
				$p->tamanos[] = $t->tamano;
			}
		}
		$data = array(
			"producto" => $dataProducto
		);

		$dataCategorias = $this->CategoriasModel->getAll();

		$this->load->view('page/head');
		$this->load->view('page/header-top');
		$this->load->view('page/menu', array("categorias" => $dataCategorias));

		$this->load->view('page/bienvenido', $data);
		$this->load->view('page/footer', array("categorias" => $dataCategorias));
	}

	public function producto($id)
	{
		$dataProducto = $this->ProductosModel->obtener_por_id($id);
		$dataProducto->colores  = array();
		$dataProducto->images_url  = array();
		$dataProducto->tamanos  = array();

		$dataColores = $this->ColoresProductosModel->obtener_por_idProducto($dataProducto->idProducto);
		foreach ($dataColores as $c) {
			$dataProducto->colores[] = $c->color;
		}
		$dataImagenes = $this->ImagenProductoModel->obtener_por_idProducto($dataProducto->idProducto);
		foreach ($dataImagenes as $c) {
			$dataProducto->images_url[] = base_url() . 'productos/producto_' . $id . '/' . $c->img;
		}

		$dataTamanos = $this->TamanosProductosModel->obtener_por_idProducto($dataProducto->idProducto);
		foreach ($dataTamanos as $t) {
			$dataProducto->tamanos[] = $t->tamano;
		}
		$data = array(
			"producto" => $dataProducto
		);

		$dataCategorias = $this->CategoriasModel->getAll();
		$this->load->view('page/head');
		$this->load->view('page/header-top');

		$this->load->view('page/menu', array("categorias" => $dataCategorias));

		$this->load->view('page/detalle_producto', $data);
		$this->load->view('page/footer', array("categorias" => $dataCategorias));
	}

	public function usuarios()
	{

		$data = array(
			"page" => $this->page("Lista de usuarios", "Marco Antonio Cardona", "categorias/lista.css", "categorias/lista.js")
		);
		$this->load->view('admin/sistema/sistema', $data);
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
