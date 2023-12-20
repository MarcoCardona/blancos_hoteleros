<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


#Login de usuarios
$route['administrador/login'] = 'UsuariosController/mostrar_login';
$route['administrador/validar_sesion'] = 'UsuariosController/validarLogin';



#Modulo de redes
$route['administrador/redes/lista'] = 'RedesController';

$route['administrador/redes/obtener'] = 'RedesController/obtener';




#Modulo categorias
$route['administrador/categorias/lista'] = 'CategoriasController';
#Peticiones ajax categorias
#Obtiene todas las categorias
$route['administrador/categorias/getAll'] = 'CategoriasController/getAll';
#Agrega nueva categoria
$route['administrador/categorias/nueva'] = 'CategoriasController/nueva';
#Obtiene categoria
$route['administrador/categorias/get/(:any)'] = 'CategoriasController/get/$1';
#Update categoria
$route['administrador/categorias/update/(:any)'] = 'CategoriasController/update/$1';





#Lista los productos existentes
$route['administrador/productos/lista'] = 'ProductosController';
$route['administrador/productos/nuevo'] = 'ProductosController/nuevo';

#Peticiones ajax productos
#Obtiene todos los productos
$route['administrador/productos/obtener'] = 'ProductosController/obtener';
#Agrega nueva productos
$route['administrador/productos/insert'] = 'ProductosController/insert';
#Obtiene productos
$route['administrador/productos/get/(:any)'] = 'ProductosController/get/$1';
#Update productos
$route['administrador/productos/update/(:any)'] = 'ProductosController/update/$1';





/***************Fronend Pagina */


$route['producto/(:any)'] = 'BackendController/producto/$1';
$route['bienvenido'] = 'BackendController/bienvenido';


$route['default_controller'] = 'BackendController/bienvenido';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
