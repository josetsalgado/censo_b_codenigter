   <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                  <div class="count"><?php echo $count[0]->num; ?></div>
                  <h3>Transcritos</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count"><?php echo $count_corregidos[0]->num; ?></div>
                  <h3>Revisados</h3>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ultimos Censos </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php 
                  if(is_array($data->rows )){
                          foreach(  $data->rows as $key =>$row){
                                    ?>

                                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month"><?php
                        $mydate = $row->fecha;
                        $resultado = str_replace("/", "-", $mydate);
                        $month = date("M", strtotime($resultado));
                        echo $month;
                         ?></p>
                        <p class="day"><?php
                        $mydate = $row->fecha;
                        $resultado = str_replace("/", "-", $mydate);
                        $day = date("d", strtotime($resultado));
                        echo $day;
                         ?></p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="<?php echo get_site_url('censo/censo/preview/'.$row->idcenso)?>" style="color: #266438;"><?php echo $row->denominacion_comercial?></a>
                        <p><?php echo $row->rif." / ".$row->denominacion_comercial." / ".$row->razon_social." / ".$row->direccion; ?></p>
                      </div>
                    </article>








                                  <?php

                                }
                              }                          
                        ?>
                                       <!--  <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Item Two Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article>
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">April</p>
                        <p class="day">23</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Item Three Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </article> -->
                  </div>
                </div>
              </div>
            </div>
           </div>
          </div>
        <!-- /page content -->