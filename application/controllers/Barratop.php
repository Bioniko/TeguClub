<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barratop extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	public function _example_output($output = null)
	{
		$this->load->view('barratop.php',(array)$output);
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
		try {
			if(isset($_GET['bar_colorbarra']) && !Empty($_GET['bar_colorbarra'])){
				$Actualizar = array(
					"bar_colorbarra" => $_GET['bar_colorbarra']
				);
				$where = array("emp_id" => $_COOKIE['log_id']);
				$this->db->update('empresa', $Actualizar, $where);
				echo   '<script>
						 alert("¡La operación se ha completado con éxito!");
						</script>';
			}
			if(isset($_GET['bar_tamanioico']) && !Empty($_GET['bar_tamanioico'])){
				$Actualizar = array(
					"bar_tamanioico" => $_GET['bar_tamanioico']
				);
				$where = array("emp_id" => $_COOKIE['log_id']);
				$this->db->update('empresa', $Actualizar, $where);
				echo   '<script>
						 alert("¡La operación se ha completado con éxito!");
						</script>';
			}
			if(isset($_GET['bar_coloricom']) && !Empty($_GET['bar_coloricom'])){
				$Actualizar = array(
					"bar_coloricom" => $_GET['bar_coloricom']
				);
				$where = array("emp_id" => $_COOKIE['log_id']);
				$this->db->update('empresa', $Actualizar, $where);
				echo   '<script>
						 alert("¡La operación se ha completado con éxito!");
						</script>';
			}
			if(isset($_GET['bar_coloricoc']) && !Empty($_GET['bar_coloricoc'])){
				$Actualizar = array(
					"bar_coloricoc" => $_GET['bar_coloricoc']
				);
				$where = array("emp_id" => $_COOKIE['log_id']);
				$this->db->update('empresa', $Actualizar, $where);
				echo   '<script>
						 alert("¡La operación se ha completado con éxito!");
						</script>';
			}
            //===========================================================
            $emp = $this->db->query("SELECT * FROM empresa WHERE log_id = ".$_COOKIE['log_id'])->row();
            $data = (object) array('emp' => $emp);
            $this->load->view('barratop.php', (array) $data);
        } catch (Exception $e) {
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
	}
}
