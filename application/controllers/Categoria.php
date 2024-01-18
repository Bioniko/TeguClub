<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Categoria extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('categoria.php',(array)$output);
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
			$crud->display_as('cat_nombre','Nombre');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('categoria');
			//WHERE
			$crud->where('emp_id', $_COOKIE['log_id']);
			//COLUMNAS A MOSTRAR
			$crud->columns('cat_nombre');
			//CAMPOS A VISUALIZAR
			$crud->add_fields('cat_nombre');
    		$crud->edit_fields('cat_nombre');
			//DESPUES DE INSERTAR CUALQUIER PRODUCTO
			$crud->callback_after_insert(array($this, 'InsertarID'));
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function InsertarID($post_array, $primary_key) {
		// $post_array['emp_id'] = $_COOKIE['log_id'];
		$query = "UPDATE categoria SET emp_id = ".$_COOKIE['log_id']." WHERE cat_id = ".$primary_key;
		$this->db->query($query);
		// return $post_array;
    }
}
