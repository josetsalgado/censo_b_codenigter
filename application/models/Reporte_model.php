<?php
class Reporte_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }



   public function get_export($q){
        $sql = "SELECT ".$q."
                FROM c_censo cen
                INNER JOIN c_contribuyente idc ON (cen.idcontribuyente = idc.idcontribuyente) 
                INNER JOIN c_actividad_economica AS act ON (cen.idactividad = act.idactividad)
                INNER JOIN c_inmuebles AS inm ON (cen.idinmueble = inm.idinmueble)
                INNER JOIN c_expendio_licores AS exp ON(cen.idexpendio=exp.idexpendio) 
                INNER JOIN c_publicidad AS pub ON(cen.idpublicidad = pub.idpublicidad) 
                INNER JOIN c_apuestas AS apu ON(cen.idapuestas = apu.idapuestas) 
                INNER JOIN c_detalles_establecimiento AS det ON(cen.iddetalles = det.iddetalles) 
                INNER JOIN c_serv_electrico AS ser ON(cen.idservicio = ser.idservicio) 
                INNER JOIN c_datos_personales AS dat ON(cen.iddatos = dat.iddatos) 
                INNER JOIN c_usuarios AS usr ON(cen.usuario = usr.id)";
      
      $query = $this->db->query( $sql );
      $result = $query->result();

        if ($result)
            return $result;
        else
            return false;
   }
  

}