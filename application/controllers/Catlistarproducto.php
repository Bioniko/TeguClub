<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catlistarproducto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('catlistarproducto.php',(array)$output);
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
			$crud->display_as('cat_id','Categoria');
			$crud->display_as('lis_nombre','Nombre');
			$crud->display_as('lis_foto','Foto');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('lis_producto');
			//SETRELATION
			$crud->set_relation('cat_id','cat_productos','prod_titulo');
			//COLUMNAS A MOSTRAR
			$crud->columns('cat_id','lis_nombre', 'lis_foto');
			//CAMPOS A VISUALIZAR
			$crud->add_fields('cat_id','lis_nombre', 'lis_foto');
    		$crud->edit_fields('cat_id','lis_nombre', 'lis_foto');
			//SUBIR FOTO
			$crud->set_field_upload('lis_foto','assets/uploads/files');
			
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
