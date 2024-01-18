<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('usuarios.php',(array)$output);
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
			$crud->display_as('log_usuario','Usuario');
			$crud->display_as('log_password','Password');
			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('login');
			//COLUMNAS A MOSTRAR
			$crud->columns('log_usuario','log_password');
			//CAMPOS A VISUALIZAR
			$crud->add_fields('log_usuario','log_password');
    		$crud->edit_fields('log_usuario','log_password');
			//SUBIR FOTO
			// $crud->set_field_upload('emp_logo','assets/uploads/files');
			//SETRELATION
			// $crud->set_relation('cat_id','categoria','cat_nombre');
			$crud->callback_before_insert(array($this, 'MD5Password'));
            $crud->callback_before_update(array($this, 'MD5Password'));
			
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	function MD5Password($post_array)
	{
		$pass = $post_array['log_password'];
		$salt = "textprint2024";
		$post_array['log_password'] = MD5($pass.$salt);
		return $post_array;
	}
}
