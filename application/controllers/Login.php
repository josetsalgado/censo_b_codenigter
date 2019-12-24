<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Login extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }

   public function iniciar_sesion_post() {

      if ($this->input->post()) {
         $correo = $this->input->post('correo');
         $contrasena = sha1($this->input->post('contrasena', TRUE));
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->session($correo, $contrasena);

         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->nombre,
               'apellido' => $usuario->apellido,
               'rol' => $usuario->rol,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('dashboard');
         } else {
            redirect('/');
         }
      } else {
         $this->iniciar_sesion();
      }
   }

   public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
         $this->load->view('usuarios/logueado', $data);
      }else{
         redirect('usuarios/iniciar_sesion');
      }
   }

   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('/');
   }
}