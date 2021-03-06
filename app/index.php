<!doctype html>
<?php require 'connection.php'; ?>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>toxin_screening</title>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- build:css styles/vendor.css -->
  <!-- bower:css -->
  <!-- endbower -->
  <!-- endbuild -->

  <!-- build:css styles/main.css -->
  <link rel="stylesheet" href="styles/main.css">
  <!-- endbuild -->

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">


  <!-- build:js scripts/vendor/modernizr.js -->
  <script src="bower_components/modernizr/modernizr.js"></script>
  <!-- endbuild -->

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!-- bootstrap.js below is only needed if you wish to use the feature of viewing details 
    of text file preview via modal dialog -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>  
    
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <div class="container">
        <div class="header">
          <ul class="nav nav-pills pull-right">
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="./dbsearch.php">Data Search</a></li>
            <li><a href="./scanID.php">Plate Entry</a></li>
          </ul>
          <h3 class="text-muted">toxin_screening</h3>
        </div>
        <h1>Home Page</h1>
        Select an option at the top right
      </div>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<!-- build:js scripts/vendor.js -->
<!-- bower:js -->
<script src="bower_components/jquery/dist/jquery.js"></script>
<!-- endbower -->
<!-- endbuild -->

<!-- build:js scripts/plugins.js -->
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/carousel.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
<script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tab.js"></script>
<!-- endbuild -->

<!-- build:js scripts/main.js -->
<script src="scripts/main.js"></script>
<!-- endbuild -->
</body>
</html>
