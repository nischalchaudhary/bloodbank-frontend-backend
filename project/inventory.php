<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Inventory</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->

    <!-- Start top bar -->
    <div class="main-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-top">
                        <a class="new-btn-d br-2" href="#"><span>Donate Blood</span></a>
                        <div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                everydropcounts@gmail.com</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wel-nots">
                        <p>Welcome to Our Website!</p>
                    </div>
                    <div class="right-top">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/project_logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="index.php">Home</a></li>
						<li><a class="nav-link" href="index.php#about">About Us</a></li>
						<li><a class="nav-link active" href="inventory.php">Inventory</a></li>
						<li><a class="nav-link" href="request.php">Request Blood</a></li>
						<li><a class="nav-link" href="donate.php">Donate Blood</a></li>
						<li><a class="nav-link" href="index.php#team">Emergency Cases</a></li>
						<li><a class="nav-link" href="contact_us.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="services" class="services-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Inventory</h2>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-medkit" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="serviceBox">
                                <div class="service-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                                <h3 class="title">Lorem ipsum dolor</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                                </p>
                                <a href="#" class="new-btn-d br-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Health Lab</a> Design By
                        : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
