<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>MSW</title>
      <link rel="shortcut icon" href="<?= asset_url(); ?>img/mysoftlogo.png" type="image/x-icon">
      <link href="<?= asset_url(); ?>css/bootstrap.css" rel="stylesheet"  >
      <link href="<?= asset_url(); ?>css/font-awesome.css" rel="stylesheet" >
      <link href="<?= asset_url(); ?>css/owl.transitions.css" rel="stylesheet" >
      <link href="<?= asset_url(); ?>css/owl.carousel.css" rel="stylesheet" >
      <link href="<?= asset_url(); ?>css/custom.css"  rel="stylesheet" >
      <link href="<?= asset_url(); ?>css/custom-responsive.css"  rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
        <script src="<?=  asset_url(); ?>js/jquery.js"></script>
      <script src="<?=  asset_url(); ?>js/bootstrap.js"></script>
      <script src="<?=  asset_url(); ?>js/owl.carousel.js"></script>
        <script src="<?=  asset_url(); ?>js/waypoints.min.js"></script>
        <script src="<?=  asset_url(); ?>js/jquery.counterup.min.js"></script>  
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
        <style type="text/css">
            #loader{
                position: fixed;
                height: 100%
                width:100%;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                background-color: #fff;
                z-index: 9;
            }
            #loader img {
              left: 45%;
              max-width: 150px;
              position: absolute;
              top: 45%;
            }
        </style>
  </head>

  <body> 
    <!-- header -->
    <header class="inner-header">
         <nav class="navbar navbar-custom">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#custom-toggle-navigation" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.html"><img src="img/mysoftlogo.png" alt="SCAD" class="img-responsive" /></a>

             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="custom-toggle-navigation">
               <div class="close-menu-block">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#custom-toggle-navigation" aria-expanded="false">
                    <span class="fa fa-close"></span>
                </button>
               </div>
               <ul class="nav navbar-nav navbar-right">
                 <li><a href="index.html">Home</a></li>
                 <li><a href="services.html">SCAD Services</a></li>
              <li><a href="careers.html">SCAD Products</a></li>
              <li><a href="work.html">SCAD Portfolio</a></li>
                 <li><a href="about.html">About</a></li>
                 <li><a href="contact-us.html">Contact</a></li>
               </ul>
             </div><!-- /.navbar-collapse -->
           </div><!-- /.container-fluid -->
         </nav>
      </header>