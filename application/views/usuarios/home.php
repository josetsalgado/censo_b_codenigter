<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
  
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                  <a>Home</a>
                  Usuarios
                </div>
                <div class="x_panel">
                  <div class="x_title pull-right ">
                    <a href="<?php echo get_site_url('usuarios/usuarios/editar')?> " class="btn btn-primary  sw-btn-next"> <i class="fa fa-plus"></i> Crear</a>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                  <table id="example" class="row-border" style="width:100%">
                      <thead>
                          <tr>
                              <th>Acción</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Correo</th>
                              <th>Teléfono</th>
                              <th>Rol</th>
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
                                  <a href="<?php echo get_site_url('usuarios/usuarios/editar/'.$row->id)?>" class="btn btn-default sw-btn-next" type="button"><i class="fa fa-edit"></i></a>
                                  <button class="btn btn-xs btn-default btn-action" name="Activar" data-toggle="tooltip" data-placement="right" id="<?php echo  $row->id?>"><i class="fa fa-times"></i></button> 
                                </div>
                              </td>
                              <td><?php echo  $row->nombre ?></td>
                              <td><?php echo  $row->apellido ?></td>
                              <td><?php echo  $row->correo ?></td>
                              <td><?php echo  $row->telefono ?></td>
                              <td><?php echo  $row->rol ?></td>
                          </tr>
                          <?php

                        }
                      }                          
                      ?>
                      </tbody>
                      <tfoot>
                          <tr>
                            <td colspan="6"></td>
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

