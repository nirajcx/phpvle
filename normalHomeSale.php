<!DOCTYPE html>
<html lang="en">
<head>
	<title>Legal Eagle</title>
	<meta charset="UTF-8">

	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./lawyers/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>
<body>

	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info ">
							<h3>DashBoard</h3>
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						
							
						</div>
						<div class="user-panel">
							<a href="logout.php"><?php session_start(); echo $_SESSION['username']."  ";?><i class="fa fa-user-circle-o"></i>Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="background-color: rgba(95, 10, 10, 0.586); border-radius: 10px;">
			<div class="row" >
				<div class="col-12">
					<div class="site-navbar">
						<a href="./index.html" class="site-logo"><img src="./img/leg_logo.png" alt="" width="200" height="50" ></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="./normalHomeSale.php">HOME</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li><a href="contact.html">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/backgr.jpg">
		<div class="container hero-text text-white">
			<h2>Request your service</h2>
			<a href="addprojectsale.php" class="site-btn">Request Now</a>
		</div>
	</section>

	<div class="row">
            <div class="col-md-12">
				<h2>All Lawyers</h2>
                <!-- Lawyers -->
                <div class="row p-3">
                    <div class="col-md-3">
                        <div class="card ml-4" style="width: 22rem;" >
                            <img src="./lawyers/assets/lawyer-1.jpg" class="card-img-top " alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Muskan R Chaudhary </h5>
                              <p class="card-text">has a Experience of more than 
                                Muskan R Chaudhary 6+ year in the category of Divorce cases
                              </p>
                              <a href="#" class="btn btn-primary mb-2">Contact</a>
                              <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width:49%">
                                  49% (success Rate)
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card " style="width: 22rem;">
                            <img src="./lawyers/assets/lawyer-2.jpg" class="card-img-top " alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Niraj J Singh</h5>
                              <p class="card-text">Niraj J Singh has a Experience of more than 7+ year in the category of Property Cases
                              </p>
                              <a href="#" class="btn btn-primary mb-2">Contact</a>
                              <a href="payment.php" class="btn btn-danger mb-2">15 MIN</a>
							  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width:73%">
                                  73% (success Rate)
                                </div>
                              </div>
                              
                            </div>

                          </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 22rem;">
                            <img src="./lawyers/assets/lawyer-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Komal S Singh</h5>
                              <p class="card-text">Komal S Singh has a Experience of more than 12+ year in the category of Defamation Lawsuit 
                              </p>
                              <a href="#" class="btn btn-primary mb-2">Contact</a>
							  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                  45% (success Rate)
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 22rem;">
                            <img src="./lawyers/assets/lawyer-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Pooja M Sharma</h5>
                              <p class="card-text">Pooja M Sharma has a Experience of more than 3+ year in the category of Corporate Cases
                              </p>
                              <a href="#" class="btn btn-primary mb-2">Contact</a>
							  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                  45% (success Rate)
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>

                    <div class="row p-3">
                        <div class="col-md-3">
                            <div class="card ml-4" style="width: 22rem;" >
                                <img src="./lawyers/assets/Lawyer-5.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Rajesh R Yadav</h5>
                                  <p class="card-text">Rajesh R Yadav has a Experience of more than 6+ year in the category of Civil Cases
                                  </p>
                                  <a href="#" class="btn btn-primary mb-2">Contact</a>
								  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                  75% (success Rate)
                                </div>
                              </div>
                                </div>
                              </div>
    
                        </div>
                        <div class="col-md-3">
                            <div class="card " style="width: 22rem;">
                                <img src="./lawyers/assets/lawyer-6.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Mukesh S Khanna</h5>
                                  <p class="card-text">Mukesh S Khanna has a Experience of more than 10+ year in the category of in Family Related Cases like Divorce
                                  </p>
                                  <a href="#" class="btn btn-primary mb-2">Contact</a>
								  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                  80% (success Rate)
                                </div>
                              </div>
                                </div>
                              </div>
    
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 22rem;">
                                <img src="./lawyers/assets/Lawyer-7.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Dimple A Yadav</h5>
                                  <p class="card-text">Dimple A Yadav has a Experience of more than 6+ year in the category of Divorce Issues
                                  </p>
                                  <a href="#" class="btn btn-primary mb-2">Contact</a>
								  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                  70% (success Rate)
                                </div>
                              </div>
                                </div>
                              </div>
    
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 22rem;">
                                <img src="./lawyers/assets/lawyer-8.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Sachin L Lokhande</h5>
                                  <p class="card-text">Sachin L Lokhande has a Experience of more than 4+ year in the category of Civil Cases
                                  </p>
                                  <a href="#" class="btn btn-primary mb-2">Contact</a>
								  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                  60% (success Rate)
                                </div>
                              </div>
                                </div>
                              </div>
    
                        </div>
                        <div class="row p-3">
                            <div class="col-md-3">
                                <div class="card ml-4" style="width: 22rem;" >
                                    <img src="./lawyers/assets/lawyer-9.jpg" class="card-img-top " alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Karishma U Sharma</h5>
                                      <p class="card-text">Karishma U Sharma has a Experience of more than 4+ year in the category of Corporate Cases
                                      </p>
                                      <a href="#" class="btn btn-primary mb-2">Contact</a>
									  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                  80% (success Rate)
                                </div>
                              </div>
                                    </div>
                                  </div>
        
                            </div>
                            <div class="col-md-3">
                                <div class="card " style="width: 22rem;">
                                    <img src="./lawyers/assets/lawyer-10.jpg" class="card-img-top " alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Chandni T Chaturvedi</h5>
                                      <p class="card-text">Chandni T chaturvedi has a Experience of more than  7+ year in the category of White collar crimes
                                      </p>
                                      <a href="#" class="btn btn-primary mb-2">Contact</a>
									  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                  50% (success Rate)
                                </div>
                              </div>
                                    </div>
                                  </div>
        
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width: 22rem;">
                                    <img src="./lawyers/assets/lawyer-11.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Munni L Agarwal</h5>
                                      <p class="card-text">Munni L Agarwal has a Experience of 8+ years in her Category of Divorce</p>
                                      <a href="#" class="btn btn-primary mb-2">Contact</a>
									  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                  70% (success Rate)
                                </div>
                              </div>
                                    </div>
                                  </div>
        
                            </div>
                            <div class="col-md-3">
                                <div class="card" style="width: 22rem;">
                                    <img src="./lawyers/assets/lawyer-12.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Krisha K Pawar</h5>
                                      <p class="card-text">Krisha K Pawar has a Experience of 5+ years in her Category of Civil Cases</p>
                                      <a href="#" class="btn btn-primary mb-2">Contact</a>

									  <div class="progress ">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                  60% (success Rate)
                                </div>
                              </div>
                                    </div>
                                  </div>
        
                            </div>
                    
                </div>
            </div>
        </div>
        

    
    
    
    
    <script src="./js/bootstrap.min.js"></script>


	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="./img/bg_about.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo1.png" alt="">
					<p>We provide you with the best services which is best for your Case and which suits your pocket.</p>
					<div class="social">
						
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>You can contact us here......  </p>
						<p><i class="fa fa-phone"></i>+91 9876543210</p>
						<p><i class="fa fa-envelope"></i>info.legaleagle@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR LAWYERS</h5>
						<ul>
							<li><a href="">Dr. Garg</a></li>
							<li><a href="">Sunil Mittal</a></li>
							<li><a href="">Raj Mehta</a></li>
							<li><a href="">Sima Chauby</a></li>
							<li><a href="">Jignesh Patel</a></li>
						</ul>
						<ul>
							<li><a href="">Bansal Darg</a></li>
							<li><a href="">Pintu Akela</a></li>
							<li><a href="">Khesari Yadav</a></li>
							<li><a href="">Pawan Lal</a></li>
							<li><a href="">Benazir Ansari</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</footer>

	

	<!-- Footer section end -->                               
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>