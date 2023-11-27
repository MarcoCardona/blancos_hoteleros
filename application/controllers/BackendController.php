<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BackendController extends CI_Controller
{


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
