<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuentasusuarios extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('cuentasusuarios.php',(array)$output);
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
			
			$crud->display_as('usu_empleado','Nombre');
			$crud->display_as('usu_usuario','Usuario');
			$crud->display_as('usu_password','Contraseña');
			$crud->display_as('usu_per_inicio','Permiso Inicio(Submenu)');
			$crud->display_as('usu_per_banner','Permiso Banner');
			$crud->display_as('usu_per_venta','Permiso Producto Venta');
			$crud->display_as('usu_per_mixvi','Permiso Misiòn Visiòn');
			$crud->display_as('usu_per_actividades','Permiso Actividades');
			$crud->display_as('usu_per_productos','Permiso Productos(Submenu)');
			$crud->display_as('usu_per_cateprod','Permiso Categoria Productos');
			$crud->display_as('usu_per_famprod','Permiso Familia Productos');
			$crud->display_as('usu_per_produ','Permiso de Productos');
			$crud->display_as('usu_per_tabprod','Permiso de Tabla Producto');
			$crud->display_as('usu_per_nosotros','Permiso Nosotros(Submenu)');
			$crud->display_as('usu_per_reshis','Permiso Reseña Historica');
			$crud->display_as('usu_pre_estra','Permiso Estrategia');
			$crud->display_as('usu_pre_polcal','Permiso Politica de Calidad');
			$crud->display_as('usu_pre_lab','Permiso Laboratorio(Submenu)');
			$crud->display_as('usu_pre_hislab','Permiso Historia del Laboratorio');
			$crud->display_as('usu_pre_fun','Permiso Funciones');
			$crud->display_as('usu_pre_concal','Permiso Control de Calidad');
			$crud->display_as('usu_pre_estruc','Permiso Estructura');
			$crud->display_as('usu_pre_sgc','Permiso SGC de Laboratorio');
			$crud->display_as('usu_pre_serlab','Permiso Servicios del Laboratorio');
			$crud->display_as('usu_pre_polcallab','Permiso Politica de Calidad');
			$crud->display_as('usu_pre_alc','Permiso Alcance de SGC');
			$crud->display_as('usu_pre_cont','Permiso Contacto');
			$crud->display_as('usu_pre_cert','Permiso Certificaciones');
			$crud->display_as('usu_pre_emp','Permiso Empleo');
			$crud->display_as('usu_pre_farmaco','Permiso Farmacovigilancia');

			$crud->field_type('usu_per_inicio','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_banner','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_venta','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_mixvi','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_actividades','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_productos','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_cateprod','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_famprod','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_produ','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_tabprod','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_nosotros','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_per_reshis','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_estra','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_polcal','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_lab','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_hislab','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_fun','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_concal','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_estruc','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_sgc','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_serlab','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_polcallab','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_alc','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_cont','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_cert','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_emp','dropdown', array('1' => 'Si', '0' => 'No'));
			$crud->field_type('usu_pre_farmaco','dropdown', array('1' => 'Si', '0' => 'No'));
			

			//THEME
			$crud->set_theme('flexigrid');
			//TABLA A LEER
			$crud->set_table('usuarios');
			//COLUMNAS A MOSTRAR
			$crud->columns('usu_empleado', 'usu_usuario');

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
		$pass = $post_array['usu_password'];
		$salt = "MC1985MC.";
		$post_array['usu_password'] = MD5($pass.$salt);
		return $post_array;
	}
}
