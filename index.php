<!DOCTYPE html>
<html>
<head>
	<title>uttara-pure</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Uttara_pure</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    	<li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Services <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/photo7.jpg" alt="Badrinath" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Badrinath Temple</h3>
        <p>such a religious place</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/photo2.jpg" alt="Uttarakhand" width="1100" height="500">
      <div class="carousel-caption">
        <h3>mountains</h3>
        <p>feel the breeze!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/photo3.jpg" alt="Uttarakhand" width="1100" height="500">
      <div class="carousel-caption">
        <h3>mountains</h3>
        <p>We love the vibe!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us </h3>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-6 col-md-6 col-12">
		<img src="images/photo4.jpg" class="img-fluid aboutimg">

	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-4">Pure tourism</h2>
		<p class="py-3"> A site to guide you to the beautiful places of uttarakhand.
		</p>
		<a href="about.php" class="btn btn-success" action=""> To know more </a>

	</div>
</div>
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Services</h3>
	</div>

	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
		<div class="card" style="width:400px">
  			<img class="card-img-top" src="images/photo5.jpg" alt="Card image">
  			<div class="card-body">
    		<h4 class="card-title">From Rishikesh</h4>
    		<p class="card-text">Start your travel from herer</p>
    		<a href="#" class="btn btn-primary" >To know more</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
		<div class="card" style="width:400px">
  			<img class="card-img-top" src="images/photo9.jpg" alt="Card image">
  			<div class="card-body">
    		<h4 class="card-title">From Haridwar</h4>
    		<p class="card-text">Start your travel from herer</p>
    		<a href="#" class="btn btn-primary" >To know more </a>
  </div>
</div>
</div>
		<div class="col-lg-4 col-md-4 col-12">
		<div class="card" style="width:400px">
  			<img class="card-img-top" src="images/photo10.jpg" alt="Card image">
  			<div class="card-body">
    		<h4 class="card-title">From Dehradoon</h4>
    		<p class="card-text">Start your travel from herer</p>
    		<a href="#" class="btn btn-primary">To know more</a>
  </div>
</div> 
</div>
</div>

</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">For More Info Drop your details</h3>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>UserName</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>


		</form>

</div>
</section>
<footer>
	<p class="p-3 bg-dark text-white text-center">contact info:pawannautiyal777@gmail.com</p>

</footer>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>