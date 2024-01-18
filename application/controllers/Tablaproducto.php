<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tablaproducto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('tablaproducto.php',(array)$output);
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
			$crud->display_as('produ_id','Producto');
			$crud->display_as('tab_col1','Tab 1');
			$crud->display_as('tab_col2','Tab 2');
			$crud->display_as('tab_col3','Tab 3');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('tablaproducto');
			//COLUMNAS A MOSTRAR
			$crud->columns('produ_id','tab_col1', 'tab_col2', 'tab_col3');
			//SETRELATIO
			$crud->set_relation('produ_id','Producto','produ_nombre');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
