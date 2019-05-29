<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carvan</title>
<!-- //custom-theme -->
<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="index.php"><img src="images/carvan.png" alt=""></a>
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
