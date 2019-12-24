<?php
class Censo_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function aprobar($idcenso,$ArrRegisterCenso){

     $this->db->where('idcenso', $idcenso);
            $this->db->update('c_censo', $ArrRegisterCenso);


            $result = ($this->db->affected_rows() > 0) ? TRUE : FALSE;

             if ($result) {
              $resultado = $idcenso;   
            }else{
              $resultado = false;
            }
    return $resultado;

   }

   public function addCenso($idcenso,$objContribuyente,$objActividadEconomica,$objInmuebles,$objExpendioLicores,$objPublicidad,$objDetallesEstablecimiento,$objApuestas,$objServElectrico,$objDatosPersonales,$ArrRegisterCenso){

    if( !isset($idcenso) or $idcenso =="0" or $idcenso==""){            
            $this->db->insert('c_contribuyente', $objContribuyente);             
            $idcontribuyente = $this->db->insert_id();
            $ArrRegisterCenso['idcontribuyente'] = $idcontribuyente;

            $this->db->insert('c_actividad_economica', $objActividadEconomica);             
            $idactividad = $this->db->insert_id();
            $ArrRegisterCenso['idactividad'] = $idactividad;

            $this->db->insert('c_inmuebles', $objInmuebles);             
            $idinmueble = $this->db->insert_id();
            $ArrRegisterCenso['idinmueble'] = $idinmueble;

            $this->db->insert('c_expendio_licores', $objExpendioLicores);             
            $idexpendio = $this->db->insert_id();
            $ArrRegisterCenso['idexpendio'] = $idexpendio;

            $this->db->insert('c_publicidad', $objPublicidad);             
            $idpublicidad = $this->db->insert_id();
            $ArrRegisterCenso['idpublicidad'] = $idpublicidad;

            $this->db->insert('c_apuestas', $objApuestas);             
            $idapuestas = $this->db->insert_id();
            $ArrRegisterCenso['idapuestas'] = $idapuestas;

            $this->db->insert('c_detalles_establecimiento', $objDetallesEstablecimiento);             
            $iddetalles = $this->db->insert_id();
            $ArrRegisterCenso['iddetalles'] = $iddetalles;

            $this->db->insert('c_serv_electrico', $objServElectrico);             
            $idservicio = $this->db->insert_id();
            $ArrRegisterCenso['idservicio'] = $idservicio;

            $this->db->insert('c_datos_personales', $objDatosPersonales);             
            $iddatos = $this->db->insert_id();
            $ArrRegisterCenso['iddatos'] = $iddatos;

            $this->db->insert('c_censo',$ArrRegisterCenso);
            $idcenso = $this->db->insert_id();

            $result = ($this->db->affected_rows() > 0) ? TRUE : FALSE;

            if ($result) {
              $resultado = $idcenso;  
            }else{
              $resultado = false;
            }


        }else{

            $this->db->update('c_contribuyente' , $objContribuyente, array('idcontribuyente' => $objContribuyente->idcontribuyente));

            
            $this->db->update('c_actividad_economica' , $objActividadEconomica, array('idactividad' => $objActividadEconomica->idactividad));
           
            $this->db->update('c_inmuebles' , $objInmuebles, array('idinmueble' => $objInmuebles->idinmueble));

            $this->db->update('c_expendio_licores' , $objExpendioLicores, array('idexpendio' => $objExpendioLicores->idexpendio));


            $this->db->update('c_publicidad' , $objPublicidad, array('idpublicidad' => $objPublicidad->idpublicidad));


            $this->db->update('c_apuestas' , $objApuestas, array('idapuestas' => $objApuestas->idapuestas));



            $this->db->update('c_detalles_establecimiento' , $objDetallesEstablecimiento, array('iddetalles' => $objDetallesEstablecimiento->iddetalles));


            $this->db->update('c_serv_electrico' , $objServElectrico, array('idservicio' => $objServElectrico->idservicio));


            $this->db->update('c_datos_personales' , $objDatosPersonales, array('iddatos' => $objDatosPersonales->iddatos));

            $this->db->where('idcenso', $idcenso);
            $this->db->update('c_censo', $ArrRegisterCenso);


            $result = ($this->db->affected_rows() > 0) ? TRUE : FALSE;

             if ($result) {
              $resultado = $idcenso;   
            }else{
              $resultado = false;
            }


        }


     
        
        
      return $resultado;         

   }





   public function session($correo, $contrasena){

     
      $this->db->select('id, nombre, apellido');
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

   public function get_Count_censos_corregidos(){
    $sql = "SELECT count(cns.idcenso) AS num
            FROM c_censo cns
            INNER JOIN c_contribuyente cont ON (cns.idcontribuyente = cont.idcontribuyente) 
            INNER JOIN c_actividad_economica AS cae ON (cns.idactividad = cae.idactividad)
            INNER JOIN c_inmuebles AS cin ON (cns.idinmueble = cin.idinmueble)
            INNER JOIN c_expendio_licores AS cexl ON(cns.idexpendio=cexl.idexpendio) 
            INNER JOIN c_publicidad AS pu ON(cns.idpublicidad = pu.idpublicidad) 
            INNER JOIN c_apuestas AS apu ON(cns.idapuestas = apu.idapuestas) 
            INNER JOIN c_detalles_establecimiento AS det ON(cns.iddetalles = det.iddetalles) 
            INNER JOIN c_serv_electrico AS serv ON(cns.idservicio = serv.idservicio) 
            INNER JOIN c_datos_personales AS dper ON(cns.iddatos = dper.iddatos) 
            INNER JOIN c_usuarios AS usr ON(cns.usuario = usr.id)
            WHERE cns.estatus = 'Corregida'";
             $query = $this->db->query( $sql );
                    $result = $query->result();
                      if ($result)
                          return $result;
                      else
              return false;

   } 

    public function get_Counts_censos_transcritos(){
        $sql="SELECT count(cns.idcenso) AS num
              FROM c_censo cns
              INNER JOIN c_contribuyente cont ON (cns.idcontribuyente = cont.idcontribuyente) 
              INNER JOIN c_actividad_economica AS cae ON (cns.idactividad = cae.idactividad)
              INNER JOIN c_inmuebles AS cin ON (cns.idinmueble = cin.idinmueble)
              INNER JOIN c_expendio_licores AS cexl ON(cns.idexpendio=cexl.idexpendio) 
              INNER JOIN c_publicidad AS pu ON(cns.idpublicidad = pu.idpublicidad) 
              INNER JOIN c_apuestas AS apu ON(cns.idapuestas = apu.idapuestas) 
              INNER JOIN c_detalles_establecimiento AS det ON(cns.iddetalles = det.iddetalles) 
              INNER JOIN c_serv_electrico AS serv ON(cns.idservicio = serv.idservicio) 
              INNER JOIN c_datos_personales AS dper ON(cns.iddatos = dper.iddatos) 
              INNER JOIN c_usuarios AS usr ON(cns.usuario = usr.id)";

               $query = $this->db->query( $sql );
                    $result = $query->result();
                      if ($result)
                          return $result;
                      else
              return false;

    }

   public function get_Censos(){
      $sql = "SELECT cont.rif, cont.razon_social, cont.denominacion_comercial,concat(ifnull(usr.nombre, ''),' ', ifnull(usr.apellido, '')) transcriptor,cns.fecha, cns.estatus,cns.idcenso, concat(cont.parroquia,' ',cont.avenida_calle,' ',cont.urb, ' ',cont.piso) AS direccion
            FROM c_censo cns
            INNER JOIN c_contribuyente cont ON (cns.idcontribuyente = cont.idcontribuyente) 
            INNER JOIN c_actividad_economica AS cae ON (cns.idactividad = cae.idactividad)
            INNER JOIN c_inmuebles AS cin ON (cns.idinmueble = cin.idinmueble)
            INNER JOIN c_expendio_licores AS cexl ON(cns.idexpendio=cexl.idexpendio) 
            INNER JOIN c_publicidad AS pu ON(cns.idpublicidad = pu.idpublicidad) 
            INNER JOIN c_apuestas AS apu ON(cns.idapuestas = apu.idapuestas) 
            INNER JOIN c_detalles_establecimiento AS det ON(cns.iddetalles = det.iddetalles) 
            INNER JOIN c_serv_electrico AS serv ON(cns.idservicio = serv.idservicio) 
            INNER JOIN c_datos_personales AS dper ON(cns.iddatos = dper.iddatos) 
            INNER JOIN c_usuarios AS usr ON(cns.usuario = usr.id)
            order by cns.fecha desc";
      
      $query = $this->db->query( $sql );
      $result = $query->result();

        if ($result)
            return $result;
        else
            return false;
   }

   public function get_empadronador(){
        $sql = "SELECT * 
        FROM c_usuarios AS usr
        WHERE usr.rol = 'Empadronador'";
      
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

   public function get_byIdCenso($id){

      if( $id > 0){
         $response = new StdClass();         
    
         $sql = " SELECT *
                  FROM c_censo cns
                  INNER JOIN c_contribuyente cont ON (cns.idcontribuyente = cont.idcontribuyente) 
                  INNER JOIN c_actividad_economica AS cae ON (cns.idactividad = cae.idactividad)
                  INNER JOIN c_inmuebles AS cin ON (cns.idinmueble = cin.idinmueble)
                  INNER JOIN c_expendio_licores AS cexl ON(cns.idexpendio=cexl.idexpendio) 
                  INNER JOIN c_publicidad AS pu ON(cns.idpublicidad = pu.idpublicidad) 
                  INNER JOIN c_apuestas AS apu ON(cns.idapuestas = apu.idapuestas) 
                  INNER JOIN c_detalles_establecimiento AS det ON(cns.iddetalles = det.iddetalles) 
                  INNER JOIN c_serv_electrico AS serv ON(cns.idservicio = serv.idservicio) 
                  INNER JOIN c_datos_personales AS dper ON(cns.iddatos = dper.iddatos) 
                  INNER JOIN c_usuarios AS usr ON(cns.usuario = usr.id) 
                  WHERE cns.idcenso = ".$id."  LIMIT 1";
         $query = $this->db->query(  $sql  ); 
         $response = $query->row();
    
         return $response;
        }

   }

   public function deleteUser($idcenso){

      var_dump($idcenso);
            $this->db->where('idcenso',$idcenso);
            $this->db->delete('c_censo');

            return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 
   }

   function search_censo($rif){
        $this->db->where('rif',$rif);
        $this->db->select('rif');
        $this->db->order_by('idcontribuyente', 'ASC');
        $this->db->limit(1);
        $this->db->get('c_contribuyente')->result();
        $resultado = ($this->db->affected_rows() > 0) ? TRUE : FALSE; 

        return $resultado;

      }

   function search_contribuyente($title){
        $this->db->where('num_cuenta_actual',$title);
        $this->db->select('num_cuenta_actual');
        $this->db->order_by('idactividad', 'ASC');
        $this->db->limit(1);
        $this->db->get('c_actividad_economica')->result();
        $resultado = ($this->db->affected_rows() > 0) ? TRUE : FALSE; 

        return $resultado;

      }

      function search_cnae($codigo){
        $this->db->like('codigo', $codigo , 'both');
        $this->db->order_by('id_cnae', 'ASC');
        $this->db->limit(10);
        return $this->db->get('c_cnae')->result();
    }


    

}