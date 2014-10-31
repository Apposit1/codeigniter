<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

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
			<li class="active"><a href="http://localhost/aksum/index.php/kkk/contact_us">Contact Us</a></li>
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
                <h1 class="page-header">Contact Us</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/aksum/index.php/kkk/index">Home</a>
                    </li>
                    <li class="active">Contact Us
					</li>
                </ol>
            </div>

        </div>
    </div> <!--end of the container-->
 <div class="container">
 <div class="row">
 
 <div class="col-lg-6">
	 <div class="well">
	 <form action="http://localhost/aksum/index.php/kkk/in" method="post" role="form" class="form-horizontal">
	 <div class="form-group">
	 <label>Email:</label>
	 <input type="email" class="form-control" name="email">
	 </div>
	 
	 <div class="form-group">
	 <label>Subject:</label>
	 <input type="text" class="form-control" name="subject">
	 </div>
	 
	 <div class="form-group">
	 <label>Message:</label>
	 <textarea class="form-control" rows="6" name="message"></textarea>
	 </div>
	 
	 <div class="form-group">
	 <button class="btn btn-default" type="submit" name="submit"><span class="glyphicon glyphicon-comment"></span>  Submit</button>
	 </div>
	 </form>
	 </div><!--end of the well-->
     </div><!--end of the col-lg-6-->
 
 <div class="col-lg-6">
 For more information contact us in the following link:-
 <h3>Aksum Hottel</h3>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +251914587967</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="#">feedback</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
		  
<?php 
if(validation_errors())
	    {
echo '<p class="text-warning">'.validation_errors().'</p>'; 
        }
?><!--this is for the form validation error dispaly -->

		  
 </div><!--end of the col-lg-9-->

	 	 
</div><!--end of the row-->    
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
