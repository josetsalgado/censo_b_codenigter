
 <style type="text/css">
     .display{
          display: none;
     }
</style>

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
                    <div class="clearfix"></div>
                  </div>
                  <div id="loading-wrapper">
                        <div id="loading-text">Cargando...</div>
                        <div id="loading-content"></div>
                    </div>
                  <div class="x_content">

                  <table id="censo" class="row-border display" style="width:100%">
                      <thead>
                          <tr>
                              <th>Acción</th>
                              <th>Nro. Control</th>
                              <th>Rif</th>
                              <th>Denominación Comercial</th>
                              <th>Redactor</th>
                              <th>Fecha</th>
                              <th>Estatus</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                      

                        if(is_array($data->rows )){
                          foreach(  $data->rows as $key =>$row){
                                    ?>
                                  <tr>
                                      <td>
                                        <div class="btn-group  btn-group-sm">
                                          <a href="<?php echo get_site_url('censo/censo/preview/'.$row->idcenso)?>" class="btn btn-default sw-btn-next" type="button" title=”VER”><i class="fa fa-eye"></i></a>
                                          <a href="<?php echo get_site_url('censo/censo/editar/'.$row->idcenso)?>" class="btn btn-default sw-btn-next" type="button" title=”EDITAR”><i class="fa fa-edit"></i></a>
                                          <button class="btn btn-xs btn-default btn-action" name="Activar" data-toggle="tooltip" title=”Borrar” data-placement="right" id="<?php echo  $row->idcenso?>"><i class="fa fa-times"></i></button> 
                                        </div>
                                      </td>
                                      <td>000<?php echo  $row->idcenso ?></td>
                                      <td><?php echo  $row->rif ?></td>
                                      <td><?php echo  $row->denominacion_comercial ?></td>
                                      <td><?php echo  $row->transcriptor ?></td>
                                      <td><?php echo  $row->fecha ?></td>
                                      <td><?php echo  $row->estatus ?></td>
                                  </tr>
                                  <?php

                                }
                              }                          
                        ?>
                      </tbody>
                      <tfoot>
                          <tr>
                             <td colspan="7"></td>
                          </tr>
                      </tfoot>
                  </table>

                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

