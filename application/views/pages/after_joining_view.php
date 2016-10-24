<!DOCTYPE html>
<html lang="en">
<head>
  <title>Activities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Navjot Singh">
  <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>ico/favicon.png">
  <script>           
      function validateForm() {
        var a = document.forms["signin"]["Email address"].value;
        var b = document.forms["signin"]["Password"].value;

        if (a == null || a == "") {
          alert("please enter your Email to sign in ");
          return false;}
          if (b == null || b == "") {
            alert("please enter your password to sign in");
            return false; }
          }

  </script>
 </head>

 <body>

  <!-- navbar -->
    <header class="navbar  navbar-fixed-top navbar-inverse" role="banner">
      <div class="navbar-inner">
        <a class="brand" href="<?php echo base_url(); ?>/index.php/home_c" style="color:white; margin-left:0.1%;">IT CLUB</a>
        <ul class="nav pull-right" style="margin-right:1%;">
          <li ><a href="<?php echo base_url(); ?>/index.php/home_c">Home</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/aboutclub_c">About Club</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/activities_c">Activities</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/joinus_c">Join Us</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br><br>

  <div class="container-fluid">
<br><br><br><br>
<p class="well lead" style="color:white; background-color:#00008B">Congratulations <?php echo $username ?>, Your account has been created successfully !!!</p>

  </div>
  </body>
  </html>
