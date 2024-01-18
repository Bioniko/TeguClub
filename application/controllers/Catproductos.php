<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catproductos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('catproductos.php',(array)$output);
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
			$crud->unset_print();
			$crud->unset_clone();
			$crud->unset_export();
			//DISPLAY
			// $crud->display_as('prod_foto','Foto Banner');
			$crud->display_as('prod_titulo','Titulo');
			$crud->display_as('prod_descripcion','Descripción');
			$crud->display_as('prod_icono','Icono');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('cat_productos');
			//COLUMNAS A MOSTRAR
			$crud->columns('prod_titulo', 'prod_descripcion', 'prod_icono');
			//CAMPOS A VISUALIZAR
			$crud->add_fields('prod_titulo', 'prod_descripcion', 'prod_icono');
    		$crud->edit_fields('prod_titulo', 'prod_descripcion', 'prod_icono');
			//SUBIR FOTO
			// $crud->set_field_upload('prod_foto','assets/uploads/files');
			
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
