<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('producto.php',(array)$output);
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
			$crud->display_as('pro_nombre','Nombre');
			$crud->display_as('pro_foto1','Foto 1');
			$crud->display_as('pro_foto2','Foto 2');
			$crud->display_as('pro_foto3','Foto 3');
			$crud->display_as('pro_foto4','Foto 4');
			$crud->display_as('cat_id','Categoria');
			$crud->display_as('pro_precio','Precio');
			$crud->display_as('emp_id','Empresa');
			$crud->display_as('pro_activo','Estado');
			
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('producto');
			//WHERE
			$crud->where('producto.emp_id', $_COOKIE['log_id']);
			//COLUMNAS A MOSTRAR
			$crud->columns('pro_nombre', 'cat_id', 'pro_precio','pro_foto1','pro_foto2','pro_foto3','pro_foto4', 'pro_activo');
			//CAMPOS A VISUALIZAR
			$crud->add_fields('pro_nombre', 'cat_id', 'pro_precio','pro_foto1','pro_foto2','pro_foto3','pro_foto4', 'pro_activo');
    		$crud->edit_fields('pro_nombre', 'cat_id', 'pro_precio','pro_foto1','pro_foto2','pro_foto3','pro_foto4', 'pro_activo');
			$crud->field_type('pro_activo','dropdown',array('No' => 'Deshabilitado', 'Si' => 'Habilitado'));
			//SUBIR FOTO
			$crud->set_field_upload('pro_foto1','assets/uploads/files');
			$crud->set_field_upload('pro_foto2','assets/uploads/files');
			$crud->set_field_upload('pro_foto3','assets/uploads/files');
			$crud->set_field_upload('pro_foto4','assets/uploads/files');
			//SETRELATION
			$crud->set_relation('cat_id','categoria','cat_nombre',array('emp_id' => $_COOKIE['log_id']));
			//DESPUES DE INSERTAR CUALQUIER PRODUCTO
			$crud->callback_after_insert(array($this, 'InsertarID'));
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function InsertarID($post_array, $primary_key) {
		$query = "UPDATE producto SET emp_id = ".$_COOKIE['log_id']." WHERE pro_id = ".$primary_key;
		$this->db->query($query);
    }
}
