<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    *       http://example.com/index.php/welcome
    * - or -
    *       http://example.com/index.php/welcome/index
    * - or -
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
            $this->load->model('usuario_model');


    }
    

   public function usuarios()
   {  
      include("usuarios/Usuarios.php");      
   }

   public function validar_correo($correo){


    if ($this->usuario_model->checkEmail($correo)) { 
      $this->form_validation->set_message('validar_correo', 'Disculpe, el correo ya se encuentra registrado en el sistema'); 
      return FALSE; 
    } 
 
    return TRUE;

   }
   

}
