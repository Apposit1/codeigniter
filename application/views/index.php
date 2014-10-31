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
	  <style type="text/css">
	  .carousel-inner {
	  border-radius:6px;
      border:medium #cccccc inset;
	  }
	  
	  
	  
	  </style>
      <link href="http://localhost/aksum/style/css/main.css" rel="stylesheet" type="text/css">
	  <link href="http://localhost/aksum/style/css/modern-business.css" rel="stylesheet">
	  
    <link href="http://localhost/aksum/style/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="http://localhost/aksum/style/js/bootstrap.min.js"></script>
	  <script src="http://localhost/aksum/style/js/jquery-1.10.2.js"></script>
    <script src="http://localhost/aksum/style/js/bootstrap.js"></script>
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
<?php foreach($read as $rm): ?>
<?php echo '<div class="col-lg-3">'; ?>
<?php echo '<h3>'.$rm->heading.'</h3>'; ?>
<?php $limit=200; ?>
<?php $new=$rm->news; ?>
<?php $news = substr($new, 0, $limit); ?>
<?php echo ''.$news.'...<br>'; ?>
<?php echo '<a href="http://localhost/aksum/index.php/news/'.$rm->id.'" class="btn btn-primary" role="button">Read more>></a>';?>
<?php echo '</div>';?>
<?php endforeach;?>


<div class="col-lg-3">
<div class="panel panel-default">
 
<div class="panel-heading"> 
<h3 class="panel-title">New Feeds</h3>
</div><!--end of the panel heading -->

<div class="panel-body"> 
<ul>
<?php foreach($newslist as $new): ?>
<?php echo '<li><a href="http://localhost/aksum/index.php/news/'.$new->id.'"><h4>'.$new->heading.'</h4></a></li>';?>
<?php endforeach ;?>
</ul>
</div><!--end of the panel body --> 

</div><!--end of the panel-default -->
</div><!--end of the col-lg=3 -->

</div><!--end of the class row-->


<div class="row">
<?php foreach($newslist as $news): ?>
<?php echo '<div class="col-lg-9">'; ?>
<?php echo '<h2><a href="http://localhost/aksum/index.php/news/'.$news->id.'">'.$news->heading.'</a></h2>'; ?>
<?php echo '<p>'.$news->news.'</p>'; ?>
<?php echo '</div>'; ?><!--end of the col-lg-9 -->
<?php endforeach;?>
</div><!--end of the row -->	   
	</div><!--end of the section-->
	
<div class="container">

<?php echo $this->pagination->create_links(); ?>
<!--<ul class="pagination pagination-sm"> 
<li><a href="#">&laquo;</a></li> 
<li><a href="#">1</a></li> 
<li><a href="#">2</a></li> 
<li><a href="#">3</a></li> 
<li><a href="#">4</a></li>
<li><a href="#">5</a></li> 
<li><a href="#">&raquo;</a></li> 
</ul> -->
</div><!--end of the container -->	
	<!--Fotter started-->
	 <!--<div class="navbar navbar-default ">
	  <div class="container">
	  <p class="navbar-text">Developed by by sentayhu &copy; 2014</p>
	  </div>
	  </div> -->
	 <!--Fotter ended-->


</body>
</html>
