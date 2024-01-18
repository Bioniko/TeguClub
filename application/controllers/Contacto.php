<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('contacto.php',(array)$output);
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
			$crud->display_as('con_ciudad','Ciudad');
			$crud->display_as('con_direccion','Dirección');
			$crud->display_as('con_codpostal','Código Postal');
			$crud->display_as('con_telefono','Teléfono');
			$crud->display_as('con_fax','Fax');
			$crud->display_as('con_correo','Correo');
			$crud->display_as('con_ubicacion','Ubicación');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('contacto');
			//COLUMNAS A MOSTRAR
			$crud->columns('con_ciudad','con_direccion', 'con_codpostal', 'con_telefono', 'con_fax', 'con_correo');
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
