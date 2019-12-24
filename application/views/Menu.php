<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo get_site_url('/dashboard')?>" class="site_title"><img src="<?php echo get_assets_url();?>assets/img/logo.jpg" alt="..." class="img-rounded" width="100%" ><span> SEDAT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo get_assets_url();?>assets/img/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2> <?php echo $nombre; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->


            <br />







            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <?php if (!empty($rol) && $rol > '' && $rol =="Empadronador" or $rol =="Transcriptor") {?>
                    <li><a><i class="fa fa-edit"></i> Censos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo get_site_url('/censo/censo/editar')?>">Crear</a></li>
                    </ul>
                  </li>
                 <?php }elseif (!empty($rol) && $rol > '' && $rol =="Supervisor") {?>
                  <li><a href="<?php echo get_site_url('/dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                   <li><a><i class="fa fa-edit"></i> Censos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo get_site_url('/censo/censo/editar')?>">Crear</a></li>
                      <li><a href="<?php echo get_site_url('/censo/censo/home')?>">Corregir</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo get_site_url('/reportes/reportes/home')?>"><i class="fa fa-area-chart"></i> Reportes </a>
                  </li>
                  <?php }elseif (!empty($rol) && $rol > '' && $rol =="Administrador") {?>
                    <li><a href="<?php echo get_site_url('/dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                   <li><a href="<?php echo get_site_url('/usuarios/usuarios/home')?>"><i class="fa fa-user"></i> Usuarios </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Censos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo get_site_url('/censo/censo/editar')?>">Crear</a></li>
                      <li><a href="<?php echo get_site_url('/censo/censo/home')?>">Corregir</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo get_site_url('/reportes/reportes/home')?>"><i class="fa fa-area-chart"></i> Reportes </a>
                  </li>
                 <?php   } ?>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
   
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo get_assets_url();?>assets/img/img.png" alt="">
                    <?php echo $nombre; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url() ?>index.php/login/cerrar_sesion"><i class="fa fa-sign-out pull-right"></i>Salir</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->