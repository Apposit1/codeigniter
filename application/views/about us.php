<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/aksum/style/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="http://localhost/aksum/style/css/modern-business.css" rel="stylesheet">
    <link href="http://localhost/aksum/style/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="http://localhost/aksum/style/js/jquery-1.10.2.js"></script>
    <script src="http://localhost/aksum/style/js/bootstrap.js"></script>
    <script src="http://localhost/aksum/style/js/modern-business.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	   <div class="container">
	       <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="index.php">Aksum Hottel</a>
			</div><!--end of the header-->
		 <div class="collapse navbar-collapse navbar-ex1-collapse">	
		 <ul class="nav navbar-nav navbar-right">
		    <li><a href="http://localhost/aksum/index.php/kkk/index">Home</a></li>
		    <li class="active"><a href="http://localhost/aksum/index.php/kkk/about_us">About Us</a></li>
			<li><a href="http://localhost/aksum/index.php/kkk/contact_us">Contact Us</a></li>
			<li><a href="http://localhost/aksum/index.php/kkk/faq">FAQ</a></li>
			<!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Other<span class="caret"></span></a>
			   <ul class="dropdown-menu">
			      <li><a href="#">Parking</a></li>
				  <li><a href="#">Room reservation</a></li>
				  <li><a href="galary.php">Image galary</a></li>
			   </ul>
			</li>-->
			<li><a href="http://localhost/aksum/index.php/kkk/galary">Image Galary</a></li>
		 </ul>
		 </div><!--end of the collapse-->
	   </div><!--end of the contaner-->
	</nav><!--end of the nav-->
	
	<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">About Us</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/aksum/index.php/kkk/index">Home</a>
                    </li>
                    <li class="active">About US
					</li>
                </ol>
            </div>

        </div>
    </div> <!--end of the container-->
	
	<div class="container">
	<h2 class="page-header">Tabbed Services</h2>
	            <ul id="myTab" class="nav nav-tabs">
				<?php foreach($rows as $r): ?>
				<?php echo '<li><a href="#'.$r->serviceno.'"data-toggle="tab">Service&nbsp;'.$r->serviceno.'</a></li>';?>
                <!--<ul id="myTab" class="nav nav-tabs">
                    <li><a href="#1" data-toggle="tab">Service One</a>
                    </li>
                    <li><a href="#service-two" data-toggle="tab">Service Two</a>
                    </li>
                    <li><a href="#service-three" data-toggle="tab">Service Three</a>
                    </li>
                </ul> -->
				<?php endforeach; ?>
				</ul>
				<div id="myTabContent" class="tab-content">
				<?php foreach($rows as $r): ?>
				<?php echo '<div class="tab-pane fade" id="'.$r->serviceno.'">'.$r->service.'</div>';?>
	<!--<div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <span class="glyphicon glyphicon-tag"></span>
                        We give special service based on the customer wish!
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <i class="fa fa-hospital-o pull-left fa-4x"></i>
                        We also have gaselight celebration for our customers, to night
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <i class="fa fa-magic pull-left fa-4x"></i>
                        There is a full transport system over whole day 24 seven hour per a day.
                    </div>-->
				<?php endforeach;?>	
                </div><!--end of the tab-pane--> 
            </div><!--end of the tab-content-->

	
	
	
	</div><!--end of the container-->
	
<!--Fotter started-->
	 <div class="navbar navbar-default ">
	  <div class="container">
	  <p class="navbar-text">Developed by by sentayhu &copy; 2014</p>
	  </div>
	  </div>
	 <!--Fotter ended-->
</body>
</html>
