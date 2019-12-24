<!-- page content -->


        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="breadcrumb">
                  <a>Home</a>
                  Usuarios
                </div>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Datos de Usuario</h2>
                        <div class="clearfix"></div>
                    </div>

                  <div class="x_content">
                    <br />
                    <?php echo validation_errors(); ?>
                    <form class="form-horizontal form-label-left input_mask" action="<?php echo get_site_url("usuarios/usuarios/update")?>" method="post">  
                      <input type="hidden" id="idusuario" name="idusuario" value="<?php echo (!empty($data->id) && $data->id > '') ? $data->id : ''; ?>">
  
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo (!empty($data->nombre) && $data->nombre > '') ? $data->nombre : ''; ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo (!empty($data->apellido) && $data->apellido > '') ? $data->apellido : ''; ?>">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="correo" name="correo" placeholder="Correo" value="<?php echo (!empty($data->correo) && $data->correo > '') ? $data->correo : ''; ?>">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="rol" id="rol">
                         <?php echo (!empty($data->rol) && $data->rol > '') ? "<option value='".$data->rol."' selected>".$data->rol."</option>" : '<option selected hidden>Rol</option>'; ?>
                            <option value="Transcriptor">Transcriptor</option> 
                            <option value="Empadronador">Empadronador</option> 
                            <option value="Supervisor">Supervisor</option> 
                            <option value="Administrador">Administrador</option> 
                        </select>
                        <span class="fa fa-cogs form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="password" class="form-control has-feedback-left" id="contrasena" name="contrasena" placeholder="Contraseña" value="<?php echo (!empty($data->contrasena) && $data->contrasena > '') ? $data->contrasena : ''; ?>">
                        <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo (!empty($data->telefono) && $data->telefono > '') ? $data->telefono : ''; ?>">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <br><br><br><br><br><br>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                          <button type="submit" class="btn btn-success sw-btn-next"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->