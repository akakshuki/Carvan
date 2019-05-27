<!doctype html>
<html>
<head>
<<<<<<< HEAD
	<meta charset="utf-8">
	<title>Amaclone</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body>
	

	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Amaclone</a>
			</div>

			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name=""></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span class='glyphicon glyphicon-search'></span></button></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a>
					<ul class="dropdown-menu">
					<div style="width: 300px;">
						<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<label for="email">Email</label>
								<input type="email" class="login form-control" id="email">
								<label for="email">Password</label>
								<input type="password" class="login form-control" id="password">
								<p><br></p>
								<a href="#" style="color: white;list-style-type: none;">Forgot Password?</a>
								<input type="submit" class="btn btn-success" style="float: right;bottom:12px;" id="login" value="Login" name="">
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
				</ul>
				
				<li><a href="customer_registration.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
		<br><br><br>
	<!-- Slider Begins -->
=======
<meta charset="utf-8">
<title>Carvan</title>
<!-- //custom-theme -->
<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
>>>>>>> fisrt

<link href="css/footer-contact-form.css" rel="stylesheet" type="text/css" />
<!-- //custom-theme -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- web fonts -->
<!-- <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<!-- //web fonts -->

<!-- animation -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- animation -->
</head>
<body>
<div class="carvan-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="index.php"><img src="img/carvan.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu">
                <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="about.php">About Us</a> </li>
                <li class="nav-item"> <a class="nav-link" href="product.php">Product</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact Us</a> </li>
            </ul>
            </div>
    </nav>
    </div>
<div class="one-time">
        <div><img src="images/Banner/banner_1.png"></div>
        <div><img src="images/Banner/banner_2.png"></div>
        <div><img src="images/Banner/banner_3.png"></div>
    </div>
<div class="type_car">
        <h1 class="text-center" style="font-weight: bold">BROWSE BY STYLE</h1>
        <div class="col-md-12">
        <div class="panel panel-info">
                <div id="get_type"></div>
            </div>
    </div>
    </div>
<div class="container-fluid">
        <div class="top_car">
        <h1 class="text-center" style="font-weight: bold">TOP CARS</h1>
        <div class="col-md-12">
                <div id="get_top"></div>
            </div>
    </div>
    </div>

<!-- Modal -->

<div class="modal fade" id="quickcar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Quick Car</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
                <div class="modal-body" id='pro_content'> </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
    </div>
    </div>

<!-- Modal ends-->

<div class="bgimage">
        <div class="about-content col-md-12">
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 about-txt wow zoomIn" data-wow-delay="0.5s"> <span>ABOUT</span>
                <p>With a motivated team, we strive to be the creative minds that bring a smile to your face. That’s why we’re always looking for innovative new ways to get the best to you.</p>
                <div class="border-div"></div>
            </div>
                <div class="col-md-3"></div>
                <div class="clearfix"></div>
            </div>
    </div>
    </div>
<div id="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d519.0612159386335!2d106.69003762917232!3d10.77847340251722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3a9d97282b%3A0x45e74ca0fc0300dc!2sAptech+Computer+Education!5e0!3m2!1svi!2s!4v1555644966024!5m2!1svi!2s" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<footer class="footer-distributed">
        <div class="footer-left"> <img src="img/carvan.png" alt="">
        <p class="footer-links"> <a href="index.php">Home</a> · <a href="about.php">About</a> · <a href="product.php">Product</a> · <a href="contact.php">Contact</a> </p>
        <p class="footer-company-name">Company CARVAN &copy; 2019</p>
        <div class="footer-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-github"></i></a> </div>
    </div>
        <div class="footer-right">
        <p>Contact Us</p>
        <form action="#" method="post">
                <input type="text" name="email" placeholder="Email" />
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>
            </form>
    </div>
    </footer>
<script type="text/javascript" src="assets/jquery.min.js"></script> 
<script type="text/javascript" src="js/slick.min.js"></script> 
<script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script> 
<script src="js/main.js"></script>
</body>
</html>
