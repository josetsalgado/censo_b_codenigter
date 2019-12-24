<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
  
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                        <a>Home</a>
                        <a>Censo</a>
                        Corregir
                   </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small><i class="fa fa-list-alt"></i> CENSO DE ACTIVIDADES ECONÓMICAS 2019</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <!--   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> -->
                     
                      <?php if($rol == "Administrador" && $data->estatus <>  "Corregida" or $rol == "Supervisor" && $data->estatus <>  "Corregida"){ ?>
                        <li>
                          <a class="btn-aprobar btn btn-xs btn-default btn-action sw-btn-next" name="Activar" data-toggle="tooltip" data-placement="right" id="<?php echo  $data->idcenso?>">Aprobar</i></a> 
                        </li>

                      
                      <li>
                        <a href="<?php echo get_site_url("censo/censo/editar/".$data->idcenso)?>" class="btn btn-primary sw-btn-next" type="submit">
                                  Editar
                                </a> 
                      </li>
                      <li><a href="<?php echo get_site_url("/censo/censo/home")?>" class="btn btn-primary sw-btn-next" type="submit">
                                  Volver al listado
                                </a>  
                      </li>
                      <?php }?>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  	<div class="row">
                  		<!-- NEW COL START -->
                  		<article class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset>
                          <div class="row">
                          
                          <div class="x_title pull-right">
                            <div class="row">
                              <div class="tile-stats">
                              <div class="col-md-9 col-sm-9 col-xs-6 tile pull-right">
                                <span>Nro. Control</span>
                                <h2> 000<?php echo $data->idcenso?> <i class="fa fa-check-square-o"></i></h2>
                              </div>
                            </div>
                            </div>
                            <div style="clear: both;"></div>
                          </div>
                          </div>
                        </fieldset>
								<fieldset>
									<h4><i class="fa fa-user"></i> Identificación del contribuyente</h4> <hr>
									 <div class="form-group row">
                             <div class="col-md-6">
                                   <label for="rif">Rif:</label>
                                   <span class="view-text"><?php echo $data->rif?></span>
                              </div>

                              <div class="col-md-6">
                                   <label for="denominacion_comercial">Denominación Comercial:</label>
                                   <span class="view-text"><?php echo $data->denominacion_comercial?></span> 
                              </div>  
                         </div>

                        <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="razon_social">Razón Social:</label>
                                  <span class="view-text"><?php echo $data->razon_social?></span> 
                            </div>    
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-4">
                                   <label for="parroquia">Parroquia:</label>
                                    <span class="view-text"><?php echo $data->parroquia?></span> 
                              </div> 
                              <div class="col-md-4">
                                   <label for="sector">Sector:</label>
                                   <span class="view-text"><?php echo $data->sector?></span> 
                              </div> 
                              <div class="col-md-4">
                                   <label for="urb">Urb:</label>
                                   <span class="view-text"><?php echo $data->urb?></span> 
                              </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                   <label for="avenida_calle">Avenida / Calle:</label>
                                   <span class="view-text"><?php echo $data->avenida_calle?></span> 

                              </div> 
                              <div class="col-md-4">
                                   <label for="edif_quinta">Edif. / Quinta / Casa:</label>
                                    <span class="view-text"><?php echo $data->edif_quinta?></span>
                              </div> 
                              <div class="col-md-4">
                                   <label for="piso">Piso:</label>
                                   <span class="view-text"><?php echo $data->piso?></span>
                              </div> 
                        </div>
                        <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="punto_referencia">Punto de referencia:</label>
                                 <span class="view-text"><?php echo $data->punto_referencia?></span>
                            </div>    
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                   <label for="telefono_1">Teléfono 1:</label>
                                   <span class="view-text"><?php echo $data->cod_telefono_1."-".$data->telefono_1?></span>
                              </div> 
                              <div class="col-md-4">
                                   <label for="telefono_2">Teléfono 2:</label>
                                   <span class="view-text"><?php echo $data->cod_telefono_2."-".$data->telefono_2?></span>
                              </div> 
                              <div class="col-md-4">
                                   <label for="e_mail">Mail:</label>
                                   <span class="view-text"><?php echo $data->e_mail?></span>
                              </div> 
                        </div>

                        <br><h4><i class="fa fa-institution"></i> Actividades Económicas</h4> <hr>
                           

                           <div class="form-group row">
                             <div class="col-md-8">
                                 <label for="nun_cuenta">Número de Cuenta:</label>
                                 <span class="view-text"><?php echo $data->num_cuenta_actual?></span>
                            </div> 
                            <div class="col-md-8">
                                 <label for="nun_cuenta">Número de Cuenta anterior:</label>
                                 <span class="view-text"><?php echo $data->nun_cuenta?></span>
                            </div>   
                            <div class="col-md-4">
                                 <label for="nun_cuenta">Máquina fiscal operativa:</label>
                                 <span class="view-text"><?php echo $data->maquina_fiscal?></span>
                            </div>    
                        </div>
                         <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="licencia_AE">Liciencia de A.E. Nro:</label>
                                 <span class="view-text"><?php echo $data->licencia_AE?></span>
                            </div>
                             <div class="col-md-3">
                                <label for="anio_licencia">Año:</label>          
                                <span class="view-text"><?php echo $data->anio_licencia?></span>
                            </div>
                             <div class="col-md-5">
                              	<label for="exhibida">Exibida:</label>
                              	<span class="view-text"><?php echo $data->exhibida?></span>
                            </div>    
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                   <label for="declaracion_AE">¿Presentó Declaración de A.E?:</label>
                                   <span class="view-text"><?php echo $data->declaracion_AE?></span>                                  
                            </div> 
                             <div class="col-md-2 ">
                                 <label for="mes_declaracion_AE">Mes:</label>
                                 <span class="view-text"><?php echo $data->mes_declaracion_AE?></span> 
                            </div>
                             <div class="col-md-2 ">
                                 <label for="ano_declaracion_AE">Año:</label>
                                 <span class="view-text"><?php echo $data->ano_declaracion_AE?></span> 
                            </div> 
                            <div class="col-md-2 declaracion_AE">
                                 <label for="cant_grupos">Cant. Grupos:</label>
                                 <span class="view-text"><?php echo $data->cant_grupos?></span>
                            </div>    
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                   <label for="monto_ingreso">Monto de Ingreso:</label>
                                   <span class="view-text"><?php echo $data->monto_ingreso?></span>
                              </div> 
                              <div class="col-md-6">
                                   <label for="monto_impuesto">Monto de Impuesto:</label>
                                   <span class="view-text"><?php echo $data->monto_impuesto?></span>
                              </div> 
                        </div>
                         <div class="form-group row">
                              <div class="col-md-12">
                                   <label for="tipo_actividades_economicas">¿Que tipo de Actividades Económicas observo durante la visita?</label>
                                   <span class="view-text"><?php echo $data->tipo_actividades_economicas?></span>
    
                                  
                                   <?php echo (!empty($data->otra_ctividades_economica) && $data->otra_ctividades_economica > '') ? '<label for="tipo_actividades_economicas">Otros:</label><span class="view-text">'.$data->otra_ctividades_economica.'</span>' : ''; ?> 
                              </div> 
                         </div>
                          <div id="text_otro" class="form-group row">
                              <div class="col-md-12">
                                   <label for="grupos_act_conomicas">¿Grupo de Actividades Económicas autorizadas?</label>
                                   <span class="view-text"><?php echo $data->grupos_act_conomicas?></span> 
                              </div> 
                         </div>
                      	<br><h4><i class="fa fa-building"></i> Inmuebles urbanos</h4> <hr>

                      	<div class="form-group row">
                             <div class="col-md-6">
                                 <label for="num_identificacion">Número de Identificación:</label>
                                  <span class="view-text"><?php echo $data->num_identificacion?></span>
                            </div> 
                            <div class="col-md-6">
                                 <label for="numero_catastral">Número Catastral:</label>
                                  <span class="view-text"><?php echo $data->numero_catastral?></span>
                            </div>   
                        </div>
                        <div class="form-group row">
                              <div class="col-md-5">
                                    <label for="name">¿Presentó Solvencia de Inmueble?:</label>
                                    <span class="view-text"><?php echo $data->solvencia_inmueble?></span>
                              </div> 
                             <div class="col-md-2">
                                <label for="ano_solvencia">Año</label>
                                <span class="view-text"><?php echo $data->ano_solvencia?></span>
                            </div> 
                            <div class="col-md-5">
                                <label for="inmueble">Inmueble:</label>
                                <span class="view-text"><?php echo $data->inmueble?></span>
                         </div>   
                        </div>
                    </div>
                        <br><h4><i class="fa fa-credit-card"></i> Licencia para el expendio de licores</h4> <hr>

                        <div class="form-group row">
                              <div class="col-md-6">
	                                <label for="licencia_licores">¿Presentó Licencia de Licores?:</label>
	                                 <span class="view-text"><?php echo $data->licencia_licores?></span>
                              </div> 
                             <div class="col-md-2">
                                <label for="ano_licencia_lic">Año</label>
                                <span class="view-text"><?php echo $data->ano_licencia_lic?></span>
                            </div> 
                            <div class="col-md-4">
                                 <label for="nro_licencia">Nro. Licencia:</label>
                                 <span class="view-text"><?php echo $data->nro_licencia?></span>
                            </div>
                         </div>
                          <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="tipo_expendio">Tipo de Expendio:</label>
                                 <span class="view-text"><?php echo $data->tipo_expendio?></span>
                            </div>    
                          </div>

                          <br><h4><i class="fa fa-desktop"></i> Publicidad comercial</h4> <hr>

                           <div class="form-group row">
                              <div class="col-md-6">
                                    <label for="aviso_publicitario">¿Posee aviso publicitario?:</label>
                                    <span class="view-text"><?php echo $data->aviso_publicitario?></span>                      
                              </div> 
                            <div class="col-md-6">
                                 <label for="num_cuenta_publicidad">Nro. Cuenta:</label>
                                 <span class="view-text"><?php echo $data->num_cuenta_publicidad?></span> 
                            </div>
                         </div>
                          <div class="form-group row">
                              <div class="col-md-4">
                                 <label for="cantidad_avisos">Cantidad de Avisos:</label>
                                 <span class="view-text"><?php echo $data->cantidad_avisos?></span> 
                            </div>
                              <div class="col-md-4">
                                    <label for="tipo_aviso">Tipo de Avisos:</label>
                                     <span class="view-text"><?php echo $data->tipo_aviso." ".$data->tipo_aviso_remo?></span>
                              </div>
                              <div class="col-md-4">
	                                <label for="iluminado">¿Iluminado?:</label>
	                                <span class="view-text"><?php echo $data->iluminado?></span>
                              </div> 
                          </div>

                          <br><h4><i class="fa fa-puzzle-piece"></i>  Apuestas lícitas</h4> <hr>

                          <div class="form-group row">
                              <div class="col-md-6">
                                    <label for="apuestas_licitas">¿Actividad de Apuestas Lícitas?:</label>
                                    <span class="view-text"><?php echo $data->apuestas_licitas?></span>
                              </div> 
                            <div class="col-md-6">
                                 <label for="num_cuenta_apuestas">Nro. Cuenta o Permiso:</label>
                                 <span class="view-text"><?php echo $data->num_cuenta_apuestas?></span>
                            </div>
                         </div>
                          <div class="form-group row">
                              <div class="col-md-4">
                                 <label for="cantidad_maquinas">Cantidad de Máquinas:</label>
                                 <span class="view-text"><?php echo $data->cantidad_maquinas?></span>
                              </div>
                              <div class="col-md-8">
                                <label for="tipo_maquinas">Tipo:</label>
                                <span class="view-text"><?php echo $data->tipo_maquinas?></span>
                              </div> 
                          </div>
                          <div class="form-group row">
                           <div class="col-md-12">
                                   <label for="actividad">Describa brevemente la actividad que realiza:</label>
                                   <span class="view-text"><?php echo $data->actividad?></span>
                            </div>
                        </div>

                            <br><h4><i class="fa fa-building-o"></i>  Detalles del establecimiento</h4> <hr>

                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="name">Cantidad de trabajadores:</label>
                                         <span class="view-text"><?php echo $data->cant_trabajadores?></span>
                                    </div>  
                                </div>
                                    <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="name">Número de mesas (Restaurant):</label>
                                          <span class="view-text"><?php echo $data->num_mesas_restaurant?></span>
                                       </fieldset>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="tipo_establecimiento">Tipo de establecimiento:</label>
                                        <span class="view-text"><?php echo $data->tipo_establecimiento?></span>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="num_CNAE">Código o Número de CNAE:</label>
                                        <span class="view-text"><?php echo $data->num_CNAE?></span>
                                    </div>    
                                </div>

                                <br><h4><i class="fa fa-flash"></i> Servicio eléctrico</h4> <hr>
								
                                <div class="form-group row">
                                	<div class="col-md-8">
                                		<label for="contrato_electricidad">Cuenta Contrato Electricidad:</label>
                                		<span class="view-text"><?php echo $data->contrato_electricidad?></span>
                                	</div>    
                                </div>

                                 <br><h4><i class="fa fa-child"></i> Datos personales</h4> <hr>

                        <div class="form-group row">
                             

                             <div class="col-md-6">
                                 <label for="reprensentante_legal">Representante Legal:</label>
                                 <span class="view-text"><?php echo $data->reprensentante_legal?></span>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_representante">Cédula Nro.:</label>
                                 <span class="view-text"><?php echo $data->cedula_representante?></span>
                            </div>       
                        </div>
                        <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="telf_fijo_representante">Teléfono Fijo:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_fijo_representante."-".$data->telf_fijo_representante?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="telf_movil_representante">Teléfono Móvil:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_movil_representante."-".$data->telf_movil_representante?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="email_reprensentante_legal">E-mail:</label>
                                 <span class="view-text"><?php echo $data->email_reprensentante_legal?></span>
                            </div>        
                        </div>
                        <legend><i class="fa fa-user"></i> Administrador</legend>
                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="administrador">Administrador:</label>
                                 <span class="view-text"><?php echo $data->administrador?></span>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_administrador">Cédula Nro.:</label>
                                 <span class="view-text"><?php echo $data->cedula_administrador?></span>
                            </div>       
                        </div>
                        <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="telf_fijo_administrador">Teléfono Fijo:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_fijo_administrador."-".$data->telf_fijo_administrador?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="telf_movil_administrador">Teléfono Móvil:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_movil_administrador."-".$data->telf_movil_administrador?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="email_reprensentante_administrador">E-mail:</label>
                                   <span class="view-text"><?php echo $data->email_reprensentante_administrador?></span>
                            </div>        
                        </div>
                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="persona_contacto">Persona Contacto:</label>
                                 <span class="view-text"><?php echo $data->persona_contacto?></span>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_contacto">Cédula Nro:</label>
                                 <span class="view-text"><?php echo $data->cedula_contacto?></span>
                            </div>       
                        </div>
                        <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="telf_fijo_contacto">Teléfono Fijo:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_fijo_contacto."-".$data->telf_fijo_contacto?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="telf_movil_contacto">Teléfono Móvil:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_movil_contacto."-".$data->telf_movil_contacto?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="email_contacto">E-mail:</label>
                                 <span class="view-text"><?php echo $data->email_contacto?></span>
                            </div>        
                        </div>
                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="encargado">Atendido por:</label>
                                 <span class="view-text"><?php echo $data->encargado?></span>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_encargado">Cédula Nro:</label>
                                 <span class="view-text"><?php echo $data->cedula_encargado?></span>
                            </div>       
                        </div>
                        <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="telf_fijo_encargado">Teléfono Fijo:</label>
                                  <span class="view-text"><?php echo $data->cod_telf_fijo_encargado."-".$data->telf_fijo_encargado?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="telf_movil_encargado">Teléfono Móvil:</label>
                                 <span class="view-text"><?php echo $data->cod_telf_movil_encargado."-".$data->telf_movil_encargado?></span>
                            </div>
                             <div class="col-md-4">
                                 <label for="email_encargado">E-mail:</label>
                                  <span class="view-text"><?php echo $data->email_encargado?></span>
                            </div>        
                        </div>

                        <br><h4><i class="fa fa-clipboard"></i> Observaciones</h4> <hr>
 
                        

                        <div class="form-group row">
                              <div class="col-md-12">
                                   <span class="view-text"><?php echo $data->observaciones?></span>
                              </div> 
                         </div>

                       <br><h4><i class="fa fa-check"></i> Validación</h4> <hr>
                         
                        <div class="form-group row">
                              <div class="col-md-4">
                                   <label for="empadronador">Empadronador</label>
                                   <span class="view-text"><?php echo $data->empadronador?></span>
                              </div> 
                         </div>

                    </div>
                </div>

								</fieldset>
                  		</article>
                  	</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

