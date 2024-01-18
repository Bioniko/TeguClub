<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labcalidad extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('labcalidad.php',(array)$output);
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
			$crud->display_as('cal_titulo','Titulo');
			$crud->display_as('cal_foto','Foto Banner');
			$crud->display_as('cal_descripcion','Descripción');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('lab_calidad');
			//COLUMNAS A MOSTRAR
			$crud->columns('cal_titulo', 'cal_foto','cal_descripcion');
			//SUBIR FOTO
			$crud->set_field_upload('cal_foto','assets/uploads/files');
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
