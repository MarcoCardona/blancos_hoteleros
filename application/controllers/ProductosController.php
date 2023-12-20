<?php
defined('BASEPATH') or exit('No direct script access allowed');
error_reporting(E_ALL);

class ProductosController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('file'); // Cargar el helper 'file' para trabajar con archivos/directorios

		$this->load->model("ProductosModel");
		$this->load->model("CategoriasModel");
		$this->load->model("ImagenProductoModel");
		$this->load->model("CategoriasProductosModel");
		$this->load->model("TamanosProductosModel");
		$this->load->model("CaracteristicasProductosModel");
		$this->load->model("ColoresProductosModel");
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
			"categorias" => $dataCategorias
		);
		$this->load->view('admin/productos/nuevo', $data);
	}


	public function obtener()
	{
		$dataProductos = $this->ProductosModel->obtener();
		foreach ($dataProductos as $p) {
			$p->n_categorias  = array();
			$dataCategorias = $this->CategoriasProductosModel->obtener_por_idProducto($p->idProducto);
			foreach ($dataCategorias as $c) {
				$dataCategoria = $this->CategoriasModel->obtener_por_id($c->idCategoria);

				$p->n_categorias[] = $dataCategoria->categoria;
			}
		}
		echo json_encode($dataProductos);
	}



	public function insert()
	{
		$dataInsert = $this->input->post();


		$coloresInsert = json_decode($dataInsert['colores']);
		$categoriasInsert = json_decode($dataInsert['categorias']);
		$caracteristicasInsert = json_decode($dataInsert['caracteristicas']);
		$tamanosInsert = json_decode($dataInsert['tamanos']);
		unset($dataInsert['colores']);
		unset($dataInsert['caracteristicas']);
		unset($dataInsert['tamanos']);
		unset($dataInsert['categorias']);

		$idProducto = $this->ProductosModel->insertar($dataInsert);

		$this->sube_imagenes("producto_" . $idProducto, $_FILES, $idProducto);
		foreach ($coloresInsert as $c) {

			$this->ColoresProductosModel->insertar(array("color" => $c, "idProducto" => $idProducto));
		}
		foreach ($categoriasInsert as $c) {
			$this->CategoriasProductosModel->insertar(array("idCategoria" => $c, "idProducto" => $idProducto));
		}
		foreach ($tamanosInsert as $t) {
			$this->TamanosProductosModel->insertar(array("tamano" => $t, "idProducto" => $idProducto));
		}
		foreach ($caracteristicasInsert as $c) {
			$this->CaracteristicasProductosModel->insertar(array("caracteristica" => $c, "idProducto" => $idProducto));
		}
		echo 1;
	}


	private function sube_imagenes($carpeta, $imagenes, $idProducto)
	{
		$ruta_carpeta = FCPATH . "/productos/" . $carpeta; // Ruta a la carpeta que deseas verificar/crear
		$config['upload_path'] = $ruta_carpeta; // Ruta donde quieres guardar las imágenes
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Tipos de archivos permitidos
		$this->load->library('upload', $config);
		// Verificar si la carpeta existe

		if (!is_dir($ruta_carpeta)) {
			mkdir($ruta_carpeta, 0777, true);
		}

		foreach ($imagenes as $key => $value) {
			if (!empty($value['name'])) {
				// Configuración para subir cada imagen
				$this->upload->initialize($config);
				if ($this->upload->do_upload($key)) {
					// Imagen subida exitosamente
					$data = $this->upload->data();
					// Aquí podrías guardar el nombre del archivo en la base de datos u otra lógica que necesites
					// Guardamos en la 
					$this->ImagenProductoModel->insertar(array("img" => $value['name'], "idProducto" => $idProducto));
				} else {
					// Error al subir la imagen
					$error = array('error' => $this->upload->display_errors());
					// Manejar el error según sea necesario
				}
			}
		}
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
