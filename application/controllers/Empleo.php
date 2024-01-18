<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empleo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('empleo.php',(array)$output);
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
			}
			//DISPLAY
			$crud->display_as('emp_foto','Foto Banner');
			$crud->display_as('emp_titulo','Titulo');
			$crud->display_as('emp_descripcion','Descripción');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('empleo');
			//WHERE
			$crud->where('emp_id', $_COOKIE['log_id']);
			//COLUMNAS A MOSTRAR
			$crud->columns('emp_foto','emp_titulo', 'emp_descripcion');
			//SUBIR FOTO
			$crud->set_field_upload('emp_foto','assets/uploads/files');
			
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
