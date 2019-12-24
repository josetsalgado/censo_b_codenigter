<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
  
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <a>Home</a>
                        <a>Censo</a>
                        Crear
                   </div>
                <div class="x_panel">
                  <div id="loading-wrapper">
                        <div id="loading-text">Cargando...</div>
                        <div id="loading-content"></div>
                    </div>
                
                  <div class="x_content">


                    <!-- Smart Wizard -->
      <form action="<?php echo get_site_url("censo/censo/update")?>" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <!-- SmartWizard html -->

        <?php 
 $id = $this->uri->segment(4);
 if($id > 0){
        $var = 'done';
      }else{
        $var = '';
      } 
 ?>
        <div id="smartwizard" class="form_wizard wizard_verticle">
          <ul>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-1"><small>IDENTIFICACIÓN <br> DEL <br>CONTRIBUYENTE</small></a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-2"><small>ACTIVIDADES <br> ECONOMICAS <br><br></small></a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-3"><small>INMUEBLES <br> URBANOS<br><br></small></a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-4"><small>


          LICENCIA PARA <br> EL EXPENDIO <br> DE LICORES</small></a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-5"><small>PUBLICIDAD <br> COMERCIAL <br><br></small></a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-6"><small>APUESTAS <br> LÍCITAS <br><br></small>
                    </a>
               </li>
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>">
                    <a href="#step-7"><small>SERVICIO <br> ELÉCTRICO<br><br></small>
                    </a>
               </li>  
               <li class="<?php  echo ($id != "" or $id != "0") ? $var : ''; ?>"><a href="#step-8"><small>DATOS <br> PERSONALES <br>OBSERVACIONES<br></small></a>
          </li>
     </ul>

            <div>
                 <div id="step-1">
                    <div id="form-step-0" role="form" data-toggle="validator">
                         <br>
                         <input type="hidden" class="form-control" name="idcenso" id="idcenso" value="<?php echo (!empty($data->idcenso) && $data->idcenso > '') ? $data->idcenso : ''; ?>">
                         <input type="hidden" class="form-control" name="idcontribuyente" id="idcontribuyente" value="<?php echo (!empty($data->idcontribuyente) && $data->idcontribuyente > '') ? $data->idcontribuyente : ''; ?>">
                         <input type="hidden" class="form-control" name="idactividad" id="idactividad" value="<?php echo (!empty($data->idactividad) && $data->idactividad > '') ? $data->idactividad : ''; ?>">
                         <input type="hidden" class="form-control" name="idinmueble" id="idinmueble" value="<?php echo (!empty($data->idinmueble) && $data->idinmueble > '') ? $data->idinmueble : ''; ?>">
                         <input type="hidden" class="form-control" name="idexpendio" id="idexpendio" value="<?php echo (!empty($data->idexpendio) && $data->idexpendio > '') ? $data->idexpendio : ''; ?>">
                         <input type="hidden" class="form-control" name="idpublicidad" id="idpublicidad" value="<?php echo (!empty($data->idpublicidad) && $data->idpublicidad > '') ? $data->idpublicidad : ''; ?>">
                         <input type="hidden" class="form-control" name="idapuestas" id="idapuestas" value="<?php echo (!empty($data->idapuestas) && $data->idapuestas > '') ? $data->idapuestas : ''; ?>">
                         <input type="hidden" class="form-control" name="iddetalles" id="iddetalles" value="<?php echo (!empty($data->iddetalles) && $data->iddetalles > '') ? $data->iddetalles : ''; ?>">
                         <input type="hidden" class="form-control" name="idservicio" id="idservicio" value="<?php echo (!empty($data->idservicio) && $data->idservicio > '') ? $data->idservicio : ''; ?>">
                         <input type="hidden" class="form-control" name="iddatos" id="iddatos" value="<?php echo (!empty($data->iddatos) && $data->iddatos > '') ? $data->iddatos : ''; ?>">

                       
                        <div class="form-group row">
                             <div class="col-md-6">
                                   <label for="rif">Rif:</label>
                                  </div>
                         </div>
                         <div class="form-group row">
                            <div class="col-md-12">

                                <div class="col-md-12 input-group" style="float:left;">

                                    <div class="col-md-12 input-group" style="float:left;">
                                        <input class="form-control required formatoRif" data-partner-id="rif" id="rif" name="rif"  type="text" 
                                        value="<?php echo (!empty($data->rif) && $data->rif > '') ? $data->rif : ''; ?>" placeholder="J-00000000-0"/>
                                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                    </div>
                                    <p class="center-align">
                                        <small><b>Ejemplo: J-00000000-0</b>, ingrese la letra (J, G, V, E, P) al inicio, no debe colocar los guiones solo los numeros.</small>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="razon_social">Razón Social:</label>
                                 <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="" value="<?php echo (!empty($data->razon_social) && $data->razon_social > '') ? $data->razon_social : ''; ?>" required>
                                 <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                                   <label for="denominacion_comercial">Denominación Comercial:</label>
                                   <input type="text" class="form-control" name="denominacion_comercial" id="denominacion_comercial" placeholder="" value="<?php echo (!empty($data->denominacion_comercial) && $data->denominacion_comercial > '') ? $data->denominacion_comercial : ''; ?>" required>
                                   <div class="help-block with-errors"></div> 
                              </div>      
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-4">
                                   <label for="parroquia">Parroquia:</label>
                                   <!-- <input type="text" class="form-control" name="parroquia" id="parroquia" placeholder="" value="<?php echo (!empty($data->parroquia) && $data->parroquia > '') ? $data->parroquia : ''; ?>" required>
                                   <div class="help-block with-errors"></div> -->
                                   <select id="parroquia" name="parroquia" class="form-control" >
                                       <?php echo (!empty($data->parroquia) && $data->parroquia > '') ? "<option value='".$data->parroquia."' selected>".$data->parroquia."</option>" : '<option selected hidden>Seleccione</option>'; ?>
                                       <option value="NUESTRA SEÑORA DEL ROSARIO">NUESTRA SEÑORA DEL ROSARIO</option> 
                                       <option value="EL CAFETAL">EL CAFETAL</option> 
                                       <option value="LAS MINAS">LAS MINAS</option> 
                                  </select> 
                              </div> 
                              <div class="col-md-4">
                                   <label for="sector">Sector:</label>
                                   <input type="text" class="form-control" name="sector" id="sector" placeholder="" value="<?php echo (!empty($data->sector) && $data->sector > '') ? $data->sector : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                              <div class="col-md-4">
                                   <label for="urb">Urb:</label>
                                   <input type="text" class="form-control" name="urb" id="urb" placeholder="" value="<?php echo (!empty($data->urb) && $data->urb > '') ? $data->urb : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                   <label for="avenida_calle">Avenida / Calle:</label>
                                   <input type="text" class="form-control" name="avenida_calle" id="avenida_calle" placeholder="" value="<?php echo (!empty($data->avenida_calle) && $data->avenida_calle > '') ? $data->avenida_calle : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                              <div class="col-md-4">
                                   <label for="edif_quinta">Edif. / Quinta / Casa:</label>
                                   <input type="text" class="form-control" name="edif_quinta" id="edif_quinta" placeholder=""  value="<?php echo (!empty($data->edif_quinta) && $data->edif_quinta > '') ? $data->edif_quinta : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                              <div class="col-md-4">
                                   <label for="piso">Piso:</label>
                                   <input type="text" class="form-control" name="piso" id="piso" placeholder="" value="<?php echo (!empty($data->piso) && $data->piso > '') ? $data->piso : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                        </div>
                        <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="punto_referencia">Punto de referencia:</label>
                                 <input type="text" class="form-control" name="punto_referencia" id="punto_referencia" placeholder="" value="<?php echo (!empty($data->punto_referencia) && $data->punto_referencia > '') ? $data->punto_referencia : ''; ?>" required>
                                 <div class="help-block with-errors"></div>
                            </div>    
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telefono_1">Teléfono 1:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telefono_1" name="cod_telefono_1" class="form-control" >
                                       <?php echo (!empty($data->cod_telefono_1) && $data->cod_telefono_1 > '') ? "<option value='".$data->cod_telefono_1."' selected>".$data->cod_telefono_1."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                       <option value="0426">0426</option> 
                                       <option value="0416">0416 </option> 
                                       <option value="0424">0424</option>
                                       <option value="0414">0414</option> 
                                       <option value="0412">0412</option> 

                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telefono_1" id="telefono_1" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telefono_1) && $data->telefono_1 > '') ? $data->telefono_1 : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                              <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="cod_telefono_2">Teléfono 2:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telefono_2" name="cod_telefono_2" class="form-control" >
                                       <?php echo (!empty($data->cod_telefono_2) && $data->cod_telefono_2 > '') ? "<option value='".$data->cod_telefono_2."' selected>".$data->cod_telefono_2."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                       <option value="0426">0426</option> 
                                       <option value="0416">0416 </option> 
                                       <option value="0424">0424</option>
                                       <option value="0414">0414</option> 
                                       <option value="0412">0412</option> 

                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telefono_2" id="telefono_2" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telefono_2 ) && $data->telefono_2 > '') ? $data->telefono_2 : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                              <div class="col-md-4">
                                   <label for="e_mail">Mail:</label>
                                   <input type="text" class="form-control" name="e_mail" id="e_mail" placeholder="" data-inputmask-alias="email" data-val="true" data-val-required="Required" value="<?php echo (!empty($data->e_mail) && $data->e_mail > '') ? $data->e_mail : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                   <p class="center-align">
                                     <small><b>Ejemplo: correo@correo.com</b></small>
                                   </p>
                              </div> 
                        </div>
                    </div>
                </div>
                <div id="step-2">
                   <div id="form-step-1" role="form" data-toggle="validator">
                     <br>
                        <div class="row">
                            <div class="col-md-6">
                                 <label for="nun_cuenta">Número de Cuenta Actual:</label>
                                  <div id="resultadoBusqueda"></div>
                                 <input type="text" class="form-control search_tcontacto" name="num_cuenta_actual" id="num_cuenta_actual" placeholder="" data-inputmask="'mask' : '999999999'"  value="<?php echo (!empty($data->num_cuenta_actual) && $data->num_cuenta_actual > '') ? $data->num_cuenta_actual : '03'; ?>" onKeyUp="buscar();">
                                 <div class="help-block with-errors"></div>
                            </div>
                             <div class="col-md-6">
                                 <label for="nun_cuenta">Número de Cuenta Anterior:</label>
                                 <input type="text" class="form-control" name="nun_cuenta" id="nun_cuenta" placeholder=""  data-inputmask="'mask' : '99-99-99-9999999999-99999-99'" value="<?php echo (!empty($data->nun_cuenta) && $data->nun_cuenta > '') ? $data->nun_cuenta : '15-03-03'; ?>">
                                 <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                                 <label for="nun_cuenta">Máquina fiscal operativa:</label>
                                  <br>
                                 <fieldset>
                                   <label for="maquina_fiscal"></label>
                                   <div class="radiobutton">
                                        <input type="radio" name="maquina_fiscal" id="si_maquina" value="SI" <?php echo (!empty($data->maquina_fiscal) && $data->maquina_fiscal == 'SI') ? 'checked' : ''; ?> />
                                        <label for="si_maquina">Si</label>
                                   </div>
                                   <div class="radiobutton">
                                        <input type="radio" name="maquina_fiscal" id="no_maquina_fiscal" value="NO" <?php echo (!empty($data->maquina_fiscal) && $data->maquina_fiscal == 'NO') ? 'checked' : ''; ?>  />
                                        <label for="no_maquina_fiscal">No</label>
                                   </div>
                              </fieldset>
                                 
                            </div>

                        </div>
                         <div class="form-group row">
                             <div class="col-md-4">
                                 <label for="licencia_AE">Liciencia de A.E. Nro:</label>
                                 <input type="text" class="form-control" name="licencia_AE" id="licencia_AE" placeholder="" value="<?php echo (!empty($data->licencia_AE) && $data->licencia_AE > '') ? $data->licencia_AE : '15-03-03'; ?>"  required>
                                 <div class="help-block with-errors"></div>
                            </div>
                             <div class="col-md-3">
                                <label for="anio_licencia">Año:</label>
                                  <select id="anio_licencia" name="anio_licencia" class="form-control" >
                                       <?php echo (!empty($data->anio_licencia) && $data->anio_licencia > '') ? "<option value='".$data->anio_licencia."' selected>".$data->anio_licencia."</option>" : ''; ?>
                                       <option value="">Seleccione</option> 
                                       <option value="2019">2019</option> 
                                       <option value="2018">2018</option> 
                                       <option value="2017">2017</option> 
                                       <option value="2016">2016</option> 
                                       <option value="2015">2015</option> 
                                       <option value="2014">2014</option> 
                                       <option value="2013">2013</option> 
                                       <option value="2012">2012</option> 
                                       <option value="2011">2011</option> 
                                       <option value="2010">2010</option> 
                                       <option value="2009">2009</option>
                                       <option value="2008">2008</option>
                                       <option value="2007">2007</option>
                                       <option value="2006">2006</option>
                                       <option value="2005">2005</option>
                                       <option value="2004">2004</option>
                                       <option value="2003">2003</option>
                                       <option value="2002">2002</option>
                                       <option value="2001">2001</option>
                                       <option value="2000">2000</option>
                                       <option value="1999">1999</option>
                                       <option value="1998">1998</option>
                                       <option value="1997">1997</option>
                                       <option value="1996">1996</option>
                                       <option value="1995">1995</option>
                                       <option value="1994">1994</option>
                                       <option value="1993">1993</option>
                                       <option value="1992">1992</option>
                                       <option value="1991">1991</option>
                                       <option value="1990">1990</option>
                                       <option value="1989">1989</option>
                                       <option value="1988">1988</option>
                                       <option value="1987">1987</option>
                                       <option value="1986">1986</option>
                                       <option value="1985">1985</option>
                                       <option value="1984">1984</option>
                                       <option value="1983">1983</option>
                                       <option value="1982">1982</option>
                                       <option value="1981">1981</option>
                                       <option value="1980">1980</option>
                                       <option value="1979">1979</option>
                                       <option value="1978">1978</option>
                                       <option value="1977">1977</option>
                                       <option value="1976">1976</option>
                                       <option value="1975">1975</option>
                                       <option value="1974">1974</option>
                                       <option value="1973">1973</option>
                                       <option value="1972">1972</option>
                                       <option value="1971">1971</option>
                                       <option value="1970">1970</option>
                                  </select> 
                                 <div class="help-block with-errors"></div>
                            </div>
                             <div class="col-md-5">
                              <br>
                                 <fieldset>
                                   <label for="exhibida">Exibida:</label>
                                   <div class="radiobutton">
                                        <input type="radio" name="exhibida" id="si_exhibida" value="SI" <?php echo (!empty($data->exhibida) && $data->exhibida == 'SI') ? 'checked' : ''; ?> />
                                        <label for="si_exhibida">Si</label>
                                   </div>
                                   <div class="radiobutton">
                                        <input type="radio" name="exhibida" id="no_exhibida" value="NO" <?php echo (!empty($data->exhibida) && $data->exhibida == 'NO') ? 'checked' : ''; ?>  />
                                        <label for="no_exhibida">No</label>
                                   </div>
                              </fieldset>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5">
                              <br>
                                 <fieldset>
                                   <label for="declaracion_AE">¿Presentó Declaración de A.E?:</label>
                                   <div class="radiobutton">
                                        <input type="radio" name="declaracion_AE" id="si_declaracion_AE" value="SI"  <?php echo (!empty($data->declaracion_AE) && $data->declaracion_AE == 'SI') ? 'checked' : ''; ?> checked required>
                                        <label for="si_declaracion_AE">Si</label>
                                   </div>
                                   <div class="radiobutton">
                                        <input type="radio" name="declaracion_AE" id="no_declaracion_AE" value="NO"  <?php echo (!empty($data->declaracion_AE) && $data->declaracion_AE == 'NO') ? 'checked' : ''; ?> required>
                                        <label for="no_declaracion_AE">No</label>
                                   </div>
                              </fieldset>
                            </div> 
                             <div class="col-md-2 ">
                                 <label for="mes_declaracion_AE">Mes:</label> <br>
                                 <select id="month" name="mes_declaracion_AE" id="mes_declaracion_AE" class="form-control declaracion_AE" />
                                     <?php echo (!empty($data->mes_declaracion_AE) && $data->mes_declaracion_AE > '') ? "<option value='".$data->mes_declaracion_AE."' selected>".$data->mes_declaracion_AE."</option>" : '<option selected hidden>Seleccione</option>'; ?>
                                      <option value="">Seleccione</option>
                                      <option value="ENERO">Enero</option> 
                                      <option value="FEBRERO">Febrero</option> 
                                      <option value="MARZO">Marzo</option> 
                                      <option value="ABRIL">Abril</option> 
                                      <option value="MAYO">Mayo</option> 
                                      <option value="JUNIO">Junio</option> 
                                      <option value="JULIO">Julio</option> 
                                      <option value="AGOSTO">Agosto</option> 
                                      <option value="SEPTIEMBRE">Septiembre</option> 
                                      <option value="OCTUBRE">Octubre</option> 
                                      <option value="NOVIEMBRE">Noviembre</option> 
                                      <option value="DICIEMBRE">Diciembre</option> 
                                 </select>
                                 
                            </div>
                             <div class="col-md-2 ">
                                 <label for="ano_declaracion_AE">Año:</label>
                                  <select id="year" name="ano_declaracion_AE" id="ano_declaracion_AE" class="form-control declaracion_AE" />
                                  <?php echo (!empty($data->ano_declaracion_AE) && $data->ano_declaracion_AE > '') ? "<option value='".$data->ano_declaracion_AE."' selected>".$data->ano_declaracion_AE."</option>" : ''; ?>
                                       <option value="">Seleccione</option> 
                                       <option value="2019">2019</option> 
                                       <option value="2018">2018</option> 
                                       <option value="2017">2017</option> 
                                       <option value="2016">2016</option> 
                                       <option value="2015">2015</option> 
                                       <option value="2014">2014</option> 
                                       <option value="2013">2013</option> 
                                       <option value="2012">2012</option> 
                                       <option value="2011">2011</option> 
                                       <option value="2010">2010</option> 
                                       <option value="2009">2009</option>
                                       <option value="2008">2008</option>
                                       <option value="2007">2007</option>
                                       <option value="2006">2006</option>
                                       <option value="2005">2005</option>
                                       <option value="2004">2004</option>
                                       <option value="2003">2003</option>
                                       <option value="2002">2002</option>
                                       <option value="2001">2001</option>
                                       <option value="2000">2000</option>
                                       <option value="1999">1999</option>
                                       <option value="1998">1998</option>
                                       <option value="1997">1997</option>
                                       <option value="1996">1996</option>
                                       <option value="1995">1995</option>
                                       <option value="1994">1994</option>
                                       <option value="1993">1993</option>
                                       <option value="1992">1992</option>
                                       <option value="1991">1991</option>
                                       <option value="1990">1990</option>
                                       <option value="1989">1989</option>
                                       <option value="1988">1988</option>
                                       <option value="1987">1987</option>
                                       <option value="1986">1986</option>
                                       <option value="1985">1985</option>
                                       <option value="1984">1984</option>
                                       <option value="1983">1983</option>
                                       <option value="1982">1982</option>
                                       <option value="1981">1981</option>
                                       <option value="1980">1980</option>
                                       <option value="1979">1979</option>
                                       <option value="1978">1978</option>
                                       <option value="1977">1977</option>
                                       <option value="1976">1976</option>
                                       <option value="1975">1975</option>
                                       <option value="1974">1974</option>
                                       <option value="1973">1973</option>
                                       <option value="1972">1972</option>
                                       <option value="1971">1971</option>
                                       <option value="1970">1970</option>
                                  </select> 
                            
                            </div> 
                            <div class="col-md-2 declaracion_AE">
                                 <label for="cant_grupos">Cant. Grupos:</label>
                                 <input type="number" class="form-control" name="cant_grupos" id="cant_grupos" placeholder="" value="<?php echo (!empty($data->cant_grupos) && $data->cant_grupos > '') ? $data->cant_grupos : ''; ?>">
                            </div>    
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                   <label for="monto_ingreso">Monto de Ingreso:</label>
                                   <input type="text"  class="form-control declaracion_AE" name="monto_ingreso" id="monto_ingreso" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0' " placeholder="" value="<?php echo (!empty($data->monto_ingreso) && $data->monto_ingreso > '') ? $data->monto_ingreso : ''; ?>"  required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                              <div class="col-md-6">
                                   <label for="monto_impuesto">Monto de Impuesto:</label>
                                   <input type="text" class="form-control declaracion_AE" name="monto_impuesto" id="monto_impuesto" placeholder="" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" value="<?php echo (!empty($data->monto_impuesto) && $data->monto_impuesto > '') ? $data->monto_impuesto : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                              </div> 
                        </div>
                        <?php if($rol == "Administrador" or $rol == "Supervisor"){ ?>
                              <div class="row">
                                 <div class="col-md-6">
                                    <label for="monto_actual">Monto de Actual:</label>
                                    <input type="text" class="form-control declaracion_AE" name="monto_actual" id="monto_actual" placeholder="" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" value="<?php echo (!empty($data->monto_actual) && $data->monto_actual > '') ? $data->monto_actual : ''; ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div> 
                              </div>
                        <?php } ?>
                         <div id="grupos_act_conomicas" class="form-group row ">
                              <div class="col-md-12">
                                   <label for="grupos_act_conomicas">¿Grupo de Actividades Económicas autorizadas?</label>
                                  <textarea class="form-control" name="grupos_act_conomicas" id="grupos_act_conomicas" rows="3" placeholder="" required> <?php echo (!empty($data->grupos_act_conomicas) && $data->grupos_act_conomicas > '') ? $data->grupos_act_conomicas : ''; ?></textarea>
                                  <div class="help-block with-errors"></div>
                              </div> 
                         </div>
                  
                         <div class="form-group row">
                              <div class="col-md-12">
                                   <label for="tipo_actividades_economicas">¿Que tipo de Actividades Económicas observo durante la visita?</label>
                                      <?php 
                                     $prubea = (!empty($data->tipo_actividades_economicas)) ? json_decode($data->tipo_actividades_economicas) : '';


                                         ?>
                                   <br>
                                 <fieldset>
                                   <label for="name"></label>
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="checkbox"><label for="ABASTO">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="ABASTO" value="ABASTO"  <?php if (!empty($prubea)){
                                                  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'ABASTO') ? 'checked' : ''; }
                                                }?> /> Abasto</label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" id="CARNICERIA" value="CARNICERIA" class="flat" <?php if (!empty($prubea)){ 
                                                  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'CARNICERIA') ? 'checked' : ''; }
                                                }?>/>
                                                <label for="CARNICERIA">Carnicería</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]"class="flat" id="JOYERIA" value="JOYERIA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'JOYERIA') ? 'checked' : ''; }}?>/>
                                                <label for="JOYERIA">Joyería</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="RESTAURANTE" value="RESTAURANTE" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'RESTAURANTE') ? 'checked' : '';} }?>/>
                                                <label for="RESTAURANTE">Restaurant</label>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   <div class="row">
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                              <label for="AUTOMERCADO">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="AUTOMERCADO" value="AUTOMERCADO" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'AUTOMERCADO') ? 'checked' : ''; }}?>/>
                                                Automercado</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="CHARCUTERIA" value="CHARCUTERIA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'CHARCUTERIA') ? 'checked' : '';} }?>/>
                                                <label for="CHARCUTERIA">Charcutería</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="MANTENIMIENTO" value="MANTENIMIENTO" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'MANTENIMIENTO') ? 'checked' : '';} }?>/>
                                                <label for="MANTENIMIENTO">Mantenimiento</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="ROPA" value="ROPA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'ROPA') ? 'checked' : '';} }?>/>
                                                <label for="ROPA">Ropa</label>
                                            </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                              <label for="AUTOREPUESTOS">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="AUTOREPUESTOS" value="AUTOREPUESTOS" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'AUTOREPUESTOS') ? 'checked' : '';} }?>/>
                                                Autorepuestos</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="ESTETICA" value="ESTETICA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'ESTETICA') ? 'checked' : '';} }?>/>
                                                <label for="ESTETICA">Estética</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="PANADERIA" value="PANADERIA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'PANADERIA') ? 'checked' : '';} }?>/>
                                                <label for="PANADERIA">Panadería</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="SEGUROS" value="SEGUROS" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'SEGUROS') ? 'checked' : '';} }?>/>
                                                <label for="SEGUROS">Seguros</label>
                                            </div>
                                       </div>
                                   </div>
                                   
                                   <div class="row">
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                              <label for="BAR">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="BAR" value="BAR" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'BAR') ? 'checked' : '';} }?>/>
                                                Bar</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="FERRETERIA" value="FERRETERIA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'FERRETERIA') ? 'checked' : '';} }?>/>
                                                <label for="FERRETERIA">Ferretería</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="PAPELERIA" value="PAPELERIA" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'PAPELERIA') ? 'checked' : '';} }?>/>
                                                <label for="PAPELERIA">Papelería</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="SERVICIO" value="SERVICIO" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'SERVICIO') ? 'checked' : '';} }?>/>
                                                <label for="SERVICIO">Servicio</label>
                                            </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                              <label for="BAR_RESTAURANT">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="BAR_RESTAURANT" value="BAR-RESTAURANT"  <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'BAR-RESTAURANT') ? 'checked' : '';} }?>/>
                                                Bar - restaurant</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]"  class="flat" id="FINANCIERO" value="FINANCIERO" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'FINANCIERO') ? 'checked' : '';} }?>/>
                                                <label for="FINANCIERO">Financiero</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="PELUQUERIA" value="PELUQUERIA"  <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'PELUQUERIA') ? 'checked' : '';} }?>/>
                                                <label for="PELUQUERIA">Peluquería</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="Taller" value="TELLER" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'TELLER') ? 'checked' : '';} }?>/>
                                                <label for="TELLER">Taller</label>
                                            </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                              <label for="CALZADO">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="Calzado" value="CALZADO"  <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'CALZADO') ? 'checked' : '';} }?>/>
                                                Calzado</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="INDUSTRIAL" value="INDUSTRIAL" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'INDUSTRIAL') ? 'checked' : '';} }?>/>
                                                <label for="INDUSTRIAL">Industrial</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="REPARACION" value="REPARACION"  <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'REPARACION') ? 'checked' : '';} }?> />
                                                <label for="REPARACION">Reparación</label>
                                            </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="VIVERES" value="VIVERES" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'VIVERES') ? 'checked' : '';} }?>/>
                                                <label for="VIVERES">Viveres</label>
                                            </div>
                                       </div>
                                   </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="checkbox">
                                              <label for="Otros">
                                                <input type="checkbox" name="tipo_actividades_economicas[]" class="flat" id="Otros" value="OTROS" <?php if (!empty($prubea)){  foreach($prubea as $selected){ echo (!empty($selected) && $selected == 'OTROS') ? 'checked' : '';} }?>/>
                                                Otros</label>
                                            </div>
                                        </div>
                                    </div>         
                              </fieldset>
                                  
                              </div> 
                         </div>
                          <div id="text_otro" class="form-group row otros">
                              <div class="col-md-12">
                                  <textarea class="form-control" name="otra_ctividades_economica" id="otra_ctividades_economica" rows="3" placeholder="" required> <?php echo (!empty($data->otra_ctividades_economica) && $data->otra_ctividades_economica > '') ? $data->otra_ctividades_economica : ''; ?></textarea>
                                  <div class="help-block with-errors"></div>
                              </div> 
                         </div>

                      </div>
                </div>
                <div id="step-3">
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <br>
                        <div class="row">
                             <div class="col-md-6">
                                 <label for="num_identificacion">Número de Identificación:</label>
                                 <input type="text" class="form-control" name="num_identificacion" id="num_identificacion" placeholder="" data-inputmask="'mask' : '99-99-99-9999999999-99999-99'" value="<?php echo (!empty($data->num_identificacion) && $data->num_identificacion > '') ? $data->num_identificacion : '15-03-01'; ?>">
                                 <div class="help-block with-errors"></div>
                            </div> 
                            <div class="col-md-6">
                                 <label for="numero_catastral">Número Catastral:</label>
                                 <input type="text" class="form-control" name="numero_catastral" id="numero_catastral" placeholder="" value="<?php echo (!empty($data->numero_catastral) && $data->numero_catastral > '') ? $data->numero_catastral : ''; ?>">
                                 <div class="help-block with-errors"></div>
                            </div>   
                        </div>
                        <div class="form-group row">
                              <div class="col-md-5">
                                   <br>
                                   <fieldset>
                                        <label for="name">¿Presentó Solvencia de Inmueble?:</label>
                                        <div class="radiobutton">
                                             <input type="radio" name="solvencia_inmueble" id="si_solvencia_inmueble" value="SI" <?php echo (!empty($data->solvencia_inmueble) && $data->solvencia_inmueble == 'SI') ? 'checked' : ''; ?> />
                                             <label for="si_solvencia_inmueble" >Si</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" name="solvencia_inmueble" id="no_solvencia_inmueble" value="NO" <?php echo (!empty($data->solvencia_inmueble) && $data->solvencia_inmueble == 'NO') ? 'checked' : ''; ?>  />
                                             <label for="no_solvencia_inmueble" >No</label>
                                        </div>
                                   </fieldset>
                              </div> 
                             <div class="col-md-2">
                                <label for="ano_solvencia"></label>
                                  <select id="ano_solvencia" name="ano_solvencia" class="form-control solvencia_inmueble" >
                                    <?php echo (!empty($data->ano_solvencia) && $data->ano_solvencia > '') ? "<option value='".$data->ano_solvencia."' selected>".$data->ano_solvencia."</option>" : '<option selected hidden>Seleccione</option>'; ?>
                                       <option value="2019">2019</option> 
                                       <option value="2018">2018</option> 
                                       <option value="2017">2017</option> 
                                       <option value="2016">2016</option> 
                                       <option value="2015">2015</option> 
                                       <option value="2014">2014</option> 
                                       <option value="2013">2013</option> 
                                       <option value="2012">2012</option> 
                                       <option value="2011">2011</option> 
                                       <option value="2010">2010</option> 
                                       <option value="2009">2009</option>
                                       <option value="2008">2008</option>
                                       <option value="2007">2007</option>
                                       <option value="2006">2006</option>
                                       <option value="2005">2005</option>
                                       <option value="2004">2004</option>
                                       <option value="2003">2003</option>
                                       <option value="2002">2002</option>
                                       <option value="2001">2001</option>
                                       <option value="2000">2000</option>
                                       <option value="1999">1999</option>
                                       <option value="1998">1998</option>
                                       <option value="1997">1997</option>
                                       <option value="1996">1996</option>
                                       <option value="1995">1995</option>
                                       <option value="1994">1994</option>
                                       <option value="1993">1993</option>
                                       <option value="1992">1992</option>
                                       <option value="1991">1991</option>
                                       <option value="1990">1990</option>
                                  </select> 
                                 <div class="help-block with-errors"></div>
                            </div> 
                            <div class="col-md-5">
                              <br>
                              <fieldset>
                                   <label for="inmueble">Inmueble:</label>
                                   <div class="radiobutton">
                                        <input type="radio" name="inmueble" id="si_inmueble" value="ARRENDADO" class="solvencia_inmueble" <?php echo (!empty($data->inmueble) && $data->inmueble == 'ARRENDADO') ? 'checked' : ''; ?>  />
                                        <label for="si_inmueble">Arrendado</label>
                                   </div>
                                   <div class="radiobutton">
                                        <input type="radio" name="inmueble" id="no_inmueble" value="PROPIO" class="solvencia_inmueble" <?php echo (!empty($data->inmueble) && $data->inmueble == 'PROPIO') ? 'checked' : ''; ?>/>
                                        <label for="no_inmueble">Propio</label>
                                   </div>
                              </fieldset>
                         </div>   
                        </div>
                    </div>
                </div>
                <div id="step-4" class="">
                     <div id="form-step-3" role="form" data-toggle="validator">
                         <br>
                         <div class="form-group row">
                              <div class="col-md-6">
                                   <br>
                                   <fieldset>
                                        <label for="licencia_licores">¿Presentó Licencia de Licores?:</label>
                                        <div class="radiobutton">
                                             <input type="radio" name="licencia_licores" id="si_licencia_licores" value="SI" <?php echo (!empty($data->licencia_licores) && $data->licencia_licores == 'SI') ? 'checked' : ''; ?> checked/>
                                             <label for="si_licencia_licores">Si</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" name="licencia_licores" id="no_licencia_licores" value="NO" <?php echo (!empty($data->licencia_licores) && $data->licencia_licores == 'NO') ? 'checked' : ''; ?>/>
                                             <label for="no_licencia_licores">No</label>
                                        </div>
                                         <div class="radiobutton">
                                             <input type="radio" name="licencia_licores" id="na_licencia_licores" value="N/A" <?php echo (!empty($data->licencia_licores) && $data->licencia_licores == 'N/A') ? 'checked' : ''; ?>/>
                                             <label for="na_licencia_licores">N/A</label>
                                        </div>
                                   </fieldset>
                              </div> 
                             <div class="col-md-2">
                                <label for="ano_licencia_lic">Año</label>
                                  <select id="ano_licencia_lic" name="ano_licencia_lic" class="form-control licencia_licores" >
                                       <?php echo (!empty($data->ano_licencia_lic) && $data->ano_licencia_lic > '') ? "<option value='".$data->ano_licencia_lic."' selected>".$data->ano_licencia_lic."</option>" : '<option selected hidden>Seleccione</option>'; ?> 
                                       <option value="2019">2019</option> 
                                       <option value="2018">2018</option> 
                                       <option value="2017">2017</option> 
                                       <option value="2016">2016</option> 
                                       <option value="2015">2015</option> 
                                       <option value="2014">2014</option> 
                                       <option value="2013">2013</option> 
                                       <option value="2012">2012</option> 
                                       <option value="2011">2011</option> 
                                       <option value="2010">2010</option> 
                                       <option value="2009">2009</option>
                                       <option value="2008">2008</option>
                                       <option value="2007">2007</option>
                                       <option value="2006">2006</option>
                                       <option value="2005">2005</option>
                                       <option value="2004">2004</option>
                                       <option value="2003">2003</option>
                                       <option value="2002">2002</option>
                                       <option value="2001">2001</option>
                                       <option value="2000">2000</option>
                                       <option value="1999">1999</option>
                                       <option value="1998">1998</option>
                                       <option value="1997">1997</option>
                                       <option value="1996">1996</option>
                                       <option value="1995">1995</option>
                                       <option value="1994">1994</option>
                                       <option value="1993">1993</option>
                                       <option value="1992">1992</option>
                                       <option value="1991">1991</option>
                                       <option value="1990">1990</option>
                                  </select> 
                                 <div class="help-block with-errors"></div>
                            </div> 
                            <div class="col-md-4">
                                 <label for="nro_licencia">Nro. Licencia:</label>
                                 <input type="text" class="form-control licencia_licores" name="nro_licencia" id="nro_licencia" placeholder="" value="<?php echo (!empty($data->nro_licencia) && $data->nro_licencia > '') ? $data->nro_licencia : ''; ?>" >
                                 <div class="help-block with-errors"></div>
                            </div>
                         </div>
                          <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="tipo_expendio">Tipo de Expendio:</label>
                                 <input type="text" class="form-control licencia_licores" name="tipo_expendio" id="tipo_expendio" placeholder=""  value="<?php echo (!empty($data->tipo_expendio) && $data->tipo_expendio > '') ? $data->tipo_expendio : ''; ?>" >
                                 <div class="help-block with-errors"></div>
                            </div>    
                          </div>
                      </div>


                </div>
                <div id="step-5" class="">
                    <div id="form-step-4" role="form" data-toggle="validator">
                              <br>
                         <div class="form-group row">
                              <div class="col-md-6">
                                   <br>
                                   <fieldset>
                                        <label for="aviso_publicitario">¿Posee aviso publicitario?:</label>
                                        <div class="radiobutton">
                                             <input type="radio" name="aviso_publicitario" id="si_aviso_publicitario" value="SI" <?php echo (!empty($data->aviso_publicitario) && $data->aviso_publicitario == 'SI') ? 'checked' : ''; ?> checked/>
                                             <label for="si_aviso_publicitario">Si</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" name="aviso_publicitario" id="no_aviso_publicitario"  value="NO" <?php echo (!empty($data->aviso_publicitario) && $data->aviso_publicitario == 'NO') ? 'checked' : ''; ?>/>
                                             <label for="no_aviso_publicitario">No</label>
                                        </div>
                                         <div class="radiobutton">
                                             <input type="radio" name="aviso_publicitario" id="na_aviso_publicitario" value="N/A" <?php echo (!empty($data->aviso_publicitario) && $data->aviso_publicitario == 'N/A') ? 'checked' : ''; ?>/>
                                             <label for="na_aviso_publicitario">N/A</label>
                                        </div>
                                   </fieldset>
                              </div> 
                            <div class="col-md-6">
                                 <label for="num_cuenta_publicidad">Nro. Cuenta:</label>
                                 <input type="text" class="form-control aviso_publicitario" name="num_cuenta_publicidad" id="num_cuenta_publicidad" placeholder="" data-inputmask="'mask' : '99-99-99-9999999999-99999-99'" value="15-03-04<?php echo (!empty($data->num_cuenta_publicidad) && $data->num_cuenta_publicidad > '') ? $data->num_cuenta_publicidad : ''; ?>">
                            </div>
                         </div>
                          <div class="form-group row">
                              <div class="col-md-4">
                                 <label for="cantidad_avisos">Cantidad de Avisos:</label>
                                 <input type="number" class="form-control aviso_publicitario" name="cantidad_avisos" id="cantidad_avisos" placeholder="" value="<?php echo (!empty($data->cantidad_avisos) && $data->cantidad_avisos > '') ? $data->cantidad_avisos : ''; ?>"  required>
                                 <div class="help-block with-errors"></div>
                            </div>
                              <div class="col-md-4">
                                 <label for="tipo_aviso">Tipo de Avisos:</label>
                                   <br>
                                     <div class="col-md-5">
                                            <div class="checkbox"><label for="fijo">
                                                <input type="checkbox" name="tipo_aviso" class="flat" id="fijo" value="FIJO"  <?php echo (!empty($data->tipo_aviso) && $data->tipo_aviso == 'FIJO') ? 'checked' : ''; ?> /> Fijo</label>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="checkbox">
                                                <input type="checkbox" name="tipo_aviso_remo" id="removible" value="REMOVIBLE" class="flat" <?php echo (!empty($data->tipo_aviso) && $data->tipo_aviso == 'REMOVIBLE') ? 'checked' : ''; ?>/>
                                                <label for="removible">Removible</label>
                                            </div>
                                        </div>
                              </div>
                              <div class="col-md-4">
                                   <br>
                                   <fieldset>
                                        <label for="iluminado">¿Iluminado?:</label>
                                        <div class="radiobutton">
                                             <input type="radio" class="aviso_publicitario" name="iluminado" id="si_iluminado" value="SI" <?php echo (!empty($data->iluminado) && $data->iluminado == 'SI') ? 'checked' : ''; ?>/>
                                             <label for="si_iluminado">Si</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" class="aviso_publicitario" name="iluminado" id="no_iluminado" value="NO" <?php echo (!empty($data->iluminado) && $data->iluminado == 'NO') ? 'checked' : ''; ?>/>
                                             <label for="no_iluminado">No</label>
                                        </div>
                                   </fieldset>
                              </div> 
                          </div>
                    </div>
                </div>
                <div id="step-6" class="">
                   <div id="form-step-5" role="form" data-toggle="validator">
                              <br>
                         <div class="form-group row">
                              <div class="col-md-6">
                                   <br>
                                   <fieldset>
                                        <label for="apuestas_licitas">¿Actividad de Apuestas Lícitas?:</label>
                                        <div class="radiobutton">
                                             <input type="radio" name="apuestas_licitas" id="si_apuestas_licitas" value="SI" <?php echo (!empty($data->apuestas_licitas) && $data->apuestas_licitas == 'SI') ? 'checked' : ''; ?> checked />
                                             <label for="si_apuestas_licitas">Si</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" name="apuestas_licitas" id="no_apuestas_licitas" value="NO" <?php echo (!empty($data->apuestas_licitas) && $data->apuestas_licitas == 'NO') ? 'checked' : ''; ?> />
                                             <label for="no_apuestas_licitas">No</label>
                                        </div>
                                         <div class="radiobutton">
                                             <input type="radio" name="apuestas_licitas" id="na_apuestas_licitas" value="N/A" <?php echo (!empty($data->apuestas_licitas) && $data->apuestas_licitas == 'N/A') ? 'checked' : ''; ?> />
                                             <label for="na_apuestas_licitas">N/A</label>
                                        </div>
                                   </fieldset>
                              </div> 
                            <div class="col-md-6">
                                 <label for="num_cuenta_apuestas">Nro. Cuenta o Permiso:</label>
                                 <input type="text" class="form-control apuestas_licitas" name="num_cuenta_apuestas" id="num_cuenta_apuestas" placeholder="" value="<?php echo (!empty($data->num_cuenta_apuestas) && $data->num_cuenta_apuestas > '') ? $data->num_cuenta_apuestas : ''; ?>">
                                 
                            </div>
                         </div>
                          <div class="row">
                              <div class="col-md-4">
                                 <label for="cantidad_maquinas">Cantidad de Máquinas:</label>
                                 <input type="text" class="form-control apuestas_licitas" name="cantidad_maquinas" id="cantidad_maquinas" placeholder="" value="<?php echo (!empty($data->cantidad_maquinas) && $data->cantidad_maquinas > '') ? $data->cantidad_maquinas : ''; ?>">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-md-8">
                                <label for="tipo_maquinas">Tipo:</label>
                                   <fieldset>
                                        <label for="name"></label>
                                        <div class="radiobutton">
                                             <input type="radio" class="apuestas_licitas" name="tipo_maquinas" id="LOTERIA" value="LOTERIA" <?php echo (!empty($data->tipo_maquinas) && $data->tipo_maquinas == 'LOTERIA') ? 'checked' : ''; ?> />
                                             <label for="LOTERIA">Lotería</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" class="apuestas_licitas" name="tipo_maquinas" id="HIPICA" value="HIPICA" <?php echo (!empty($data->tipo_maquinas) && $data->tipo_maquinas == 'HIPICA') ? 'checked' : ''; ?> />
                                             <label for="HIPICA">Hípica</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" class="apuestas_licitas" name="tipo_maquinas" id="TRAGANIQUELES" value="TRAGANIQUELES"  <?php echo (!empty($data->tipo_maquinas) && $data->tipo_maquinas == 'TRAGANIQUELES') ? 'checked' : ''; ?> />
                                             <label for="TRAGANIQUELES">Traganíqueles</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" class="apuestas_licitas" name="tipo_maquinas" id="ENLINE" value="ENLINE" <?php echo (!empty($data->tipo_maquinas) && $data->tipo_maquinas == 'ENLINE') ? 'checked' : ''; ?> />
                                             <label for="ENLINE">En Línea</label>
                                        </div>
                                        <div class="radiobutton">
                                             <input type="radio" class="apuestas_licitas" name="tipo_maquinas" id="OTRO" value="OTRO" <?php echo (!empty($data->tipo_maquinas) && $data->tipo_maquinas == 'OTRO') ? 'checked' : ''; ?> />
                                             <label for="OTRO">Otro</label>
                                        </div>
                                        <div id="text_otro2" class="col-md-10 otros">
                                            <input type="text" class="form-control apuestas_licitas" name="otro_tipo_maquinas" id="otro_tipo_maquinas" placeholder="Otros"  value="<?php echo (!empty($data->otro_tipo_maquinas) && $data->otro_tipo_maquinas > '') ? $data->otro_tipo_maquinas : ''; ?>" required>
                                           <div class="help-block with-errors"></div>
                                       </div>
                                   </fieldset>
                              </div> 
                          </div>
                           <div class="col-md-12">
                                   <label for="actividad">Describa brevemente la actividad que realiza:</label>
                                  <textarea class="form-control apuestas_licitas" name="actividad" id="actividad" rows="3" placeholder="" required><?php echo (!empty($data->actividad) && $data->actividad > '') ? $data->actividad : ''; ?></textarea>
                                  <div class="help-block with-errors"></div>
                                  <br><br>
                            </div>
                            <div class="col-md-12">
                                <legend><i class="fa fa-building-o"></i> DETALLES DEL ESTABLECIMIENTO</legend> 
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="name">Cantidad de trabajadores:</label>
                                        <fieldset>
                                            <label for="cant_trabajadores"></label>
                                            <div class="radiobutton">
                                               <input type="radio" name="cant_trabajadores" id="0_10" value="DE 0 A 10" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'DE 0 A 10') ? 'checked' : ''; ?> />
                                               <label for="0_10">De 0 a 10</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="cant_trabajadores" id="11_20" value="DE 11 A 20" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'DE 11 A 20') ? 'checked' : ''; ?> />
                                               <label for="11_20">De 11 a 20</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="cant_trabajadores" id="21_50" value="DE 21 A 50" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'DE 21 A 50') ? 'checked' : ''; ?> />
                                               <label for="21_50">De 21 a 50</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="cant_trabajadores" id="mas_51" value="MAS DE 51" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'Mas de 51') ? 'checked' : ''; ?> />
                                               <label for="mas_51">Más de 51</label>
                                           </div>
                                           
                                       </fieldset>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8">
                                        <label for="name">Número de mesas (Restaurant):</label>
                                        <fieldset>
                                            <label for="cant_trabajadores"></label>
                                            <div class="radiobutton">
                                               <input type="radio" name="num_mesas_restaurant" id="m_0_10" value="DE 0 A 10" <?php echo (!empty($data->num_mesas_restaurant) && $data->num_mesas_restaurant == 'DE 0 A 10') ? 'checked' : ''; ?> />
                                               <label for="m_0_10">De 0 a 10</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="num_mesas_restaurant" id="m_11_20" value="DE 11 A 20" <?php echo (!empty($data->num_mesas_restaurant) && $data->num_mesas_restaurant == 'DE 11 A 20') ? 'checked' : ''; ?> />
                                               <label for="m_11_20">De 11 a 20</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="num_mesas_restaurant" id="m_21_50" value="DE 21 A 50" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'DE 21 A 50') ? 'checked' : ''; ?> />
                                               <label for="m_21_50">De 21 a 50</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="num_mesas_restaurant" id="m_mas_51" value="MAS DE 51" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'MAS DE 51') ? 'checked' : ''; ?> />
                                               <label for="m_mas_51">Más de 51</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="num_mesas_restaurant" id="m_na" value="N/A" <?php echo (!empty($data->cant_trabajadores) && $data->cant_trabajadores == 'N/A') ? 'checked' : ''; ?> />
                                               <label for="m_na">N/A</label>
                                           </div>
                                       </fieldset>
                                    </div>  
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="tipo_establecimiento">Tipo de establecimiento:</label>
                                        <fieldset>
                                            <label for="name"></label>
                                            <div class="radiobutton">
                                               <input type="radio" name="tipo_establecimiento" id="PEQUENO" value="PEQUENO"  <?php echo (!empty($data->tipo_establecimiento) && $data->tipo_establecimiento == 'PEQUENO') ? 'checked' : ''; ?> />
                                               <label for="PEQUENO">Pequeño = ó < 5mts2 </label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="tipo_establecimiento" id="MEDIANO" value="MEDIANO" <?php echo (!empty($data->tipo_establecimiento) && $data->tipo_establecimiento == 'MEDIANO') ? 'checked' : ''; ?> />
                                               <label for="MEDIANO">Mediano > 5 ó = < 30 mts2</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="tipo_establecimiento" id="GRANDE" value="GRANDE" <?php echo (!empty($data->tipo_establecimiento) && $data->tipo_establecimiento == 'GRANDE') ? 'checked' : ''; ?> />
                                               <label for="GRANDE">Grande > 30 ó = < 100 mts2</label>
                                           </div>
                                           <div class="radiobutton">
                                               <input type="radio" name="tipo_establecimiento" id="muy_grande" value="MUY GRANDE" <?php echo (!empty($data->tipo_establecimiento) && $data->tipo_establecimiento == 'MUY GRANDE') ? 'checked' : ''; ?> />
                                               <label for="muy_grande">Muy Grande > 100 mt2</label>
                                           </div>
                                       </fieldset>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="num_CNAE">Código o Número de CNAE:</label>
                                        <div class="form-group row">
                                          <div class="col-md-12">

                                           <div class="col-md-6 input-group" style="float:left;">
                                            <input class="form-control search_cnae required" data-partner-id="num_CNAE" data-partner-id="num_CNAE2" id="search_cnae2" name="search_cnae2"  type="text" 
                                            value="<?php echo (!empty($data->num_CNAE) && $data->num_CNAE > '') ? $data->num_CNAE : ''; ?>" placeholder="0000" />
                                            <div class="input-group-addon"><i class="fa fa-search"></i></div>

                                            <input class="form-control required" data-partner-id="num_CNAE" id="search_cnae" name="search_cnae"  type="hidden" value="<?php echo (!empty($data->num_CNAE) && $data->num_CNAE > '') ? $data->num_CNAE : ''; ?>" placeholder="0000" />

                                          </div>
                                        </div>

                                      </div>

                                    <input  type="hidden" name="num_CNAE" id="num_CNAE" value="<?php echo (!empty($data->num_CNAE) && $data->num_CNAE > '') ? $data->num_CNAE : ''; ?>" />
                                    </div>    
                                </div>
                            </div>
                     </div>
                </div>
                <div id="step-7" class="">
                    <div id="form-step-6" role="form" data-toggle="validator">
                     <br>
                        <div class="form-group row">
                             <div class="col-md-11">
                                 <label for="contrato_electricidad">Cuenta Contrato Electricidad:</label>
                                 <input type="text" class="form-control" name="contrato_electricidad" id="contrato_electricidad" data-inputmask="'mask' : '999999999999'" placeholder="" value="1 <?php echo (!empty($data->contrato_electricidad) && $data->contrato_electricidad > '') ? $data->contrato_electricidad : ''; ?>"required>
                                 <div class="help-block with-errors"></div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div id="step-8" class="">
                    <div id="form-step-7" role="form" data-toggle="validator">
                          <br>
                        <legend><i class="fa fa-user"></i> Representante</legend>
                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="reprensentante_legal">Representante Legal:</label>
                                 <input type="text" class="form-control" name="reprensentante_legal" id="reprensentante_legal" placeholder="" value="<?php echo (!empty($data->reprensentante_legal) && $data->reprensentante_legal > '') ? $data->reprensentante_legal : ''; ?>">
                                 <div class="help-block with-errors"></div>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_representante">Cédula Nro.:</label>
                                 <input type="text" class="form-control cedula" name="cedula_representante" id="cedula_representante" placeholder="V-00000000" value="<?php echo (!empty($data->cedula_representante) && $data->cedula_representante > '') ? $data->cedula_representante : ''; ?>">
                                 <div class="help-block with-errors"></div>
                                 <p class="center-align">
                               <small><b>Ejemplo: J-00000000</b>, ingrese la letra (V, E) al inicio, no debe colocar los guiones solo los numeros.</small>
                             </p>
                            </div>       
                        </div>
                        <div class="row">
                             <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_fijo_representante">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_fijo_representante" name="cod_telf_fijo_representante" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_fijo_representante) && $data->cod_telf_fijo_representante > '') ? "<option value='".$data->cod_telf_fijo_representante."' selected>".$data->cod_telf_fijo_representante."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_fijo_representante" id="telf_fijo_representante" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_fijo_representante) && $data->telf_fijo_representante > '') ? $data->telf_fijo_representante : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_movil_representante">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_movil_representante" name="cod_telf_movil_representante" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_movil_representante) && $data->cod_telf_movil_representante > '') ? "<option value='".$data->cod_telf_movil_representante."' selected>".$data->cod_telf_movil_representante."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0412">0412</option> 
                                       <option value="0414">0414</option> 
                                       <option value="0416">0416</option> 
                                       <option value="0424">0424</option> 
                                       <option value="0426">0426</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_movil_representante" id="telf_movil_representante" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_movil_representante) && $data->telf_movil_representante > '') ? $data->telf_movil_representante : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                              </div> 
                             <div class="col-md-4">
                                 <label for="email_reprensentante_legal">E-mail:</label>
                                 <input type="text" class="form-control" data-inputmask-alias="email" data-val="true" data-val-required="Required"
                                 name="email_reprensentante_legal" id="email_reprensentante_legal" placeholder="" value="<?php echo (!empty($data->email_reprensentante_legal) && $data->email_reprensentante_legal > '') ? $data->email_reprensentante_legal : ''; ?>" required>
                                 <div class="help-block with-errors"></div>
                                 <p class="center-align">
                                     <small><b>Ejemplo: correo@correo.com</b></small>
                                   </p>
                            </div>        
                        </div>
                        <legend><i class="fa fa-user"></i> Contacto</legend>    
                        <div class="row">
                             <div class="col-md-6">
                                 <label for="persona_contacto">Persona Contacto:</label>
                                 <input type="text" class="form-control" name="persona_contacto" id="persona_contacto" placeholder="" value="<?php echo (!empty($data->persona_contacto) && $data->persona_contacto > '') ? $data->persona_contacto : ''; ?>">
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_contacto">Cédula Nro:</label>
                                 <input type="text" class="form-control cedula" name="cedula_contacto" id="cedula_contacto" placeholder="" value="<?php echo (!empty($data->cedula_contacto) && $data->cedula_contacto > '') ? $data->cedula_contacto : ''; ?>" 
                                 >
                                 <p class="center-align">
                                   <small><b>Ejemplo: J-00000000</b>, ingrese la letra (V, E) al inicio, no debe colocar los guiones solo los numeros.</small>
                                 </p>

                            </div>       
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_fijo_contacto">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_fijo_contacto" name="cod_telf_fijo_contacto" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_fijo_contacto) && $data->cod_telf_fijo_contacto > '') ? "<option value='".$data->cod_telf_fijo_contacto."' selected>".$data->cod_telf_fijo_contacto."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_fijo_contacto" id="telf_fijo_contacto" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_fijo_contacto) && $data->telf_fijo_contacto > '') ? $data->telf_fijo_contacto : ''; ?>">
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_movil_representante">Teléfono Movíl:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_movil_contacto" name="cod_telf_movil_contacto" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_movil_contacto) && $data->cod_telf_movil_contacto > '') ? "<option value='".$data->cod_telf_movil_contacto."' selected>".$data->cod_telf_movil_contacto."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0412">0412</option> 
                                       <option value="0414">0414</option> 
                                       <option value="0416">0416</option> 
                                       <option value="0424">0424</option> 
                                       <option value="0426">0426</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_movil_contacto" id="telf_movil_contacto" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_movil_contacto) && $data->telf_movil_contacto > '') ? $data->telf_movil_contacto : ''; ?>">
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                              </div> 
                             <div class="col-md-4">
                                 <label for="email_contacto">E-mail:</label>
                                 <input type="text" class="form-control" name="email_contacto" id="email_contacto" data-inputmask-alias="email" data-val="true" data-val-required="Required"
                                 placeholder="" value="<?php echo (!empty($data->email_contacto) && $data->email_contacto > '') ? $data->email_contacto : ''; ?>" >
                                 <div class="help-block with-errors"></div>
                                 <p class="center-align">
                                     <small><b>Ejemplo: correo@correo.com</b></small>
                                  </p>
                            </div>        
                        </div>
                        <legend><i class="fa fa-user"></i> Administrador</legend>
                        <div class="row">
                             <div class="col-md-6">
                                 <label for="administrador">Administrador:</label>
                                 <input type="text" class="form-control" name="administrador" id="administrador" placeholder="" value="<?php echo (!empty($data->administrador) && $data->administrador > '') ? $data->administrador : ''; ?>" >
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_administrador">Cédula Nro.:</label>
                                 <input type="text" class="form-control cedula" name="cedula_administrador" id="cedula_administrador" placeholder="" value="<?php echo (!empty($data->cedula_administrador) && $data->cedula_administrador > '') ? $data->cedula_administrador : ''; ?>">
                                 <div class="help-block with-errors"></div>
                                   <p class="center-align">
                                     <small><b>Ejemplo: J-00000000</b>, ingrese la letra (V, E) al inicio, no debe colocar los guiones solo los numeros.</small>
                                   </p>
                            </div>       
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_fijo_administrador">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_fijo_administrador" name="cod_telf_fijo_administrador" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_fijo_administrador) && $data->cod_telf_fijo_administrador > '') ? "<option value='".$data->cod_telf_fijo_administrador."' selected>".$data->cod_telf_fijo_administrador."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_fijo_administrador" id="telf_fijo_administrador" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_fijo_administrador) && $data->telf_fijo_administrador > '') ? $data->telf_fijo_administrador : ''; ?>">
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_movil_representante">Teléfono Movíl:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_movil_administrador" name="cod_telf_movil_administrador" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_movil_administrador) && $data->cod_telf_movil_administrador > '') ? "<option value='".$data->cod_telf_movil_administrador."' selected>".$data->cod_telf_movil_administrador."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0412">0412</option> 
                                       <option value="0414">0414</option> 
                                       <option value="0416">0416</option> 
                                       <option value="0424">0424</option> 
                                       <option value="0426">0426</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_movil_administrador" id="telf_movil_administrador" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_movil_administrador) && $data->telf_movil_administrador > '') ? $data->telf_movil_administrador : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                              </div> 
                      
                             <div class="col-md-4">
                                 <label for="email_reprensentante_administrador">E-mail:</label>
                                 <input type="text" class="form-control" data-inputmask-alias="email" data-val="true" data-val-required="Required"
                                 name="email_reprensentante_administrador" id="email_reprensentante_administrador" placeholder="" value="<?php echo (!empty($data->email_reprensentante_administrador) && $data->email_reprensentante_administrador > '') ? $data->email_reprensentante_administrador : ''; ?>" required>
                                 <div class="help-block with-errors"></div>
           
                                 <p class="center-align">
                                   <small><b>Ejemplo: correo@correo.com</b></small>
                                 </p>
                            </div>        
                        </div>
                        <legend><i class="fa fa-user"></i> Encargado</legend>  
                        <div class="form-group row">
                             <div class="col-md-6">
                                 <label for="encargado">Atendido por:</label>
                                 <input type="text" class="form-control" name="encargado" id="encargado" placeholder="" value="<?php echo (!empty($data->encargado) && $data->encargado > '') ? $data->encargado : ''; ?>"  required>
                                 <div class="help-block with-errors"></div>
                            </div>
                             <div class="col-md-6">
                                 <label for="cedula_encargado">Cédula Nro:</label>
                                 <input type="text" class="form-control cedula" name="cedula_encargado" id="cedula_encargado" placeholder="" value="<?php echo (!empty($data->cedula_encargado) && $data->cedula_encargado > '') ? $data->cedula_encargado : ''; ?>"  required>
                                 <div class="help-block with-errors"></div>

                                 <p class="center-align">
                                   <small><b>Ejemplo: J-00000000</b>, ingrese la letra (V, E) al inicio, no debe colocar los guiones solo los numeros.</small>
                                 </p>
                            </div>       
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_fijo_encargado">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_fijo_encargado" name="cod_telf_fijo_encargado" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_fijo_encargado) && $data->cod_telf_fijo_encargado > '') ? "<option value='".$data->cod_telf_fijo_encargado."' selected>".$data->cod_telf_fijo_encargado."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0212">0212</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_fijo_encargado" id="telf_fijo_encargado" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_fijo_encargado) && $data->telf_fijo_encargado > '') ? $data->telf_fijo_encargado : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                                   
                              </div> 
                            <div class="col-md-4">
                              <div class="col-md-12">
                                   <label for="telf_movil_encargado">Teléfono Fijo:</label>
                                   </div>
                                   <div class="col-md-5">
                                      <select id="cod_telf_movil_encargado" name="cod_telf_movil_encargado" class="form-control" >
                                       <?php echo (!empty($data->cod_telf_movil_encargado) && $data->cod_telf_movil_encargado > '') ? "<option value='".$data->cod_telf_movil_encargado."' selected>".$data->cod_telf_movil_encargado."</option>" : ''; ?>
                                       <option value="">Codigo</option>
                                       <option value="0412">0412</option> 
                                       <option value="0414">0414</option> 
                                       <option value="0416">0416</option> 
                                       <option value="0424">0424</option> 
                                       <option value="0426">0426</option> 
                                  </select> 
                                   </div>
                                   <div class="col-md-7">
                                     <input type="text" class="form-control" name="telf_movil_encargado" id="telf_movil_encargado" placeholder="" data-inputmask="'mask' : '999-9999'" value="<?php echo (!empty($data->telf_movil_encargado) && $data->telf_movil_encargado > '') ? $data->telf_movil_encargado : ''; ?>" required>
                                   <div class="help-block with-errors"></div>
                                 </div>
                                   <div class="col-md-12">
                                   <p class="center-align">
                                     <small><b>Ejemplo: 0412-999-9999</b>, No debe colocar los guiones solo los numeros.</small>
                                   </p>
                                   </div>
                              </div> 
                      
                             <div class="col-md-4">
                                 <label for="email_encargado">E-mail:</label>
                                 <input type="text" class="form-control" name="email_encargado" id="email_encargado" data-inputmask-alias="email" data-val="true" data-val-required="Required"
                                   placeholder="" value="<?php echo (!empty($data->email_encargado) && $data->email_encargado > '') ? $data->email_encargado : ''; ?>" required>
                                 <div class="help-block with-errors"></div>
                                  <p class="center-align">
                                     <small><b>Ejemplo: correo@correo.com</b></small>
                                   </p>
                            </div>        
                        </div>
                        <legend><i class="fa fa-file-o"></i> Observaciones</legend> 
                        <div class="row">
                              <div class="col-md-12">
                                  <textarea class="form-control" name="observaciones" id="observaciones" rows="3" placeholder=""> <?php echo (!empty($data->observaciones) && $data->observaciones > '') ? $data->observaciones : ''; ?></textarea>
                              </div> 
                         </div>
                         <legend><i class="fa fa-check"></i> Validación</legend> 
                         
                        <div class="form-group row">
                              <div class="col-md-4">
                                   <label for="empadronador">Empadronador</label>
                                  <select id="empadronador" name="empadronador" class="form-control" >
                                       <?php echo (!empty($data->empadronador) && $data->empadronador > '') ? "<option value='".$data->empadronador."' selected>".$data->empadronador."</option>" : '<option selected hidden>Seleccione</option>'; ?> 
                                       <?php 
                                         foreach ($empadronador as $key => $row) { ?>
                                          <option value="<?php echo  $row->nombre." ".$row->apellido ?>"><?php echo  $row->nombre." ".$row->apellido ?></option> 
                                        <?php  } ?>
                                      </select> 
                                  <div class="help-block with-errors"></div>
                              </div> 

                         </div>

                    </div>
                </div>
            </div>
        </div>
                    <!-- End SmartWizard Content -->

                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

