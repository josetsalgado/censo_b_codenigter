<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Uploader v3.0 COMUNS Helpers
 *
 * @author			Frank Valle Sanchez
 * @author-email	fvalle81@gmail.com
 */


	/*
	 * PATH HELPERS
	 *
	 * retornan una ruta virtual o fisica segun se el caso.
	 */
	 // ------------------------------------------------------------------------
    
    function get_site_url( $path = '', $protocol = 'autodetect' ){

    	if( $protocol == 'autodetect' ){
			if( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] == 'on' ){
				$current_protocol = "https";
			}
			$current_protocol = "http:";
        
    	}else{
    		$current_protocol = $protocol;
    	}

    	
    	return  str_replace('http:', $current_protocol, site_url( $path ) );

    }

    function get_assets_url ( $path = '' ){
    	 $assets_url = get_site_url( $path );
    	 $assets_url = str_replace("/index.php","/",$assets_url);
    	 $assets_url = str_replace("admin/","assets/",$assets_url);
    	 $assets_url = str_replace("assets//","assets/",$assets_url);
    	 return  $assets_url;
    }


   





	/*
	 * DATE HELPERS
	 *
	 * Genera Mensajes HTML.
	 *
	 */
	// ------------------------------------------------------------------------
	
	/**
	 * dateSmart
	 */	
	function dateSmart($dateIn, $template='{hour}:{min} {day}-{month:name}-{year}'){

		$dateIn .= (strlen($dateIn)<=10) ? " 00:00:00":'';
		$dateOut = $template;

		$dater['year']	 = substr ($dateIn,0,4);
		$dater['month']	 = substr ($dateIn,5,2);
		$dater['day']	 = substr ($dateIn,8,2);
		$dater['hour']	 = substr ($dateIn,11,2);
		if( $dater['hour'] >12) {
			$dater['hour'] = $dater['hour'] - 12;
			$dater['meridian'] = 'pm';
		}else{
			$dater['meridian'] = 'am';
		}
		$dater['min']	 = substr ($dateIn,14,2);
		$dater['seg']	 = substr ($dateIn,17,2);
		
		$dateOut = str_replace('{year}', $dater['year'] ,$dateOut );
		$dateOut = str_replace('{month}', $dater['month'] ,$dateOut );
		$dateOut = str_replace('{day}', $dater['day'] ,$dateOut );
		$dateOut = str_replace('{hour}', $dater['hour'] ,$dateOut );
		$dateOut = str_replace('{min}', $dater['min'] ,$dateOut );
		$dateOut = str_replace('{seg}', $dater['seg'] ,$dateOut );
		$dateOut = str_replace('{meridian}', $dater['meridian'] ,$dateOut );
		

		
		if( substr_count($dateOut, '{month:name}') ){
			$dateOut = @str_replace('{month:name}', date_month_name($dater['month']) ,$dateOut );
		}
		return $dateOut;
	
	}
	/**
	 * current_date
	 */	
	function current_date(){
		return date("Y-m-d H:i:s");
	}
	
	function date_month_name( $mm ){
		if(trim($mm)=='') return '';
		$months = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
		return $months[ abs( $mm  )];
	}
    
	function format_date( $date ){
	
		$dater['day']	 = substr ($date,0,2);
		$dater['month']	 = substr ($date,3,2);
		$dater['year']	 = substr ($date,6,4);
		
		return $dater['year']."-".$dater['month']."-".$dater['day'];
	}
	
	// ------------------------------------------------------------------------
	
	/*
	 * ALERT HELPERS
	 *
	 * Genera Mensajes HTML.
	 *
	 */
	// ------------------------------------------------------------------------
	
	/**
	 * alert_error
	 */	
	function writer_error( $msg = 'Error' ){
	 	echo '<div class="error_new" style="position:relative;"><p>'.$msg.'</p></div>';
	}
	function  msgError($msg){
		 writer_error( $msg  );
		
	}
	
	/**
	 * msgError
	 */	
	 function writer_success( $msg = 'success' ){
	 	echo '<div class="success" style="position:relative;"><p>'.$msg.'</p></div>';
	}
	function  msgSuccess($msg){
		 writer_success( $msg  );
	}
	
	/**
	 * writer
	 */
	function writer( $data ){
		if(!defined("b1_TIME") ){ define("b1_TIME", microtime(TRUE)); }

		$time_generated = microtime(TRUE) - b1_TIME;
		//echo $time_generated ;
		//$time_generated = round( $time_generated , 5);

		$dt = debug_backtrace();
		echo '<pre class="php_writer">'.$dt[0]["file"].", Line ".$dt[0]["line"]." in ".$time_generated." seconds <br>";

		if( is_string( $data ) ){
			//if( !trim($data)=="") $data = "writed ";
			$data = strtolower($data);
			if( $data=='$_p' or $data=='_p' or $data=='_post' or $data=='post' or  $data=='$_post' ){
				echo '$_POST :'; print_r( $_POST );
			}elseif( $data=='$_c' or $data=='_c' or $data=='_cookies' or $data=='cookies' or  $data=='$_cookies' ){
				echo '$_COOKIES :'; print_r( $_COOKIES );
			}elseif( $data=='$_g' or $data=='_g' or $data=='_get' or $data=='get' or  $data=='$_get' ){
				echo '$_GET:'; print_r( $_GET );
			}elseif( $data=='$_r' or $data=='_r' or $data=='_requests' or $data=='requests' or  $data=='$_requests' ){
				echo '$_REQUEST :';print_r( $_REQUEST );
			}else{
				print_r( $data );
			}

		}else{
			print_r( $data );
		}
		echo "</pre>";	
	}
	
	/**
	 * writed
	 */
	function writed( $data ='' ){
		 writer( $data , TRUE );
	}
	
	
	// ------------------------------------------------------------------------
	
	/*
	 * ALERT HELPERS
	 *
	 * Genera Mensajes HTML.
	 *
	 */
	// ------------------------------------------------------------------------
	
	/**
	 * encode_entities
	 */	
	function encode_entities(  $html ='' ){
		writer ("...". htmlentities( $html) );
		// $html );
		writer (  htmlentities( $html, ENT_COMPAT, "UTF-8" ) );
	writed ( htmlentities( $html, ENT_COMPAT, "UTF-8" ) );
		return htmlentities( $html, ENT_QUOTES, "UTF-8" );
	}


	/**
	 * writed
	 */
	function pagination_tool( $config ='' ){
		 $config_pagination = array (	'full_tag_open' => '<div class="pagination center"><ul>',
									'full_tag_close' => '</ul></div>',

									'num_tag_open' => '<li>',
									'num_tag_close' => '</li>',

									'cur_tag_open' => '<li class="active"><a href="#">',
									'cur_tag_close' => '</a></li>',

									'prev_link' => '<<',
									'prev_tag_open' => '<li>',
									'prev_tag_close' => '</li>',

									'next_link' => '>>',
									'next_tag_open' => '<li>',
									'next_tag_close' => '</li>',

									'last_link' => '&Uacute;ltimo',
									'last_tag_open' => '<li>',
									'last_tag_close' => '</li>',

									'first_link' => 'Primero',
									'first_tag_open' => '<li>',
									'first_tag_close' => '</li>');

		 return array_merge($config,$config_pagination);

	}
	
    function getUbigeo( $codeDepartamento, $codeProvincia, $codeDistrito ){

        $CI = get_instance();
        $CI->load->model('ubigeo');
        return $CI->ubigeo->get( $codeDepartamento, $codeProvincia, $codeDistrito );

    }

    setlocale(LC_ALL, 'en_US.UTF8');
	function toAscii($str, $replace=array(), $delimiter='-') {
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}

		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

		return $clean;
	}
    
    /***********************************************************************
    		FUNCION UTILITARIAS - PRODU
    ***********************************************************************/
    //formatingDateToProdu: solo para formatos de "Y-m-d" a "m/d/Y"
   function formatingDateToProdu( $dateIn ){

    	$dateIn =  trim( $dateIn );
    	if( is_null($dateIn) or $dateIn == "0000-00-00" or $dateIn == ""){ return ""; }
    	
    	$dateIn =  str_replace( '/', '-', $dateIn );
		$dateOut = date(  "m/d/Y", strtotime($dateIn) );
		return $dateOut;

   }

   //formatingDateToProdu: solo para formatos de  "m/d/Y" a "Y-m-d"
   function formatingDateToDB( $dateIn ){

    	$dateIn =  trim( $dateIn );
    	if( is_null($dateIn) or $dateIn == "00/00/00" or $dateIn == ""){ return "0000-15-09"; }
    	
    	$dateIn =  str_replace( '-', '/', $dateIn );
		$dateOut = date( "Y-m-d", strtotime($dateIn) );
		return $dateOut;

   }
  
	
	
