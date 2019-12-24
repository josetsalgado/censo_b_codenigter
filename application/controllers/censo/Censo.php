<?php 

	$this->load->model('censo_model');
	switch($this->uri->segment(3)){
		default:
		case "search": 
		case "home": 

			if($this->session->userdata('logueado')){
				$view_data = array();
				$view_data['nombre'] = $this->session->userdata('nombre');
				$view_data['rol'] = $this->session->userdata('rol');
				if ($view_data['rol'] =="Empadronador" or $view_data['rol'] =="Transcriptor") {
					redirect('censo/censo/editar');
				}
			}else{censo/
				redirect('/');
			}	

		    $response = new StdClass();	

			$response->rows = $this->censo_model->get_Censos();
			$view_data["data"] = $response;

			$view_data["menu"] = true;
			$this->load->view('Head', $view_data);
			$this->load->view('censo/home', $view_data);
			$this->load->view('Footer', $view_data);
		
		break;

		case "editar":
		case "preview":
			if($this->session->userdata('logueado')){
				$view_data = array();
				$view_data['nombre'] = $this->session->userdata('nombre');
				$view_data['rol'] = $this->session->userdata('rol');
			}else{
				redirect('/');
			}

			$objCenso = new StdClass();
			$objEmpadronador = new StdClass();


			$view_data["menu"] = true;

			$id = $this->uri->segment(4);
			if( $id == "" or $id == "0"){
				$id = 0;
			}
			 $objCenso = $this->censo_model->get_byIdCenso( $id );
			 $objEmpadronador = $this->censo_model->get_empadronador();

			 $view_data["empadronador"] = $objEmpadronador;	
			 $view_data["data"] = $objCenso;

			 if( $this->uri->segment(3) == "editar"){

				$this->load->view('Head', $view_data);
				$this->load->view('censo/editar',$view_data);
				$this->load->view('Footer', $view_data);

			 }else if( $this->uri->segment(3) == "preview"){

			 	$this->load->view('Head', $view_data);
				$this->load->view('censo/preview',$view_data);
				$this->load->view('Footer', $view_data);

			 }	

		break;
		case "aprobar":

  	  	if($this->session->userdata('logueado')){


  	  		$idcenso = $_GET["id"];
  	  		$idcenso2 = (int) $idcenso;
  	  		$ArrRegisterCenso = array();
  	  		$ArrRegisterCenso['estatus']  = "Corregida";
  	  		$ArrRegisterCenso['supervisor']  = $this->session->userdata('id');
		
		$data = $this->censo_model->aprobar($idcenso2,$ArrRegisterCenso);

		echo json_encode($data);

  	  	}else{
  	  		redirect('/');
  	  	}


		break;
		case "update":

		/*$postdata = file_get_contents("php://input");
  	  	$request = json_decode($postdata);*/

  	  	if($this->session->userdata('logueado')){


		$postdata = file_get_contents("php://input");
  	  	$request = json_encode($_POST);
  	  	$requestpost = json_decode($request);



  	  	$objContribuyente = new StdClass();
  	  	$objActividadEconomica = new StdClass();
  	  	$objInmuebles = new StdClass();
  	  	$objExpendioLicores = new StdClass();
  	  	$objPublicidad = new StdClass();
  	  	$objDetallesEstablecimiento = new StdClass();
  	  	$objApuestas = new StdClass();
  	  	$objServElectrico = new StdClass();
  	  	$objDatosPersonales = new StdClass();
  	  	$ArrRegisterCenso = array();

  		$rol_user = $this->session->userdata('rol');


		/* Obj Identificacion del Contribuyente */
		$idcontribuyente							= @$requestpost->idcontribuyente;
		$objContribuyente->idcontribuyente			= (int) $idcontribuyente;
		$objContribuyente->rif			 			= @$requestpost->rif;
		$objContribuyente->razon_social   			= @$requestpost->razon_social;
		$objContribuyente->denominacion_comercial   = @$requestpost->denominacion_comercial;
		$objContribuyente->parroquia  				= @$requestpost->parroquia;
		$objContribuyente->sector  					= @$requestpost->sector;
		$objContribuyente->urb  					= @$requestpost->urb;
		$objContribuyente->avenida_calle  			= @$requestpost->avenida_calle;
		$objContribuyente->edif_quinta  			= @$requestpost->edif_quinta;
		$objContribuyente->piso  					= @$requestpost->piso;
		$objContribuyente->punto_referencia  		= @$requestpost->punto_referencia;
		$objContribuyente->cod_telefono_1  			= @$requestpost->cod_telefono_1;
		$objContribuyente->telefono_1  				= @$requestpost->telefono_1;
		$objContribuyente->cod_telefono_2  			= @$requestpost->cod_telefono_2;
		$objContribuyente->telefono_2  				= @$requestpost->telefono_2;
		$objContribuyente->e_mail  					= @$requestpost->e_mail;


		/*Obj Actividad Economica */
		$idactividad  								=  @$requestpost->idactividad;
		$objActividadEconomica->idactividad  		=  (int) $idactividad;
		$objActividadEconomica->nun_cuenta  		=  @$requestpost->nun_cuenta;
		$objActividadEconomica->num_cuenta_actual  	=  @$requestpost->num_cuenta_actual;
		$objActividadEconomica->maquina_fiscal  	=  @$requestpost->maquina_fiscal;
		$objActividadEconomica->licencia_AE 	 	=  @$requestpost->licencia_AE;
		$objActividadEconomica->anio_licencia  	    =  @$requestpost->anio_licencia;
		$objActividadEconomica->exhibida  			=  @$requestpost->exhibida;
		$objActividadEconomica->declaracion_AE  	=  @$requestpost->declaracion_AE;
		$objActividadEconomica->mes_declaracion_AE  =  @$requestpost->mes_declaracion_AE;
		$objActividadEconomica->ano_declaracion_AE  =  @$requestpost->ano_declaracion_AE;
		$objActividadEconomica->cant_grupos  		=  @$requestpost->cant_grupos;
		$objActividadEconomica->monto_ingreso  	    =  @$requestpost->monto_ingreso;
		$objActividadEconomica->monto_impuesto  	=  @$requestpost->monto_impuesto;
		$objActividadEconomica->monto_actual  		=  @$requestpost->monto_actual;
		$objActividadEconomica->grupos_act_conomicas  =  @$requestpost->grupos_act_conomicas;
		$objActividadEconomica->tipo_actividades_economicas  =  json_encode(@$requestpost->tipo_actividades_economicas);
		$objActividadEconomica->otra_ctividades_economica  =  @$requestpost->otra_ctividades_economica;

		/*Obj  Inmuebles urbanos */
		$idinmueble							= @$requestpost->idinmueble;
		$objInmuebles->idinmueble			= (int) $idinmueble;
		$objInmuebles->num_identificacion	= @$requestpost->num_identificacion;
		$objInmuebles->numero_catastral		= @$requestpost->numero_catastral;
		$objInmuebles->solvencia_inmueble	= @$requestpost->solvencia_inmueble;
		$objInmuebles->ano_solvencia		= @$requestpost->ano_solvencia;
		$objInmuebles->inmueble				= @$requestpost->inmueble;

		/*Obj Licencia para el expendio de licores */
		$idexpendio									= @$requestpost->idexpendio;
		$objExpendioLicores->idexpendio				= (int) $idexpendio;
		$objExpendioLicores->licencia_licores		= @$requestpost->licencia_licores;
		$objExpendioLicores->ano_licencia_lic		= @$requestpost->ano_licencia_lic;
		$objExpendioLicores->nro_licencia			= @$requestpost->nro_licencia;
		$objExpendioLicores->tipo_expendio			= @$requestpost->tipo_expendio;

		/*Obj Publicidad comercial*/
		$idpublicidad								= @$requestpost->idpublicidad;
		$objPublicidad->idpublicidad				= (int) $idpublicidad;
		$objPublicidad->aviso_publicitario			= @$requestpost->aviso_publicitario;
		$objPublicidad->num_cuenta_publicidad		= @$requestpost->num_cuenta_publicidad;
		$objPublicidad->cantidad_avisos				= @$requestpost->cantidad_avisos;
		$objPublicidad->tipo_aviso					= @$requestpost->tipo_aviso;
		$objPublicidad->tipo_aviso_remo				= @$requestpost->tipo_aviso_remo;
		$objPublicidad->iluminado					= @$requestpost->iluminado;

		/*Obj Apuestas lícitas*/
		$idapuestas							= @$requestpost->idapuestas;
		$objApuestas->idapuestas			= (int) $idapuestas;
		$objApuestas->apuestas_licitas		= @$requestpost->apuestas_licitas;
		$objApuestas->num_cuenta_apuestas	= @$requestpost->num_cuenta_apuestas;
		$objApuestas->cantidad_maquinas		= @$requestpost->cantidad_maquinas;
		$objApuestas->tipo_maquinas			= @$requestpost->tipo_maquinas;
		$objApuestas->actividad				= @$requestpost->actividad;


		/*Obj Detalles del establecimiento*/ 
		$iddetalles											= @$requestpost->iddetalles;
		$objDetallesEstablecimiento->iddetalles				= (int) $iddetalles;
		$objDetallesEstablecimiento->cant_trabajadores		= @$requestpost->cant_trabajadores;
		$objDetallesEstablecimiento->num_mesas_restaurant		= @$requestpost->num_mesas_restaurant;
		$objDetallesEstablecimiento->tipo_establecimiento	= @$requestpost->tipo_establecimiento;
		$objDetallesEstablecimiento->num_CNAE				= @$requestpost->num_CNAE;


		/*Obj Servicio eléctric*/ 
		$idservicio											= @$requestpost->idservicio;
		$objServElectrico->idservicio						= (int) $idservicio;
		$objServElectrico->contrato_electricidad			= @$requestpost->contrato_electricidad;

		/* Obj Datos personales*/
		$iddatos										= @$requestpost->iddatos;
		$objDatosPersonales->iddatos					= (int) $iddatos;
		$objDatosPersonales->reprensentante_legal		= @$requestpost->reprensentante_legal;
		$objDatosPersonales->cedula_representante		= @$requestpost->cedula_representante;
		$objDatosPersonales->cod_telf_fijo_representante= @$requestpost->cod_telf_fijo_representante;
		$objDatosPersonales->telf_fijo_representante	= @$requestpost->telf_fijo_representante;
		$objDatosPersonales->cod_telf_movil_representante= @$requestpost->cod_telf_movil_representante;
		$objDatosPersonales->telf_movil_representante	= @$requestpost->telf_movil_representante;
		$objDatosPersonales->email_reprensentante_legal	= @$requestpost->email_reprensentante_legal	;
		

		$objDatosPersonales->administrador				= @$requestpost->administrador;
		$objDatosPersonales->cedula_administrador		= @$requestpost->cedula_administrador;
		$objDatosPersonales->cod_telf_fijo_administrador= @$requestpost->cod_telf_fijo_administrador;
		$objDatosPersonales->telf_fijo_administrador	= @$requestpost->telf_fijo_administrador;
		$objDatosPersonales->cod_telf_movil_administrador	= @$requestpost->cod_telf_movil_administrador;
		$objDatosPersonales->telf_movil_administrador	= @$requestpost->telf_movil_administrador;
		$objDatosPersonales->email_reprensentante_administrador	= @$requestpost->email_reprensentante_administrador;
		

		$objDatosPersonales->persona_contacto			= @$requestpost->persona_contacto;
		$objDatosPersonales->cedula_contacto			= @$requestpost->cedula_contacto;
		$objDatosPersonales->cod_telf_fijo_contacto			= @$requestpost->cod_telf_fijo_contacto;
		$objDatosPersonales->telf_fijo_contacto			= @$requestpost->telf_fijo_contacto;
		$objDatosPersonales->cod_telf_movil_contacto			= @$requestpost->cod_telf_movil_contacto;
		$objDatosPersonales->telf_movil_contacto		= @$requestpost->telf_movil_contacto;
		$objDatosPersonales->email_contacto				= @$requestpost->email_contacto;
		

		$objDatosPersonales->encargado					= @$requestpost->encargado;
		$objDatosPersonales->cedula_encargado			= @$requestpost->cedula_encargado;
		$objDatosPersonales->cod_telf_fijo_encargado= @$requestpost->cod_telf_fijo_encargado;
		$objDatosPersonales->telf_fijo_encargado		= @$requestpost->telf_fijo_encargado;
		$objDatosPersonales->cod_telf_movil_encargado		= @$requestpost->cod_telf_movil_encargado;
		$objDatosPersonales->telf_movil_encargado		= @$requestpost->telf_movil_encargado;
		$objDatosPersonales->email_encargado			= @$requestpost->email_encargado;

		$idcenso = @$requestpost->idcenso;

		 $idcenso2 = (int) $idcenso;

		 
		/*array censo*/
		$ArrRegisterCenso['observaciones']  = @$requestpost->observaciones;
		$ArrRegisterCenso['empadronador']  = @$requestpost->empadronador;
		$ArrRegisterCenso['verificacion_telefonica']  = @$requestpost->verificacion_telefonica;
		
		if( !isset($idcenso) or $idcenso =="0" or $idcenso==""){   
			$ArrRegisterCenso['estatus']  = "Sin Corrección";
			$ArrRegisterCenso['usuario']  = $this->session->userdata('id');
		}else{
			$ArrRegisterCenso['estatus']  = "Corregida";
			$ArrRegisterCenso['supervisor']  = $this->session->userdata('id');
		}

		
		$ArrRegisterCenso['fecha']  = date("d/m/Y");

		$data = $this->censo_model->addCenso($idcenso2,$objContribuyente,$objActividadEconomica,$objInmuebles,$objExpendioLicores,$objPublicidad,$objDetallesEstablecimiento,$objApuestas,$objServElectrico,$objDatosPersonales,$ArrRegisterCenso);

		echo json_encode($data);



  	  	}else{
  	  		redirect('/');
  	  	}

		break;	
		case 'delete':
				//echo "deleted:".$_GET["idsuscripcion"];
		$idcenso = $_GET["id"];
		$idcenso2 = (int) $idcenso;

		$data = $this->censo_model->deleteUser($idcenso2);

		echo json_encode($data);

		break;	
	}


 ?>