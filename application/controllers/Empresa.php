<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('empresa.php',(array)$output);
	}
	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function show()
	{
		try{
			$crud = new grocery_CRUD();
			//UNSET
			if($_COOKIE['log_id'] == '2'){
				$crud->unset_print();
				$crud->unset_clone();
				$crud->unset_export();
			}else{
				$crud->unset_print();
				$crud->unset_clone();
				$crud->unset_export();
				$crud->unset_add();
				$crud->unset_delete();
				$crud->unset_read();
			}
			//DISPLAY
			$crud->display_as('emp_nombre','Nombre');
			$crud->display_as('emp_logo','Logo');
			$crud->display_as('emp_descripcion','Descripciòn');
			$crud->display_as('emp_celular','Celular');
			$crud->display_as('log_id','Usuario');
			$crud->display_as('emp_correo','Correo');
			$crud->display_as('emp_menu','Menù');
			$crud->display_as('emp_facebook','Facebook');
			$crud->display_as('emp_instagram','Instagram');
			$crud->display_as('emp_tiktok','Tiktok');
			$crud->display_as('emp_titulo','Titulo');
			$crud->display_as('emp_titulo2','Descripción pagina');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('empresa');
			//CAMPOS A VISUALIZAR
			if($_COOKIE['log_id'] == '2'){
				$crud->add_fields('log_id','emp_nombre','emp_celular','emp_correo','emp_logo','emp_menu','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion','emp_titulo','emp_titulo2');
    			$crud->edit_fields('log_id','emp_nombre','emp_celular','emp_correo','emp_logo','emp_menu','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion','emp_titulo','emp_titulo2');
				$crud->set_relation('log_id','login','log_usuario');
				//COLUMNAS A MOSTRAR
				$crud->columns('log_id','emp_nombre','emp_celular','emp_correo','emp_logo','emp_menu','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion');
			}else{
				//WHERE
				$crud->where('emp_id', $_COOKIE['log_id']);
				$crud->add_fields('emp_nombre','emp_celular','emp_correo','emp_logo','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion');
    			$crud->edit_fields('emp_nombre','emp_celular','emp_correo','emp_logo','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion');
				//COLUMNAS A MOSTRAR
				$crud->columns('emp_nombre','emp_celular','emp_correo','emp_logo','emp_menu','emp_facebook','emp_instagram','emp_tiktok','emp_descripcion','emp_titulo','emp_titulo2');
			}
			//SUBIR FOTO
			$crud->set_field_upload('emp_logo','assets/uploads/files');
			
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
