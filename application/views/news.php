<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
      <!-- Bootstrap -->
<link href="http://localhost/aksum/style/css/bootstrap.min.css" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
         queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page 
         via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
            html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
            respond.min.js"></script>
      <![endif]-->
	  <style type="text/css">
	  .carousel-inner {
	  border-radius:6px;
      border:medium #cccccc inset;
	  }
	  </style>
      <link href="http://localhost/aksum/style/css/main.css" rel="stylesheet" type="text/css">
	  <link href="http://localhost/aksum/style/css/modern-business.css" rel="stylesheet">
    <link href="http://localhost/aksum/style/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
      

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!--<script src="https://code.jquery.com/jquery.js"></script>-->
      <!-- Include all compiled plugins (below), or include individual files 
            as needed -->
      <script src="http://localhost/aksum/style/js/bootstrap.min.js"></script>
	  <script src="http://localhost/aksum/style/js/jquery-1.10.2.js"></script>
    <script src="http://localhost/aksum/style/js/bootstrap.js"></script>
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
		    <li class="active"><a href="http://localhost/aksum/index.php/kkk/index">Home</a></li>
		    <li><a href="http://localhost/aksum/index.php/kkk/about_us">About Us</a></li>
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
	<br />
	  <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5560.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Safe Parking System</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5561.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Come and check our Hottel</h1>
                </div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5562.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5563.jpg');"></div>
                <div class="carousel-caption">
                    <h1>For more contact <a href="http://www.facebook.com">Facebook</a></h1>
                    </h1>
                </div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5564.jpg');"></div>
                
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('http://localhost/aksum/images/image/IMG_5565.jpg');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
	
	
	<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Home</h1>
                <ol class="breadcrumb">
                    <li><a href="http://localhost/aksum/index.php/kkk/index" class="active">Home</a>
                    </li>
                    
                </ol>
            </div>

        </div>
    </div> <!--end of the container-->
	
	
	<div class="section">
	   <div class="container">
<div class="row">
<div class="col-lg-9">	
<?php foreach($news as $new): ?>
<h3><?php echo $new->heading;?></h3>
<p><?php echo $new->news; ?></p>
<?php endforeach; ?>
</div>

<div class="col-lg-3">
<div class="panel panel-default">
 
<div class="panel-heading"> 
<h3 class="panel-title">New Feeds</h3>
</div><!--end of the panel heading -->

<div class="panel-body"> 
<ul>
<?php foreach($newfeed as $new1): ?>
<?php echo '<li><a href="http://localhost/aksum/index.php/news/'.$new1->id.'"><h4>'.$new1->heading.'</h4></a></li>';?>
<?php endforeach ;?>
</ul>
</div><!--end of the panel body --> 

</div><!--end of the panel-default -->
</div>

</div>
</div><!--end of the class row-->
</div>
</body>
</html>


