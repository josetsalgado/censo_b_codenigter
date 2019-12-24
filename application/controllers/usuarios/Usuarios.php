<?php 
    $this->load->model('usuario_model');

	switch($this->uri->segment(3)){
		default:
		case "search": 
		case "home":
			if($this->session->userdata('logueado')){
				$view_data = array();
				$view_data['nombre'] = $this->session->userdata('nombre');
				$view_data['apellido'] = $this->session->userdata('apellido');
				$view_data['rol'] = $this->session->userdata('rol');
				if ($view_data['rol'] =="Empadronador" or $view_data['rol'] =="Transcriptor"  or $view_data['rol'] =="Supervisor") {
					redirect('censo/censo/editar');
				}
				$view_data["menu"] = true;
			}else{
				redirect('/');
			}	 


			$response = new StdClass();	

			$response->rows = $this->usuario_model->get_Users();
			$view_data["data"] = $response;
			$this->load->view('Head', $view_data);
			$this->load->view('usuarios/home',$view_data);
			$this->load->view('Footer', $view_data);

		break;

		case "editar":
			if($this->session->userdata('logueado')){
				$view_data = array();
				$view_data['nombre'] = $this->session->userdata('nombre');
				$view_data['rol'] = $this->session->userdata('rol');
				if ($view_data['rol'] =="Empadronador" or $view_data['rol'] =="Transcriptor" or $view_data['rol'] =="Supervisor") {
					redirect('censo/censo/editar');
				}
				$view_data["menu"] = true;

			}else{
				redirect('/');
			}

			$objUsuario = new StdClass();

			$id = $this->uri->segment(4);
			if( $id == "" or $id == "0"){
				$id = 0;
			}
			 $objUsuario = $this->usuario_model->get_byIdUser( $id );

			 $view_data["data"] = $objUsuario;	

			$this->load->view('Head', $view_data);
			$this->load->view('usuarios/editar', $view_data);
			$this->load->view('Footer', $view_data);
		break;

		case "update":

		if($this->session->userdata('logueado')){
				$view_data = array();
				$view_data['nombre'] = $this->session->userdata('nombre');
				$view_data['rol'] = $this->session->userdata('rol');
				if ($view_data['rol'] =="Empadronador" or $view_data['rol'] =="Transcriptor") {
					redirect('censo/censo/editar');
				}
				$view_data["menu"] = true;

			}else{
				redirect('/');
			}
			$objUsuario = new StdClass();
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
			$this->form_validation->set_rules('correo', 'correo','callback_validar_correo');

  		$objUsuario->id = $this->input->post('idusuario', TRUE);
			$objUsuario->nombre = $this->input->post('nombre', TRUE);
			$objUsuario->apellido = $this->input->post('apellido', TRUE);
			$objUsuario->correo = $this->input->post('correo', TRUE);
			$objUsuario->rol = $this->input->post('rol', TRUE);
			$objUsuario->contrasena = sha1($this->input->post('contrasena', TRUE));
			$objUsuario->telefono = $this->input->post('telefono', TRUE);


  if ($this->form_validation->run()) { 
         
	
			

			$data = $this->usuario_model->adduser($objUsuario);


			if($data){
				redirect('usuarios/usuarios/home');
			}else{
				echo "error verifique los datos";
			}

      } else { 
          $view_data["data"] = $objUsuario;	

			$this->load->view('Head', $view_data);
			$this->load->view('usuarios/editar', $view_data);
			$this->load->view('Footer', $view_data);
      }


	
			break;

			case 'delete':
				//echo "deleted:".$_GET["idsuscripcion"];
			$idusuario = $_GET["id"];
			 $idusuario2 = (int) $idusuario;


			$data = $this->usuario_model->deleteUser($idusuario2);

			echo json_encode($data);

			break;

		
	}


 ?>