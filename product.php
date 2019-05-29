<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Carvan</title>
<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">

<link href="css/footer-contact-form.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-inverse carvan-header-prod">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand img_menu" href="index.php"><img src="images/carvan.png" width="70px" alt=""></a>
    </div>
    <div class="collapse navbar-collapse text-center" id="myNavbar">
      <ul class="nav navbar-nav text-center" >
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Range<span class="caret"></span></a>
          <ul class="dropdown-menu" id="get_menu_range">
            
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brand<span class="caret"></span></a>
          <ul class="dropdown-menu" id="get_menu_brand">
            
          </ul>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      
    </div>

</nav>

<!-- Slider Begins -->
<div class="one-time">
    <div><img src="images/Banner/banner_1.png"></div>
        <div><img src="images/Banner/banner_2.png"></div>
        <div><img src="images/Banner/banner_3.png"></div>
</div>

<!-- Slider ends --> 

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div id="get_cart"><a href="#"><i class="fa fa-shopping-cart">Cart</i></a></div>
            <div id="get_range"></div>
            <div id="get_brand"></div>
        </div>
        <div class="col-md-8">
        <div class="row">
            <div id="submitmsg"></div>
				</div>
            <div class="panel panel-info">
                <div class="panel-heading text-center">--Featured Products-- </div>
                <div class="panel-body" id="get_product">
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<!-- Modal buy -->

<div class="modal fade" id="prod_buy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Form Register Car</h4>
            </div>
            <div class="modal-body" id="dynamic_buy">
           
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
        </div>
    </div>

			 <!-- Modal buy ends-->

<!-- Modal quick car-->

<div class="modal fade" id="quickcar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Quick Car</h4>
            </div>
                <div class="modal-body" id='pro_content'> ... </div>
                <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
        </div>
    </div>

<!-- Modal quick car ends-->

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
<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
