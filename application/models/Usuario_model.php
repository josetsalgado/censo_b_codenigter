<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function session($correo, $contrasena){

     
      $this->db->select('id, nombre, apellido,rol');
      $this->db->from('c_usuarios');
      $this->db->where('correo', $correo);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();

      return $resultado;
   }

   public function adduser($objUsuario){

      if( !isset($objUsuario->id) or $objUsuario->id =="0" or $objUsuario->id==""){

            $this->db->insert('c_usuarios', $objUsuario );             
            $resultado = $this->db->insert_id();
         

        }else{
            $this->db->update('c_usuarios' , $objUsuario, array('id' =>  $objUsuario->id));
            $resultado = ($this->db->affected_rows() > 0) ? TRUE : FALSE; 
        }
       
        return $resultado;

   }

   public function get_Users(){
      $sql = "SELECT * FROM c_usuarios";
      
      $query = $this->db->query( $sql );
      $result = $query->result();

        if ($result)
            return $result;
        else
            return false;
   }

   public function checkEmail($correo){
      $this->db->select('correo');
      $this->db->from('c_usuarios');
      $this->db->where('correo', $correo);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
  }

   public function get_byIdUser($id){

      if( $id > 0){
         $response = new StdClass();         
    
         $sql = " SELECT * FROM c_usuarios  WHERE  id = ".$id."    LIMIT 1 ";
         $query = $this->db->query(  $sql  ); 
         $response = $query->row();
    
         return $response;
        }

   }

   public function deleteUser($idusuario){

      var_dump($idusuario);
            $this->db->where('id',$idusuario);
            $this->db->delete('c_usuarios');

            return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 
   }

}