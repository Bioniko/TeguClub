<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Farmacovigilancia extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('farmacovigilancia.php',(array)$output);
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
			$crud->unset_delete();
			$crud->unset_edit();
			$crud->unset_add();
			//DISPLAY
			$crud->display_as('frm_nombre','Nombre');
			$crud->display_as('frm_apellido','Apellido');
			$crud->display_as('frm_correo','Correo');
			$crud->display_as('frm_direccion','Dirección');
			$crud->display_as('frm_telefono','Teléfono');
			$crud->display_as('frm_iniciales','Fecha inicio');
			$crud->display_as('frm_genero','Genero');
			$crud->display_as('frm_edad','Edad');
			$crud->display_as('frm_peso','Peso');
			$crud->display_as('frm_altura','Altura');
			$crud->display_as('frm_fecha_nac','Fecha Nacimiento');
			$crud->display_as('frm_nombre_prod','Producto');
			$crud->display_as('frm_dosis','Dosis');
			$crud->display_as('frm_lote','Lote');
			$crud->display_as('frm_fecha_cadu','Caducidad');
			$crud->display_as('frm_fecha_ini','Fecha inicio');
			$crud->display_as('frm_fecha_fin','Fecha finalizo');
			$crud->display_as('frm_descripcion','Descripcion');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('form');
			//COLUMNAS A MOSTRAR
			$crud->columns('frm_nombre','frm_apellido', 'frm_correo', 'frm_telefono', 'frm_nombre_prod');
			//SUBIR FOTO
			// $crud->set_field_upload('emp_foto','assets/uploads/files');
			
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
