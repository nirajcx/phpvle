<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lawyer</title>
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
	
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12 text-lg-right header-top-right">
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
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
					<a href="./index.html" class="site-logo"><img src="./img/leg_logo.png" alt="" width="200" height="50" ></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<?php
							    if($_SESSION['type']=='builder')
                            {
                                echo "<li><a href='LawyerHome.php'>Home</a></li>";
                            }
                            else
                            {
                                echo "<li><a href='normalHomeSale.php'>Home</a></li>";
                            }
                            ?>
							
							
						
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="./img/backgr.jpg">
		<div class="container hero-text text-white">
			<h2>List your services on our website</h2>
			<a href="addprojectsale.php" class="site-btn">List Now</a>
		</div>
	</section>

	<!-- Hero section end -->
	<section class="services-section spad set-bg" data-setbg="img/services-bg.jpg">
		<div class="container">
		<div class="container">
					<div class="row mt-5">
						<div class="col">
							<div class="card mt-5" >
								<div class="card-header" >
									<h2 class="display-6 text-center">Client Requests or enquries</h2>
								</div>
								<div class="card-body">
									<table class="table table-bordered text-center">
										<tr class="bg-dark text-white">
											<td>User ID</td>
											<td>Location</td>
											<td>City</td>
											<td>Case Type</td>
											<td>Description</td>
											<td>Client Budget</td>
											<td>Phone Number</td>

										</tr>
										<tr>
										<?php
										include("indexDB.php");
										$sql = "SELECT * FROM list_services";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){
									?>
											<td><?php echo $row['uid'];?></td>
											<td><?php echo $row['location'];?></td>
											<td><?php echo $row['city'];?></td>
											<td><?php echo $row['complex'];?></td>
											<td><?php echo $row['description'];?></td>
											<td><?php echo $row['rate'];?></td>
											<td><?php echo $row['phone'];?></td>
										</tr>
									<?php   
										}
									?>
											
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-lg-6">				
					<img class="servicesdiv-bg imgboxes" src="./img/servicess.jpg" alt="">
				</div>
				
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>An integrated approach to your issue, timely legal assistance, representation of interests in all judicial instances. </p>
					</div>
					<div class="services">
						<div class="service-item">
						<i class="fa fa-comments"></i>
								<div class="service-text">
								<h5>Consultant Service</h5>
								<p>We provide you with the best services which is best for your family and which suits your pocket.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-users"></i>
							<div class="service-text">
								<h5>Legal Team Hiring</h5>
								<p>As part of our Legal team hiring, our website will provide legal counsel and support for the firm's businesses, 
									advise clients and help the firm remain compliant with laws.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-gavel"></i>
							<div class="service-text">
								<h5>Legal support</h5>
								<p>We guarantee full professional customer service in the declared areas of activity and respect for confidentiality.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Document Verifiation</h5>
								<p>Apply for Document Verification in Website provided by the Concerned Lawyer of the website. Get Information about documents required and guidelines.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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