<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dindex extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('2index.php',(array)$output);
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
			if(isset($_COOKIE['emp_id'])){
				$_COOKIE['emp_id'] = $_GET['emp'];
			}else{
				if(isset($_GET['emp']) && !Empty($_GET['emp'])){
					setcookie("emp_id", $_GET['emp'], time()+365 * 24 * 60 * 60, "/");
				}
			}
			//===========================================================
			$producto = 'SELECT * FROM producto p LEFT JOIN categoria c ON p.cat_id = c.cat_id WHERE p.emp_id = '.$_GET['emp'].' ORDER BY p.pro_fecha DESC';
			$categoria = 'SELECT * FROM categoria WHERE emp_id = '.$_GET['emp'];
			$cat = $this->db->query($categoria)->result();
			$pro = $this->db->query($producto)->result();
			$emp = $this->db->query("SELECT * FROM empresa WHERE log_id = ".$_GET['emp'])->row();
			$var = $this->db->query("SELECT * FROM empresa WHERE log_id != 2")->result();
			$data = (object)array('pro' => $pro, 'cat' => $cat, 'emp' => $emp, 'var' => $var);
			$this->load->view('2index.php',(array)$data);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}