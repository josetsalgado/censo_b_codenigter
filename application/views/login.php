  <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo base_url() ?>index.php/login/iniciar_sesion_post">

              <h1>Acceder</h1>
              <div>
                <input type="text" name="correo" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div class="col-md-4 col-md-offset-3">
                <input type="submit" class="btn btn-default submit sw-btn-next" value="Entrar" />
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2019 Todos los derechos reservados. Dukai soluciones</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>