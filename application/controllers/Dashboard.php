<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

    
	 
	public function index()
	{	

		if($this->session->userdata('logueado')){
			$view_data = array();
			$view_data['nombre'] = $this->session->userdata('nombre');
			$view_data['rol'] = $this->session->userdata('rol');
			$view_data["menu"] = true;

			$response = new StdClass();	


			$response->rows = $this->censo_model->get_Censos();
			$count = $this->censo_model->get_Counts_censos_transcritos();
			$count_corregidos = $this->censo_model->get_Count_censos_corregidos();
			

			$view_data["data"] = $response;
			$view_data["count"] = $count;
			$view_data["count_corregidos"] = $count_corregidos;

			$this->load->view('Head', $view_data);
			$this->load->view('Dashboard',$view_data);
			$this->load->view('Footer', $view_data);
		}else{
			redirect('/');
		}

	}
	

}
