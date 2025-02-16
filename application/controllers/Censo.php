<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Censo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 /**CHRISTIAN MANRIQUE GARICA
	*  02.11.2015
	*  DECLARE THE CONSTRUCTOR TO INICIALIZE THE SESSION LIBARY AND VALIDATE IF THE USER IS LOGGED 		
	*/
	public function __construct(){
    	parent::__construct();
        //always check if session userdata value "logged_in" is not true
  /*       $this->load->library('session');
         
        if(!$this->session->userdata['isLoggedIn']){
        	redirect('/');
        }*/
        $this->load->helper('tools_helper');
        $this->load->model('censo_model');


    }
    

	public function censo()
	{	
		include("censo/Censo.php");		
	}

	 public function ajax_get_contribuyente(){
	 	$consultaBusqueda = $_POST['valorBusqueda'];

		if (isset($consultaBusqueda)) {

            $result = $this->censo_model->search_contribuyente($consultaBusqueda);
          echo json_encode($result);
 				return;
 				exit;
            
        }
	}

	function get_cnae(){
		if (isset($_GET['term'])) {
			$result = $this->censo_model->search_cnae($_GET['term']);
			if (count($result) > 0) {
				$arr = array();
				$x = 0; 

				foreach ($result as $row){
					$arr[$x]["label"] = $row->codigo." / ".$row->tipo;
					$arr[$x]["codigo"] = $row->codigo;
					$arr[$x]["tipo"] = $row->tipo;
					$x = $x + 1 ;
				}

				echo json_encode($arr);
				return;
				exit;
			}
		}
	}
	

}
