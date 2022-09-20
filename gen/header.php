<?php

 ?>
<html>
<head>
	<title></title>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/mdb.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/mdb.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <script src="../js/owl.carousel.js"></script>

<script>

$(document).ready(function(){

  $('.owl-carousel').owlCarousel({

    margin:10,

    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
});</script>
</head>


<body class="rgba-grey-slight">


	<nav class="navbar navbar-expand-lg navbar-light sticky-top  px-4 border-bottom" style="background:white; box-shadow: 0px 0px 20px 2px white;">

		<div class="container">
			<a class="navbar-brand" href="#"><img src="../img/icon/logo.png" style="height: 50px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav h5 " style="margin: 0px auto;">

					<li class="nav-item active mt-2">
						<a class="nav-link text-color" href="index.php">Home </a>
					</li>
					<li class="nav-item  mt-2">
						<a class="nav-link text-dark" href="#">Find Jobs</a>
					</li>
					<li class="nav-item  mt-2">
						<a class="nav-link text-dark" href="#">Companies</a>
					</li>


					<li class="nav-item dropdown  mt-2">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Registration
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Recruiter Registration</a>
							<a class="dropdown-item" href="../gen/candidate_register.php">Candidate Registration</a>

						</div>
					</li>

					<li class="nav-item dropdown  mt-2">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login
						</a>
						<div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Recruiter Login</a>
							<a class="dropdown-item" href="../gen/candidate_login.php">Candidate Login</a>

						</div>
					</li>
					<li class="nav-item  mt-2">
						<a class="nav-link text-dark" href="contactus.php">Contact Us</a>
					</li>




					<div class="ml-5">
						<a href="../gen/candidate_register.php" class="btn bg-color text-light px-3 mr-3" style="float: right;"><span class="fa fa-user mr-2 py-2"></span>Sign Up</a>
						<a href="../gen/candidate_login.php" class="btn btn-3 px-3 mr-2" style="float: right;"><span class="fa fa-plus py-2 mr-2"></span>Login</a>

					</div>

				</ul>

			</div>
		</div>


	</nav>
