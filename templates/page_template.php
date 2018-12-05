<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Free Software & Hardware course</title>       
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/icomoon-social.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" href="css/leaflet.css" />
      <!--[if lte IE 8]>
      <link rel="stylesheet" href="css/leaflet.ie.css" />
      <![endif]-->
      <link rel="stylesheet" href="css/main.css">

      <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
    <!-- Navigation & Logo-->
    <div class="mainmenu-wrapper">
      <div class="container">
        <nav id="mainmenu" class="mainmenu">
          <ul>
            <li class="logo-wrapper" ><a href="index.html">FREE SOFTWARE & HARDWARE COURSE</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html#materials">Materials</a></li>
            <li><a href="index.html#events">Events</a></li>
            <li><a href="index.html#about">About Us</a></li>
          </ul>
          </nav>
      </div>
    </div>

    <!-- Page Title -->
    <div class="section section-breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1><?php echo $category ? $category : "Categoria"; ?></h1>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Services -->
    <div class="section">
      <div class="container">
      <h3>The following contributions have been made by students as final works for the latest editions of the course. </h3><br>
  
    <?php include "ls_template.php"; ?>
    
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-copyright">
            <a href="">Free Software and Hardware PhD Course - 2015 <br> </a><img width="70px" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png"> <br>
          <small>Politecnico di Torino - Corso Duca degli Abruzzi, 24 - 10129 Torino, ITALY - P.IVA/C.F.:00518460019. </small><a href="http://media.polito.it/favario"><small>Credits</small></a>
          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Javascripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/template.js"></script>

  </body>
</html>
