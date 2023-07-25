








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DWCL Gymnasium</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- =======================================================
     
    ======================================================= -->
  </head>

  <body>
    <!-- Page Content
    ================================================== -->  
    
  <!-- Header -->
      
      <header id="header">
          <header class="con">
        <div class="container">

          <div id="logo" class="pull-left">
            <a href="index2.php"><img src="img/ays.png"  alt="" title="" /></img></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="studenthome.php">Reservation Form</a></li>
              <li><a href="list.php">My Reservation</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>


              </li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->
          <nav class="nav social-nav pull-right hidden-sm-down">
              
            <a href="login-form.php">LOGOUT</a>
          </nav>
        </div>
          </header>
      </header><!-- #header -->
  
    <!-- About -->

    <section class="form" id="form">
      <div class="container text-center">
          <div id="color">
        <h1>
        <b>My Reservation</b>
        </h1>
             
		<div id="list" >
            <?php
              include "dbconn.php"
              
              ?>
	<table border='2'>
        
		<tr>
            <center>
		<th>ID OF THE STUDENT</th>
		<th>NAME OF THE STUDENT</th>
		<th>NAME OF THE DEPARTMENT</th>
		<th>NAME OF THE ORGANIZATION</th>
		<th>NAME OF THE EVENT</th>
        <th>PURPOSE OF THE EVENT</th>
        <th>DATE OF THE EVENT</th>
        <th>TIME OF THE EVENT</th>
		<th>STATUS</th>
            </center>
		</tr>
            </table>    
	
		</div>
		</div>
		</div>
              
          
             
              
            
          
          

        <div class="row stats-row">
          <div class="stats-col text-center col-md-3 col-sm-6">
            
        </div>
      </div>
    </section>
    <!-- /About --> 

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/tether/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>