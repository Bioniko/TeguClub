<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MisionxVision extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('misionxvision.php',(array)$output);
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
			// $crud->unset_read();
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_export();
			//DISPLAY
			$crud->display_as('mxv_mision','Misión');
			$crud->display_as('mxv_vision','Visión');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('misionxvision');
			//COLUMNAS A MOSTRAR
			$crud->columns('mxv_mision','mxv_vision');
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
