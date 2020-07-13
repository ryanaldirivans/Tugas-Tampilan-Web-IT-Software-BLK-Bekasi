<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebTrial</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="icon" type="text/css" href="asset/images/gbr5.jpg">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
-->
<style>
	/*Make the image fully responsive*/ 
	.carousel-inner img {
		width: 100%;
		height: 400px;
	}
</style>
</head>
<body>
	<div class= "container-fluid">
		<div class="row">
			<div class= "col-12 text-light" style="background-color: #33ccff;">
				<!--  <img src="asset/images/gbr3.jpg" alt="" style="width: 100%; height: 600px;"> -->
			</div>

			<!-- Carousel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="asset/images/gbr1.jpg" alt="Jatiluhur" width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="asset/images/gbr2.jpg" alt="Kebun teh" width="1100" height="500">
					</div>
					<div class="carousel-item">
						<img src="asset/images/gbr3.jpg" alt="Curug" width="1100" height="500">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>

			<nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top"  style="background-color: #33ccff; padding-left: 15px; margin-right: 10px;">
				<a class="navbar-brand" href="#">Ryanaldi</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link active" href="#">Home</a>
						</li>
         <!--  <li class="nav-item">
            <a class="nav-link active" href="#">Facilities</a>
        </li> -->
        <li class="nav-item ">
        	<a class="nav-link active" href="#">Catalog</a>
        </li>
        <li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle active" href="#" id="navbardrop" data-toggle="dropdown">
        		My Menu
        	</a>
        	<div class="dropdown-menu" style="background-color: #33ccff;">
        		<a class="dropdown-item" href="#">Link 1</a>
        		<a class="dropdown-item" href="#">Link 2</a>
        		<!-- <a class="dropdown-item" href="#">Link 3</a> -->
        	</div>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    	<input class="form-control mr-sm-2" type="text" placeholder="search"> 
    	<button class="btn btn-success my-2 my-sm-0" type="button">search</button>
    </form>
</div>  
</nav>

<div class="col-12 col-md-8 col-lg-10 text-dark pt-4" align="justify" style="min-height:650px; background-color: #b3ecff;">

	<h2 align="center" style="margin-top: 50px;">Login In Here</h2>
	<form action="proseslogin.php" method="post"  style="padding-right: 100px; padding-left: 100px; margin-left: 50px; margin-right: 50px;">
		<div class="form-group" style="margin-top: 30px;">
			<label for="email">Nama:</label>
			<input type="text" class="form-control" id="nama" placeholder="Enter your nama" name="ryanaldirivans" required="">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password1" required="">
		</div>
		<button type="submit" nama="login" value="login "class="btn btn-primary btn-lg">Login</button>
	</form>

</div>
<div class="col-12 col-md-4 col-lg-2 text-light pt-4" style="background-color: #00ff00;">
	<img src="asset/images/foto_red.jpg" width="150" height="150" style="border-radius: 80%; margin-top: 10px; margin-left: 20px; border: 1px; ">
	<p><h5 align="justify">Ryanaldi Rivansyah</h5></p>
	<div class="" style="display: inline-block; margin-left: 40px;">
		<img src="asset/images/fb_icon.png" href="#" width="40" >
		<img src="asset/images/ig_icon.png" href="#" width="40" >
		<img src="asset/images/twitter_icon.png" href="#" width="40">
	</div>
</div>
<div class="col-12 text-light" align="center" style="background-color: #33ccff;">Copyright @Ryanaldi 2020</div>
</div>
</div>

<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

</body>
</html>