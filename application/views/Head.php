<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Censo | Baruta </title>

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="<?php echo get_assets_url();?>assets/img/favicon.jpeg" type="image/x-icon">
    <link rel="icon" href="<?php echo get_assets_url();?>assets/img/favicon.jpeg" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="<?php echo get_assets_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo get_assets_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo get_assets_url();?>assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo get_assets_url();?>assets/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo get_assets_url();?>assets/css/custom.css" rel="stylesheet">


    <link href="<?php echo get_assets_url();?>assets/jQuery-Smart-Wizard/dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />

    <!-- SmartWizard theme -->
    <link href="<?php echo get_assets_url();?>assets/jQuery-Smart-Wizard/dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
 

     <!-- Datatables -->
    <link href="<?php echo get_assets_url();?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo get_assets_url();?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_assets_url();?>assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_assets_url();?>assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_assets_url();?>assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_assets_url();?>assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_assets_url();?>assets/alertify/themes/alertify.core.css">

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_assets_url();?>assets/alertify/themes/alertify.bootstrap.css">


      <link rel="stylesheet" href="<?php echo get_assets_url();?>assets/css/jquery-ui.css">






  </head>
  <?php  

  if($menu){
    ?>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
              <?php        $this->load->view('Menu', $nombre); 
          }else{?>
              <body class="login">
              <?php } ?>

           
