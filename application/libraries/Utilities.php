<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class utilities {
	 var $CI;

	
	function __construct()
	{
		$this->CI =& get_instance();

	}

    function get_currentPage()
    { 	$currentPage = (	
    						$this->CI->input->get("page") == "" 
							or $this->CI->input->get("page") == "1" 
							or $this->CI->input->get("page") == "0" 
						)? 1  :$this->CI->input->get("page"); 
		return  $currentPage;
    }

    function get_textSearch($variable="searchtext")
    { 	$textSearch = (	$this->CI->input->get($variable) == "" 
							or $this->CI->input->get($variable) != "" 
						)? $this->CI->input->get($variable): ""; 
		return  $textSearch;
		

    }
    function get_currentId()
    { 	$textSearch = (	$this->CI->input->get("id") == "" 
							or $this->CI->input->get("id") != "" 
						)? $this->CI->input->get("id"): ""; 
		return  $textSearch;
		

    }
    
    /*
    	CMG	
    	11/MAY/2016
    	FUNCTION TO REMOVE HTML TAGS WHEN IS USING THE RICH TEXT FIELDS, IN COPY PASTE MAY PASS unnecessaries TAGS
    */
    function remove_tagsRichText($text)
    { 	
    	$text=preg_replace('/(<[^>]*?br[^>]*?>\s*){3,}/i', '<br/>', $text);
    	$tmpText = htmlentities($text, null, 'utf-8');
    	$resultTmp=str_replace(array("<p>","</p><p>","</p>","<div>","</div>","<span>","</span>","<SPAN>","</SPAN>","\r","\n", "\r\n","&nbsp;","'"), array("<br>","<br>","<br>","<br>","<br>","","","",""," "," "," "," ","\'"),$tmpText);
		
		$result=html_entity_decode($resultTmp);
		
		return  $result;
   }
	

	function remove_tagsRichTextSpecial($text)
    { 	
    	$text=preg_replace('/(<[^>]*?br[^>]*?>\s*){3,}/i', '<br/>', $text);
    	$tmpText = htmlentities($text, null, 'utf-8');
    	$resultTmp=str_replace(array("<p>","</p><p>","</p>","<div>","</div>","<SPAN>","</SPAN>","<span>","</span>","\r","\n", "\r\n","&nbsp;"), array("<br>","<br>","<br>","<br>","<br>"," "," "," "," "," "," "," "," "),$tmpText);
		
		$result=html_entity_decode($resultTmp);
		
		return  $result;
   }
   
   function remove_tagsRichTextSpecialNoticia($text)
    { 	
    	$text=preg_replace('/(<[^>]*?br[^>]*?>\s*){3,}/i', '<br/>', $text);
    	$tmpText = htmlentities($text, null, 'utf-8');
    	$resultTmp=str_replace(array("<p>","</p><p>","</p>","<div>","</div>","\r","\n", "\r\n","&nbsp;"), array("<br>","<br>","<br>","<br>","<br>"," "," "," "," "),$tmpText);
		
		$result=html_entity_decode($resultTmp);
		
		return  $result;
   }
	
	
	function generate_permalink($text)
    { 	
    	
    	$resultTmp=str_replace(array("<br>"," "), array("-","-"),strtolower($text));
		
		return  $resultTmp;
   }
   
    function removeSpecialCharacters($string){
			$string=iconv("UTF-8", "ISO-8859-1//TRANSLIT", $string);

				    $fromto = array(
						'À'=>'A','Á'=>'A','Ã'=>'A','Â'=>'A',
						'É'=>'E','Ê'=>'E',
						'Í'=>'I',
						'Ó'=>'O','Õ'=>'O','Ô'=>'O',
						'Ú'=>'U','Ü'=>'U',
						'Ç'=>'C',
						'á'=>'a','à'=>'a','ã'=>'a','â'=>'a',
						'é'=>'e',
						'ê'=>'e',
						'í'=>'i',
						'ó'=>'o','õ'=>'o','ô'=>'o',
						'ç'=>'c'
						);
 
				$tmpVal= strtr($string, $fromto);
				
				
				return str_replace(array(" "),array("-"),$tmpVal);
			
	}
	
	
	function createImageS3($fileImg,$indexImg,$module,$subfolder,$createThumb=true){
		
		include APPPATH."libraries/s3.php";
		include APPPATH."libraries/Imageconvert.php";

		$pathTmpImg='/var/www/html/backendfiles/filetemps/';
		if(!empty($fileImg[$indexImg]) && $fileImg[$indexImg]['error'] == 0){
		
			if($fileImg[$indexImg]['size'] > IMAGE_MAX_SIZE  )
				return false;
			
			$acceptType = array( 
				 'png' => 'image/png',
				 'jpe' => 'image/jpeg',
				 'jpeg' => 'image/jpeg',
				 'jpg' => 'image/jpeg',
				 'gif' => 'image/gif',
			);
			
			if(!in_array($fileImg[$indexImg]['type'], $acceptType)) 
				return false;
			
			if(!getimagesize($fileImg[$indexImg]['tmp_name']))
				return false;	
		
			$fileNameRecord = "";
			////////------------------------------/////////
			$fileName=$this->removeSpecialCharacters($_FILES[$indexImg]['name']);

			if(move_uploaded_file($_FILES[$indexImg]['tmp_name'], $pathTmpImg.$fileName))
			
			$tmpSubFolder=(!empty($subfolder) ? $subfolder."/" : "");
			
			
			$image4= new Imageconvert($pathTmpImg.$fileName);			
			$image4->save(  $pathTmpImg.$fileName ,IMAGETYPE_JPEG, 89); 
	
			s3::setAuth("AKIAJ4P5AA3YF543RNNQ", "I3IM6tEYgx4ps+GtjDM3CFKpwyPZQSskNDvI9bXw");
			$tmp=s3::putObject(file_get_contents( $pathTmpImg.$fileName ),'images.produ.com',$module.$tmpSubFolder.$fileName,'public-read',
				array(),
				array( // Custom $requestHeaders
				"Cache-Control" => "max-age=86400",
				"Expires" => gmdate("D, d M Y H:i:s T", strtotime("+1 days"))
			));
			
			
			$fileNameRecord=$fileName;
			
			if($createThumb){	
				///	save normal temporally at the local server
				$image2= new Imageconvert($pathTmpImg.$fileName);
				$image2->resizeToWidth(320);
				$image2->save( $pathTmpImg."thumb".$fileName ,IMAGETYPE_JPEG, 75);


				s3::setAuth("AKIAJ4P5AA3YF543RNNQ", "I3IM6tEYgx4ps+GtjDM3CFKpwyPZQSskNDvI9bXw");
				$tmp=s3::putObject(file_get_contents( $pathTmpImg."thumb".$fileName ),'images.produ.com',$module.$tmpSubFolder.$fileName,'public-read',
					array(),
					array( // Custom $requestHeaders
					"Cache-Control" => "max-age=86400",
					"Expires" => gmdate("D, d M Y H:i:s T", strtotime("+1 days"))
				));

				unlink($pathTmpImg."thumb".$fileName );	
			}
			
			unlink($pathTmpImg.$fileName );		
		}
			
		return $fileNameRecord;
			
	}
   
   
   
   	function createImageArrayS3($fileImg,$indexImg,$idx,$module,$subfolder,$createThumb=true){
		
		$pathTmpImg='/var/www/html/backendfiles/filetemps/';
		
		if(!empty($fileImg[$indexImg]['error'][$idx]) && $fileImg[$indexImg]['error'][$idx]['file'] == 0){
		
			if($fileImg[$indexImg]['size'][$idx]['file'] > IMAGE_MAX_SIZE  )
				return false;
			
			$acceptType = array( 
				 'png' => 'image/png',
				 'jpe' => 'image/jpeg',
				 'jpeg' => 'image/jpeg',
				 'jpg' => 'image/jpeg',
				 'gif' => 'image/gif',
			);
			
			if(!in_array($fileImg[$indexImg]['type'][$idx]['file'], $acceptType)) 
				return false;
			
			if(!getimagesize($fileImg[$indexImg]['tmp_name'][$idx]['file']))
				return false;	
		
			$fileNameRecord = "";
			////////------------------------------/////////
			$fileName=$this->removeSpecialCharacters($_FILES[$indexImg]['name'][$idx]['file']);

			if(move_uploaded_file($_FILES[$indexImg]['tmp_name'][$idx]['file'], $pathTmpImg.$fileName))
			
			$tmpSubFolder=(!empty($subfolder) ? $subfolder."/" : "");
			
			
			$image4= new Imageconvert($pathTmpImg.$fileName);			
			$image4->save(  $pathTmpImg.$fileName ,IMAGETYPE_JPEG, 89); 
	
			s3::setAuth("AKIAJ4P5AA3YF543RNNQ", "I3IM6tEYgx4ps+GtjDM3CFKpwyPZQSskNDvI9bXw");
			$tmp=s3::putObject(file_get_contents( $pathTmpImg.$fileName ),'images.produ.com',$module.$tmpSubFolder.$fileName,'public-read',
				array(),
				array( // Custom $requestHeaders
				"Cache-Control" => "max-age=86400",
				"Expires" => gmdate("D, d M Y H:i:s T", strtotime("+1 days"))
			));
			
			
			$fileNameRecord=$fileName;
			
			if($createThumb){	
				///	save normal temporally at the local server
				$image2= new Imageconvert($pathTmpImg.$fileName);
				$image2->resizeToWidth(320);
				$image2->save( $pathTmpImg."thumb".$fileName ,IMAGETYPE_JPEG, 75);


				s3::setAuth("AKIAJ4P5AA3YF543RNNQ", "I3IM6tEYgx4ps+GtjDM3CFKpwyPZQSskNDvI9bXw");
				$tmp=s3::putObject(file_get_contents( $pathTmpImg."thumb".$fileName ),'images.produ.com',$module.$tmpSubFolder.$fileName,'public-read',
					array(),
					array( // Custom $requestHeaders
					"Cache-Control" => "max-age=86400",
					"Expires" => gmdate("D, d M Y H:i:s T", strtotime("+1 days"))
				));

				unlink($pathTmpImg."thumb".$fileName );	
			}
			
			unlink($pathTmpImg.$fileName );		
		}
			
		return $fileNameRecord;
			
	}
   
   
   
   	function prettyPrint($tmp){
   	
			echo "<pre>";
			print_r($tmp);
			echo "</pre>";
   	}
   
    function util_replace_tolinkUt($str){
        $str =  substr(strtolower($str), 0, 140);
        
        $str = strip_tags($str);
       
        $str = preg_replace('/ +/', ' ', $str);

        $patron= array( '/ /','/ñ/','/á/','/é/','/i/','/ó/','/ú/','/à/','/è/','/ì/','/ò/','/ù/', 'á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','ö' ,'ü','?','¿','ş','!','¡','ç','&','amp;') ;
        $replace =array( '-','nh','a','e','i','o','u','a','e','i','o','u','a','e','i','o','u','a','e','i','o','u','n','o','u','','','s','','','c','','') ;
        
        $str = trim( str_replace($patron, $replace, $str)   );

        $patron = array ( '&aacute;', '&eacute;', '&iacute;', '&oacute;','&uacute;','&ntilde;','&quot;',
                           '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;','&Uacute;','&Ntilde;',
                           '.',',','#',"'",' ','&nbsp;');
        $replace = array ( 'a', 'e', 'i', 'o','u','n','',
                           'a', 'e', 'i', 'o','u','n',
                           '','','',"",'-','-');
        $str = trim( str_replace($patron, $replace, $str)   );

        $patron = array ( '-+-' );
        $replace = array ( '-' );
        $str = trim( str_replace($patron, $replace, $str)   );

        $patron = array ( '+' );
        $replace = array ( '-' );
        $str = trim( str_replace($patron, $replace, $str)   );

        return $str; //preg_replace($patron, $replace, trim($str));
    }
   
	function getImageJson($images, $params=[],$position=""){
		$images=json_decode($images);
		
		if(!empty($images) && count($images) > 0){
			$path = "path";
			if(isset($params["path"]) && !empty($params["path"])){
				$path = $params["path"];
			}
			if(!empty($position)){
				foreach($images as $item){
					if($item->Version == $position){
						return (!empty($item->Subfolder) ? $item->Subfolder."/" : "").$item->$path;
					}
				}
			}
			return (!empty($images[0]->Subfolder) ? $images[0]->Subfolder."/" : "").$images[0]->$path;
		}
		
		return false;
	}
   
   
}

?>