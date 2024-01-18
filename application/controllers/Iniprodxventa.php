<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iniprodxventa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('iniprodxventa.php',(array)$output);
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
			$crud->display_as('pro_titulo','Titulo');
			$crud->display_as('pro_descripcion','Descripción');
			$crud->display_as('pro_icono','Icono');
			$crud->display_as('pro_fondo','Fondo');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('ini_prodxventa');
			//COLUMNAS A MOSTRAR
			$crud->columns('pro_titulo','pro_descripcion', 'pro_icono', 'pro_fondo');

			$crud->set_field_upload('pro_fondo','assets/uploads/files');
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
