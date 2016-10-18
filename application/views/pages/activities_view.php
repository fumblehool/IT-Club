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
        <a class="brand" href="<?php echo base_url(); ?>/index.php/home_c" style="color:white">IT CLUB</a>
        <ul class="nav pull-right">
          <li ><a href="<?php echo base_url(); ?>/index.php/home_c">Home</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/aboutclub_c">About Club</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>/index.php/activities_c">Activities</a></li>
          <li><a href="joinus_c">Join Us</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br><br>

  <div class="container-fluid">
<br><br><br><br>
 <div class="row-fluid">
        <div class="span4">
    <img src="<?php echo base_url();?>images/training.png" />
          <h2>Training </h2>
          <p>Training helps your business run better. It is essential for knowledge transfer. Through this we can give improvements in confidence, capability and competence.</p>
          
        </div>
        <div class="span4">
    <img src="<?php echo base_url();?>images/seminar.png" />
          <h2>Seminars</h2>
          <p>In our seminars we share personal experiences regarding it, which provide a great deal in your practical.</p>
       </div>
     
     <div class="span4">
     <img src="<?php echo base_url();?>images/conference.png" />
      <h2>Conferences</h2>
     <p>At the conferences you can discuss any thing regarding information technology and your business</p>
     </div>
        
      </div>

  </div>
  </body>
  </html>
