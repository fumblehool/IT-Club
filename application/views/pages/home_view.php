<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
          <li class="active"><a href="<?php echo base_url(); ?>/index.php/home_c">Home</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/aboutclub_c">About Club</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/activities_c">Activities</a></li>
          <li><a href="joinus_c">Join Us</a></li>
        </ul>
      </div>
   </header>
<br><br><br><br>
  <div class="container-fluid">

    <div class="row-fluid">
      <!-- left column -->
      <div class="span8">
        <div class="well">
          <h2>WHO WE ARE </h2>
          <hr/>
          <p>I.T Club India® seeks to Advance the IT Profession through Professional Development & Awareness, Support of IT Education, and Government Policies on IT that improve society as a whole.

            I.T. Club India® represents Professionals, Companies and Organizations involved in consulting and providing products and services pertaining to Information Technology sector. The primary goal of the I.T. Club India is to promote management practices that will ensure the confidentiality, integrity and availability of information resources.
          </p></div>
          <br/>
          <div class="well">
           <h2>OUR AIMS & OBJECTIVES</h2>
           <hr/>
           <p><i class="icon-pencil"></i> Technology Awareness</p>
           <br/>
           <p><i class="icon-briefcase"></i> Business Engagement and Emplementation</p>
           <br/>
           <p><i class="icon-qrcode"></i> Cyber Law & Govt. Policy Awareness</p>
         </div></div>

        <!-- right column -->
         <div class="span4">
           <div class="well"> <form name="signin" class="form-signin" method="post" onsubmit="return validateForm()" action="#">
            <h2 class="form-signin-heading">Login</h2>
            E-mail:<input type="text" class="input-block-level" name="Email address">
            Password: <input type="password" class="input-block-level" name="Password">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
          </form>
        </div></div>


      </div>

    </div>
  </body>
  </html>
