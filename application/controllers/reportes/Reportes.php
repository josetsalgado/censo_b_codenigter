<?php 
	$this->load->model('reporte_model');

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
			}else{
				redirect('/');
			} 
			$view_data["menu"] = true;
			$this->load->view('Head', $view_data);
			$this->load->view('reportes/home');
			$this->load->view('Footer', $view_data);

		break;

		case "export":

		if($this->session->userdata('logueado')){


			$postdata = file_get_contents("php://input");
			$request = json_encode($_POST);
			$requestpost = json_decode($request);
			$html = '<table border="1">';
			$html .='<tr>';
			$q = "";

			foreach($requestpost as $clave => $valor) {
				$html .='<th>'.$clave.'</th>';
				$q .= $valor.",";
			}
			$html .='<th>estatus</th>';
			$html .='<th>monto_actual</th>';
			$q .= "cen.estatus,";
			$q .= "act.monto_actual";
			$html .='</tr>';

			$result = $this->reporte_model->get_export($q);

			$arr = array();
 				$x = 0; 
 				$html .= "<tr>";

 				foreach($result as $row){
 					foreach($row as $clave => $valor) {
 						$html .= "<td>".$valor."</td>";

 					}
 				$html .= "</tr>";
 		 		$x = $x + 1 ;
 				}


			//$html .='</tr>';
			$html.= '</table>';

			//$html = "<table><tr><td>ok</td></tr></table>";
			$filena= "Reporte_censo_".date("d/m/Y");

			header("Content-Type: application/xls");    
			header("Content-Disposition: attachment; filename=".$filena.".xls");  
			header("Pragma: no-cache"); 
			header("Expires: 0");

			echo $html;

			$view_data["cabeceras"] = $requestpost;
			$view_data["data"] = $result;
			$view_data["menu"] = true;
			$this->load->view('Head', $view_data);
			$this->load->view('reportes/export');
			$this->load->view('Footer', $view_data);
			exit();

		//	echo json_encode($data);

		}else{
			redirect('/');
		}

	
		break;

		
	}


 ?>