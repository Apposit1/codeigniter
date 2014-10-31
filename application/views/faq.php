<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FAQ</title>

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
		    <li><a href="http://localhost/aksum/index.php/kkk/about_us">About Us</a></li>
			<li><a href="http://localhost/aksum/index.php/kkk/contact_us">Contact Us</a></li>
			<li class="active"><a href="http://localhost/aksum/index.php/kkk/faq">FAQ</a></li>
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
                <h1 class="page-header">FAQ</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/aksum/index.php/kkk/index">Home</a>
                    </li>
                    <li class="active">FAQ
					</li>
                </ol>
            </div>

        </div>
    </div> <!--end of the container-->
	
	
	     <div class="container">
		 
		      <div class="panel-group" id="accordion">
                 <?php foreach($rows as $r) :?>
				 <?php echo '<div class="panel panel-default">';?>
				 <?php echo '<div class="panel-heading">';?>
				 <?php echo '<h4 class="panel-title">';?>
				 <?php echo '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#'.$r->headerno.'">'.$r->headers.'</a></h4>';?>
				 <?php echo '</div>';?>
                    <!--<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    The location of the hottel
                  </a>
                            </h4>
                        </div> -->
						
						
						<?php echo '<div id="'.$r->headerno.'" class="panel-collapse collapse">';?>
						<?php echo '<div class="panel-body">';?>
						<?php echo ''.$r->discription.'';?>
						<?php echo'</div>';?>
						<?php echo'</div>';?>
                        <!--<div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Aksum hettel found in Ethiopia in the Mekelle city. 
                            </div>
                        </div> -->
                    <?php echo '</div>';?>
					<?php endforeach;?>
					<!--<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo">
                    Number of the employee work in the hottel
                  </a>
                            </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                It contain about 400 employees
                            </div>
                        </div>
                    </div> -->
              </div><!--end if the pannel group-->
		    
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
