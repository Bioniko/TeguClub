<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dpedido extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('2pedido.php',(array)$output);
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
			$emp = $this->db->query("SELECT * FROM empresa")->result();
			$data = (object)array('emp' => $emp);
			$this->load->view('2pedido.php',(array)$data);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}