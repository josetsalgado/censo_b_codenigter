 
    </div>
    </div>
  <!-- footer content -->

<?php if($menu){?>    
        <footer>
          <div class="pull-right">
            ©2019 Todos los derechos reservados. Dukai soluciones
          </div>
          <div class="clearfix"></div>
        </footer>
<?php } ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo get_assets_url();?>assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo get_assets_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo get_assets_url();?>assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo get_assets_url();?>assets/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo get_assets_url();?>assets/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo get_assets_url();?>assets/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo get_assets_url();?>assets/Flot/jquery.flot.js"></script>
    <script src="<?php echo get_assets_url();?>assets/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo get_assets_url();?>assets/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo get_assets_url();?>assets/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo get_assets_url();?>assets/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo get_assets_url();?>assets/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo get_assets_url();?>assets/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo get_assets_url();?>assets/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo get_assets_url();?>assets/moment/min/moment.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo get_assets_url();?>assets/js/custom.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    <script type="text/javascript" src="<?php echo get_assets_url();?>assets/jQuery-Smart-Wizard/dist/js/jquery.smartWizard.js"></script>
     <script src="<?php echo get_assets_url();?>assets/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo get_assets_url();?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo get_assets_url();?>assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo get_assets_url();?>assets/js/libs/1.11.4-jquery-ui.min.js"></script>

      <!-- jquery.inputmask -->
    <script src="<?php echo get_assets_url();?>assets/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

        <script src="<?php echo get_assets_url();?>assets/alertify/lib/alertify.min.js"></script> 
      <script type="text/javascript">

           //funcion load
            setTimeout(function() {
              $("#loading-wrapper").fadeOut(1500);
            },100);

        function buscar() {
          var textoBusqueda = $(".search_tcontacto").val();
          if (textoBusqueda != "") {
            $.post('<?php echo get_site_url("censo/ajax_get_contribuyente")?>', {valorBusqueda: textoBusqueda}, function(mensaje) {

              if (mensaje ==="true") {
                $("#resultadoBusqueda").html("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' onclick='myFunction()'>×</span></button> <strong>"+textoBusqueda+"</strong> este Rif ya se encuentra registrado </div>");

              }else{
               $("#resultadoBusqueda").html("");
             }





            }); 
          } else { 
            $("#resultadoBusqueda").html('');
          };
        }

        window.addEventListener("keypress", function(event){
          if (event.keyCode == 13){
            event.preventDefault();
          }
        }, false);

        function myFunction() {
         $(".search_tcontacto").val('');
        }
        $(document).ready(function() {

     $(".currency").inputmask('currency',{rightAlign: true  });




    $('.btn-aprobar').on( 'click', function () {
        var idcenso = jQuery(this).attr("id");
          alertify.confirm("¿Esta seguro que desea aprobar este registro?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '<?php echo get_site_url('censo/censo/aprobar/')?>',
                        type: 'get',
                        data: { 'id' : idcenso},
                        success: function (data) {
                            console.log(data);
                            var simple = '<?php echo get_site_url("censo/censo/preview")?>';
                            window.location.replace(simple+"/"+data);
                            alertify.success('Censo Aprobado');
                        },error: function (err) {
                            console.log(err);
                        }
                    });
                    return false;
                } else {
                    alertify.error("Usted ha cancelado la solicitud");

                }
            },
            function () {
                var error = alertify.error('Cancel');
            });
         
         } );


   $('#myForm').submit(function(e) {
        e.preventDefault();
        var form = $("#myForm");
        var url = form.attr('action');
        var simple = '<?php echo get_site_url("censo/censo/preview")?>';

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), 
            success: function(data)
            {
               $data = data;
               if ($data != "false") {
                    window.location.replace(simple+"/"+data);
               }
          }
     });
   });


  $( ".search_cnae" ).autocomplete({
    minLength: 2,
    source: '<?php echo get_site_url("censo/get_cnae")?>',
    select: function( event, ui ) {
    
      $(this ).val(ui.item.label);
      partner_id = $( this ).attr("data-partner-id");
      partner_id2 = $( this ).attr("data-partner-id2");
      $( "#"+partner_id ).val(ui.item.label);
      $( "#"+partner_id2 ).val(ui.item.label);

      return false;

    }
  }).focus(function () {
      $(this).val('').autocomplete("search");
   });


        isOPERA = (navigator.userAgent.indexOf('Opera') >= 0)? true : false;
        isIE    = (document.all && !isOPERA)? true : false;
        isDOM   = (document.getElementById && !isIE && !isOPERA)? true : false;


          $('#Otros').change(function() {
            if (this.value == 'OTROS') {
              $("#text_otro").show();
            }
            else{
             $("#text_otro").hide();
            }
          });


          $('input[type=radio]').change(function() {

            classname = "."+this.name;
            
            if (this.value == 'NO' || this.value == 'N/A') {
              $(classname).prop('disabled', true);
            }
            else{
             $(classname).prop('disabled', false);
            }
          });


        $('.formatoRif').keypress(function(e){
        if (this.value.length + 1 > 12) return false;
        return formatoRif(this,e);
        });

          function formatoRif(campo, e){

            var patron =/^[jgvpeJGVPE\d]$/;
            if (isDOM) codigoTecla = e.which;
            else if (isIE) codigoTecla = e.keyCode;
            if (codigoTecla == 13) return true;
            if (codigoTecla == 8) return true;
            if (codigoTecla == 0) return true;
            var tecla = String.fromCharCode(codigoTecla);
            if (tecla.search(patron)==-1) return false;

            switch (campo.value.length){
                case 0:
                if (tecla.search(/^[jgvpeJGVPE]$/)==-1)
                    return false;
                break;
                case 1:case 10:
                if (tecla.search(/^\d$/)!=-1)
                    campo.value=campo.value + "-" + tecla;
                return false;
                break;
                default:
                if (tecla.search(/^\d$/)==-1)
                    return false;
            }

            campo.value+=tecla.toUpperCase();
            return false;
        }


         $('.cedula').keypress(function(e){
        if (this.value.length + 1 > 10) return false;
        return cedula(this,e);
        });

          function cedula(campo, e){

            var patron =/^[veVE\d]$/;
            if (isDOM) codigoTecla = e.which;
            else if (isIE) codigoTecla = e.keyCode;
            if (codigoTecla == 13) return true;
            if (codigoTecla == 8) return true;
            if (codigoTecla == 0) return true;
            var tecla = String.fromCharCode(codigoTecla);
            if (tecla.search(patron)==-1) return false;

            switch (campo.value.length){
                case 0:
                if (tecla.search(/^[jgvpeJGVPE]$/)==-1)
                    return false;
                break;
                case 1:
                if (tecla.search(/^\d$/)!=-1)
                    campo.value=campo.value + "-" + tecla;
                return false;
                break;
                default:
                if (tecla.search(/^\d$/)==-1)
                    return false;
            }

            campo.value+=tecla.toUpperCase();
            return false;
        }



          $('input[type=radio][name=tipo_maquinas]').change(function() {
            if (this.value == 'OTRO') {
              $("#text_otro2").show();
            }
            else{
             $("#text_otro2").hide();
            }
          });


            // Smart Wizard
            $('#smartwizard').smartWizard({
                  selected: 0,  // Initial selected step, 0 = first step 
                  keyNavigation:false, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                  contentCache:false,
                  autoAdjustHeight:true, // Automatically adjust content height
                  cycleSteps: false, // Allows to cycle the navigation of steps
                  backButtonSupport: true, // Enable the back button support
                  useURLhash: true, // Enable selection of the step based on url hash
                  lang: {  // Language variables
                      next: 'Siguiente', 
                      previous: 'Atras'
                  },
                  toolbarSettings: {
                      toolbarPosition: 'bottom', // none, top, bottom, both
                      toolbarButtonPosition: 'right', // left, right
                      showNextButton: true, // show/hide a Next button
                      showPreviousButton: true, // show/hide a Previous button

                      toolbarExtraButtons: [
                  $('<button></button>').text('Enviar')
                                .addClass('btn btn-info enviarformulario')
                      
                                .on('click', function(){ 

                                }),
                  $('').text('')
                                .addClass('btn btn-danger')
                                .on('click', function(){ 
                              alert('Cancel button click');                            
                                })
                            ]
                  }, 
                  anchorSettings: {
                      anchorClickable: true, // Enable/Disable anchor navigation
                      enableAllAnchors: false, // Activates all anchors clickable all times
                      markDoneStep: true, // add done css
                      enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                  },            
                  contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
                  disabledSteps: [],    // Array Steps disabled
                  errorSteps: [],    // Highlight step with errors
                  theme: 'arrows',
                  transitionEffect: 'fade', // Effect on navigation, none/slide/fade
                  transitionSpeed: '400'
            });

          
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);

                var env = $("#enviar").val();

                var url = $(location).attr('href').split("/").splice(6, 9).join("/");
                var url2 = url.split('#')[1].substring(5, 6);

                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });



            //dataTable
           $('#example').DataTable( {
           "initComplete": function(settings, json) {
          $("#example").removeClass( "display" );
          },
            dom: 'Bfrtip',
            order:[1,"desc"],
              /* 'columnDefs': [{ 
                            'targets': [1], 
                            'visible': false, 
                        }],*/
            buttons: [
                { extend: 'copy', text: 'Copiar' },
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            language: {
                search: "Buscar",
                paginate: {
                    first:      "Primero",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "Último"
                },
                info:           "",
                scrollY: 1300,
                "lengthMenu":     "_MENU_"
            }
        } );


        $('#example tbody').on( 'click', 'button', function () {
      
        var table =  $('#example').DataTable();

        var id=$(this).attr('id');

        var idusuario = jQuery(this).attr("id");

        console.log(idusuario);


        var rows = $(this).parents('tr')

          alertify.confirm("¿Esta seguro que desea eliminar este usuario?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '<?php echo get_site_url('usuarios/usuarios/delete/')?>',
                        type: 'get',
                        data: { 'id' : idusuario},
                        success: function (data) {
                            console.log(data);
                            alertify.success('Usuario Eliminado');
                            table.row(rows).remove().draw();

  
                        },error: function (err) {
                            console.log(err);
                        }
                    });
                    return false;
                } else {
                    alertify.error("Usted ha cancelado la solicitud");

                }
            },
            function () {
                var error = alertify.error('Cancel');
            });
         
         } );


         //dataTable
           $('#censo').DataTable( {
           "initComplete": function(settings, json) {
          $("#censo").removeClass( "display" );
          },
            dom: 'Bfrtip',
            order:[1,"desc"],
              /* 'columnDefs': [{ 
                            'targets': [1], 
                            'visible': false, 
                        }],*/
            buttons: [
            ],
            language: {
                search: "Buscar",
                paginate: {
                    first:      "Primero",
                    previous:   "Anterior",
                    next:       "Siguiente",
                    last:       "Último"
                },
                info:           "",
                scrollY: 1300,
                "lengthMenu":     "_MENU_"
            }
        } );


        $('#censo tbody').on( 'click', 'button', function () {
      
        var table =  $('#censo').DataTable();

        var id=$(this).attr('id');

        var idusuario = jQuery(this).attr("id");

        var rows = $(this).parents('tr')

          alertify.confirm("¿Esta seguro que desea eliminar esta encuesta?",
            function (e) {
                if (e) {
                    $.ajax({
                        url: '<?php echo get_site_url('censo/censo/delete/')?>',
                        type: 'get',
                        data: { 'id' : idusuario},
                        success: function (data) {
                            console.log(data);
                            alertify.success('encuesta Eliminada');
                            table.row(rows).remove().draw();




  
                        },error: function (err) {
                            console.log(err);
                        }
                    });
                    return false;
                } else {
                    alertify.error("Usted ha cancelado la solicitud");

                }
            },
            function () {
                var error = alertify.error('Cancel');
            });
         
         } );

        /*$('#export').submit(function(e) {

                        e.preventDefault(); // avoid to execute the actual submit of the form.

                        var form = $(this);
                        var url = form.attr('action');

                        $.ajax({
                         type: "POST",
                         url: url,
                               data: form.serialize(), // serializes the form's elements.
                               success: function(data)
                               {
                                   console.log(data); // show response from the php script.
                                 }
                            });


                      });*/


        }); 
      </script>

  </body>
</html>