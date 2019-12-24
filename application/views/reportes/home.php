<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
  
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                  <a>Home</a>
                  Reportes
                </div>
                  <div class="x_content">

                    <div class="animated flipInY ">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-download"></i><small>DATOS PARA EXPORTAR</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <form action="<?php echo get_site_url("reportes/reportes/export")?>" id="export" name="export" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#identificacion" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title"><i class="fa fa-user"></i> Identificación del contribuyente</h4>
                        </a>
                        <div id="identificacion" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                          <div class="panel-body">
                            <!-- IDENTIFICACIÓN DEL CONTRIBUYENTE -->
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2">                                      
                                        <input type="checkbox" value="idc.rif" name="rif" id="rif" checked>
                                        <label class="mouse" for='rif' tabindex="-1">
                                            <span class="check"></span>
                                            Rif
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="idc.razon_social" name="razon_social" id="razon_social" checked>
                                        <label class="mouse" for='razon_social' tabindex="-1">
                                            <span class="check"></span>
                                            Razón Social
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="idc.denominacion_comercial" name="denominacion_comercial" id="denominacion_comercial" checked>
                                        <label class="mouse" for='denominacion_comercial' tabindex="-1">
                                            <span class="check"></span>
                                            Denominación Comercial
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="idc.parroquia" name="parroquia" id="parroquia" checked>
                                        <label class="mouse" for='parroquia' tabindex="-1">
                                            <span class="check"></span>
                                            Parroquia
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <input type="checkbox" value="idc.sector" name="sector" id="sector" checked>
                                        <label class="mouse" for='sector' tabindex="-1">
                                            <span class="check"></span>
                                            Sector
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="idc.urb" name="urb" id="urb" checked>
                                        <label class="mouse" for='urb' tabindex="-1">
                                            <span class="check"></span>
                                            Urb
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="idc.avenida_calle" name="avenida_calle" id="avenida_calle" checked>
                                        <label class="mouse" for='avenida_calle' tabindex="-1">
                                            <span class="check"></span>
                                            Avenida / Calle
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="idc.edif_quinta" name="edif_quinta" id="edif_quinta" checked>
                                        <label class="mouse" for='edif_quinta' tabindex="-1">
                                            <span class="check"></span>
                                            Edif./Quinta/Casa
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <input type="checkbox" value="idc.piso" name="piso" id="piso" checked>
                                        <label class="mouse" for='piso' tabindex="-1">
                                            <span class="check"></span>
                                            Piso
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="idc.punto_referencia" name="punto_referencia" id="punto_referencia" checked>
                                        <label class="mouse" for='punto_referencia' tabindex="-1">
                                            <span class="check"></span>
                                            Punto de Referencia
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="concat(ifnull(idc.cod_telefono_1, ' '),' - ', ifnull(idc.telefono_1, ' ')) AS telefono1" name="telefono_1" id="telefono_1" checked>
                                        <label class="mouse" for='telefono_1' tabindex="-1">
                                            <span class="check"></span>
                                            Teléfono 1
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="concat(ifnull(idc.cod_telefono_2, ' '),' - ', ifnull(idc.telefono_2, ' ')) AS telefono2" name="telefono_2" id="telefono_2" checked>
                                        <label class="mouse" for='telefono_2' tabindex="-1">
                                            <span class="check"></span>
                                            Teléfono 2
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <input type="checkbox" value="idc.e_mail" name="e_mail" id="e_mail" checked>
                                        <label class="mouse" for='e_mail' tabindex="-1">
                                            <span class="check"></span>
                                            E-mail
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="cen.idcenso" name="idcenso" id="idcenso" checked>
                                        <label class="mouse" for='idcenso' tabindex="-1">
                                            <span class="check"></span>
                                            Nro. Control
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#actividades" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title"><i class="fa fa-institution"></i> Actividades Económicas</h4>
                        </a>
                        <div id="actividades" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Actividad Economica -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.nun_cuenta" name="nun_cuenta" id="nun_cuenta" checked>
                                        <label class="mouse" for='nun_cuenta' tabindex="-1">
                                            <span class="check"></span>
                                            Número de Cuenta
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.num_cuenta_actual" name="num_cuenta_actual" id="num_cuenta_actual" checked>
                                        <label class="mouse" for='num_cuenta_actual' tabindex="-1">
                                            <span class="check"></span>
                                            num_cuenta_actual
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.licencia_AE" name="licencia_AE" id="licencia_AE" checked>
                                        <label class="mouse" for='licencia_AE' tabindex="-1">
                                            <span class="check"></span>
                                            Licencia de A.E. Nro
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.anio_licencia" name="anio" id="anio" checked>
                                        <label class="mouse" for='anio' tabindex="-1">
                                            <span class="check"></span>
                                            Año
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.exhibida" name="exhibida" id="exhibida" checked>
                                        <label class="mouse" for='exhibida' tabindex="-1">
                                            <span class="check"></span>
                                            Exhibida
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.declaracion_AE" name="declaracion_AE" id="declaracion_AE" checked>
                                        <label class="mouse" for='declaracion_AE' tabindex="-1">
                                            <span class="check"></span>
                                            Declaración de A.E
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.mes_declaracion_AE" name="mes_declaracion_AE" id="mes_declaracion_AE" checked>
                                        <label class="mouse" for='mes_declaracion_AE' tabindex="-1">
                                            <span class="check"></span>
                                            Mes de la Declaración
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.ano_declaracion_AE" name="ano_declaracion_AE" id="ano_declaracion_AE" checked>
                                        <label class="mouse" for='ano_declaracion_AE' tabindex="-1">
                                            <span class="check"></span>
                                            Año de la Declaración
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.cant_grupos" name="cant_grupos" id="cant_grupos" checked>
                                        <label class="mouse" for='cant_grupos' tabindex="-1">
                                            <span class="check"></span>
                                            Cant. Grupos
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.monto_ingreso" name="monto_ingreso" id="monto_ingreso" checked>
                                        <label class="mouse" for='monto_ingreso' tabindex="-1">
                                            <span class="check"></span>
                                            Monto de Ingreso
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.monto_impuesto" name="monto_impuesto" id="monto_impuesto" checked>
                                        <label class="mouse" for='monto_impuesto' tabindex="-1">
                                            <span class="check"></span>
                                            Monto de Impuesto
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.grupos_act_conomicas" name="grupos_act_conomicas" id="grupos_act_conomicas" checked>
                                        <label class="mouse" for='grupos_act_conomicas' tabindex="-1">
                                            <span class="check"></span>
                                            Grupos de Actividades Económicas autorizadas
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="act.tipo_actividades_economicas" name="tipo_actividades_economicas" id="tipo_actividades_economicas" checked>
                                        <label class="mouse" for='tipo_actividades_economicas' tabindex="-1">
                                            <span class="check"></span>
                                            Tipo de Actividades Económicas
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#inmuebles" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-building"></i> Inmuebles urbanos</h4>
                        </a>
                        <div id="inmuebles" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Inmuebles urbanos -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="inm.num_identificacion" name="num_identificacion" id="num_identificacion" checked>
                                        <label class="mouse" for='num_identificacion' tabindex="-1">
                                            <span class="check"></span>
                                            Número de Identificación
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="inm.numero_catastral" name="numero_catastral" id="numero_catastral" checked>
                                        <label class="mouse" for='numero_catastral' tabindex="-1">
                                            <span class="check"></span>
                                            Número Catastral
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="inm.solvencia_inmueble" name="solvencia_inmueble" id=" solvencia_inmueble" checked>
                                        <label class="mouse" for=' solvencia_inmueble' tabindex="-1">
                                            <span class="check"></span>
                                             Solvencia de Inmueble
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="inm.ano_solvencia" name="ano_solvencia" id="ano_solvencia" checked>
                                        <label class="mouse" for='ano_solvencia' tabindex="-1">
                                            <span class="check"></span>
                                            Año de la Solvencia
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="inm.inmueble" name="inmueble" id="inmueble" checked>
                                        <label class="mouse" for='inmueble' tabindex="-1">
                                            <span class="check"></span>
                                            Inmueble
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#licencia" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-credit-card"></i> Licencia para el expendio de licores</h4>
                        </a>
                        <div id="licencia" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Licencia para el expendio de licores -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="exp.licencia_licores" name="licencia_licores" id="licencia_licores" checked>
                                        <label class="mouse" for='licencia_licores' tabindex="-1">
                                            <span class="check"></span>
                                            Licencia de Licores
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="exp.ano_licencia_lic" name="ano_licencia_lic" id="ano_licencia_lic" checked>
                                        <label class="mouse" for='ano_licencia_lic' tabindex="-1">
                                            <span class="check"></span>
                                            Año de la Licencia
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="exp.nro_licencia" id="nro_licencia" checked>
                                        <label class="mouse" for=' nro_licencia' tabindex="-1">
                                            <span class="check"></span>
                                             Nro. Licencia
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="exp.tipo_expendio" name="tipo_expendio" id="tipo_expendio" checked>
                                        <label class="mouse" for='tipo_expendio' tabindex="-1">
                                            <span class="check"></span>
                                            Tipo de Expendio
                                        </label>
                                    </div>
                                    <br><br>
                                    <br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#publicidad" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-desktop"></i> Publicidad comercial</h4>
                        </a>
                        <div id="publicidad" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Publicidad comercial -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="pub.aviso_publicitario" name="aviso_publicitario" id="aviso_publicitario" checked>
                                        <label class="mouse" for='aviso_publicitario' tabindex="-1">
                                            <span class="check"></span>
                                            Aviso publicitario
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="pub.num_cuenta_publicidad" name="num_cuenta_publicidad" id="num_cuenta_publicidad" checked>
                                        <label class="mouse" for='num_cuenta_publicidad' tabindex="-1">
                                            <span class="check"></span>
                                            Número de Cuenta
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="pub.cantidad_avisos" name="cantidad_avisos" id=" cantidad_avisos" checked>
                                        <label class="mouse" for=' cantidad_avisos' tabindex="-1">
                                            <span class="check"></span>
                                            Cantidad de Avisos
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="pub.tipo_aviso" name="tipo_aviso" id="tipo_aviso" checked>
                                        <label class="mouse" for='tipo_aviso' tabindex="-1">
                                            <span class="check"></span>
                                            Tipo de Aviso
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="pub.iluminado" name="iluminado" id="iluminado" checked>
                                        <label class="mouse" for='iluminado' tabindex="-1">
                                            <span class="check"></span>
                                            Iluminado
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#apuestas" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"> <i class="fa fa-puzzle-piece"></i>  Apuestas lícitas</h4>
                        </a>
                        <div id="apuestas" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                             <!-- Apuestas lícitas -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <input type="checkbox" value="apu.apuestas_licitas" name="apuestas_licitas" id="apuestas_licitas" checked>
                                        <label class="mouse" for='apuestas_licitas' tabindex="-1">
                                            <span class="check"></span>
                                            Actividad de Apuestas Lícitas
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="apu.num_cuenta_apuestas" name="num_cuenta_apuestas" id="num_cuenta_apuestas" checked>
                                        <label class="mouse" for='num_cuenta_apuestas' tabindex="-1">
                                            <span class="check"></span>
                                            Nro de Cuenta o Permiso
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="apu.cantidad_maquinas" name="cantidad_maquinas" id=" cantidad_maquinas" checked>
                                        <label class="mouse" for=' cantidad_maquinas' tabindex="-1">
                                            <span class="check"></span>
                                            Cantidad de Máquinas
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="apu.tipo_maquinas" id="tipo_maquinas" checked>
                                        <label class="mouse" for='tipo_maquinas' tabindex="-1">
                                            <span class="check"></span>
                                            Tipo
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#detalles" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"> <i class="fa fa-building-o"></i> Detalles del establecimiento</h4>
                        </a>
                        <div id="detalles" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Detalles del establecimiento -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="det.cant_trabajadores" name="cant_trabajadores" id="cant_trabajadores" checked>
                                        <label class="mouse" for='cant_trabajadores' tabindex="-1">
                                            <span class="check"></span>
                                            Cantidad de trabajadores
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" value="det.tipo_establecimiento" name="tipo_establecimiento" id="tipo_establecimiento" checked>
                                        <label class="mouse" for='tipo_establecimiento' tabindex="-1">
                                            <span class="check"></span>
                                            Tipo de establecimiento
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="checkbox" value="det.num_CNAE" name="num_CNAE" id="num_CNAE" checked>
                                        <label class="mouse" for='num_CNAE' tabindex="-1">
                                            <span class="check"></span>
                                            Código o Número de CNAE
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#servicio" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-flash"></i> Servicio eléctrico</h4>
                        </a>
                        <div id="servicio" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Servicio eléctric -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <input type="checkbox" value="ser.contrato_electricidad" name="contrato_electricidad" id="contrato_electricidad" checked>
                                        <label class="mouse" for='contrato_electricidad' tabindex="-1">
                                            <span class="check"></span>
                                            Cuenta Contrato Electricidad
                                        </label>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#datos" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title"><i class="fa fa-child"></i> Datos personales</h4>
                        </a>
                        <div id="datos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            <!-- Datos personales -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="dat.reprensentante_legal" name="reprensentante_legal" id="reprensentante_legal" checked>
                                        <label class="mouse" for='reprensentante_legal' tabindex="-1">
                                            <span class="check"></span>
                                            Reprensentante Legal
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.cedula_representante" name="cedula_representante" id="cedula_representante" checked>
                                        <label class="mouse" for='cedula_representante' tabindex="-1">
                                            <span class="check"></span>
                                            Cédula
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_fijo_representante, ' '),' - ', ifnull(dat.telf_fijo_representante, ' ')) AS telf_fijo_representante" name="telf_fijo_representante" id="telf_fijo_representante" checked>
                                        <label class="mouse" for='telf_fijo_representante' tabindex="-1">
                                            <span class="check"></span>
                                           Telf fijo
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_movil_representante, ' '),' - ', ifnull(dat.telf_movil_representante, ' ')) AS telf_movil_representante" name="telf_movil_representante" id="telf_movil_representante" checked>
                                        <label class="mouse" for='telf_movil_representante' tabindex="-1">
                                            <span class="check"></span>
                                            Telf móvil
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.email_reprensentante_legal" name="email_reprensentante" id="email_reprensentante" checked>
                                        <label class="mouse" for='email_reprensentante' tabindex="-1">
                                            <span class="check"></span>
                                           E-mail
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="dat.persona_contacto" name="persona_contacto" id="persona_contacto" checked>
                                        <label class="mouse" for='persona_contacto' tabindex="-1">
                                            <span class="check"></span>
                                            Persona Contacto
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.cedula_contacto" name="cedula_contacto" id="cedula_contacto" checked>
                                        <label class="mouse" for='cedula_contacto' tabindex="-1">
                                            <span class="check"></span>
                                            Cédula
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_fijo_contacto, ' '),' - ', ifnull(dat.telf_fijo_contacto, ' ')) AS telf_fijo_contacto" name="telf_fijo_contacto" id="telf_fijo_contacto" checked>
                                        <label class="mouse" for='telf_fijo_contacto' tabindex="-1">
                                            <span class="check"></span>
                                           Telf fijo
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_movil_contacto, ' '),' - ', ifnull(dat.telf_movil_contacto, ' ')) AS telf_movil_contacto" name="telf_movil_contacto" id="telf_movil_contacto" checked>
                                        <label class="mouse" for='telf_movil_contacto' tabindex="-1">
                                            <span class="check"></span>
                                            Telf móvil
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.email_contacto" name="email_contacto" id="email_contacto" checked>
                                        <label class="mouse" for='email_contacto' tabindex="-1">
                                            <span class="check"></span>
                                           E-mail
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="dat.administrador" name="administrador" id="administrador" checked>
                                        <label class="mouse" for='administrador' tabindex="-1">
                                            <span class="check"></span>
                                            Administrador
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.cedula_administrador" name="cedula_administrador" id="cedula_administrador" checked>
                                        <label class="mouse" for='cedula_administrador' tabindex="-1">
                                            <span class="check"></span>
                                            Cédula
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_fijo_administrador, ' '),' - ', ifnull(dat.telf_fijo_administrador, ' ')) AS telf_fijo_administrador" name="telf_fijo_administrador" id="telf_fijo_administrador" checked>
                                        <label class="mouse" for='telf_fijo_administrador' tabindex="-1">
                                            <span class="check"></span>
                                           Telf fijo
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_movil_administrador, ' '),' - ', ifnull(dat.telf_movil_administrador, ' ')) AS telf_movil_administrador" name="telf_movil_administrador" id="telf_movil_administrador" checked>
                                        <label class="mouse" for='telf_movil_administrador' tabindex="-1">
                                            <span class="check"></span>
                                            Telf móvil
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.email_contacto" name="email_contacto" id="email_contacto" checked>
                                        <label class="mouse" for='email_contacto' tabindex="-1">
                                            <span class="check"></span>
                                           E-mail
                                        </label>
                                    </div>
                                    <br><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="checkbox" value="dat.encargado" name="encargado" id="encargado" checked>
                                        <label class="mouse" for='encargado' tabindex="-1">
                                            <span class="check"></span>
                                            Atendido por
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.cedula_encargado" name="cedula_encargado" id="cedula_encargado" checked>
                                        <label class="mouse" for='cedula_encargado' tabindex="-1">
                                            <span class="check"></span>
                                            Cédula
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_fijo_encargado, ' '),' - ', ifnull(dat.telf_fijo_encargado, ' ')) AS telf_fijo_encargado" name="telf_fijo_encargado" id="telf_fijo_encargado" checked>
                                        <label class="mouse" for='telf_fijo_encargado' tabindex="-1">
                                            <span class="check"></span>
                                           Telf fijo
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="concat(ifnull(dat.cod_telf_movil_encargado, ' '),' - ', ifnull(dat.telf_movil_encargado, ' ')) AS telf_movil_encargado" name="telf_movil_encargado" id="telf_movil_encargado" checked>
                                        <label class="mouse" for='telf_movil_encargado' tabindex="-1">
                                            <span class="check"></span>
                                            Telf móvil
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" value="dat.email_encargado" name="email_encargado" id="email_encargado" checked>
                                        <label class="mouse" for='email_encargado' tabindex="-1">
                                            <span class="check"></span>
                                           E-mail
                                        </label>
                                    </div>
                                    <br><br>
                                </div>

                            </div>
                          </div>
                        </div>
                      </div>    
                    </div>
                
                    <!-- end of accordion -->

                    <button type="submit" class="btn btn-primary  sw-btn-next pull-right"> <i class="fa fa-file-excel-o"></i> Exportar en Excel</button>
                  </form>     

                  </div>
                </div>
              </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

