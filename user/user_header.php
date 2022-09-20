<?php
session_start();

if (!isset($_SESSION['user'])) {
echo "<script>location.href='../gen/candidate_login.php';</script>";
}else {
	$user=$_SESSION['user'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Candidate </title>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/mdb.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/zf-6.4.3/dt-1.10.22/r-2.2.6/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/zf-6.4.3/dt-1.10.22/r-2.2.6/datatables.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/mdb.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>


<body class="rgba-grey-slight" oncontextmenu="return true;">

<div style="min-height:91vh;">



	<nav class="navbar navbar-expand-lg navbar-light sticky-top  px-4 border-bottom" style="background:white; box-shadow: 0px 0px 20px 2px white;">

		<div class="container">
			<a class="navbar-brand" href="#"><img src="../img/icon/logo.png" style="height: 50px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav h5 mx-auto">
					<li class="nav-item  mt-1 mx-2">
						<a class="nav-link text-dark" href="../gen/index.php">Home </a>
					</li>
					<li class="nav-item active mt-1 mx-2">
						<a class="nav-link text-color" href="index.php">Dashboard</a>
					</li>
					<li class="nav-item dropdown  mt-1">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Job Management
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#"><span class="h6">Find Jobs</span></a>

							<a class="dropdown-item" href="#"><span class="h6">Applied Jobs</span></a>

						</div>
					</li>


					<li class="nav-item  mt-1 mx-2">
						<a class="nav-link text-dark" href="myprofile.php">My Profile</a>
					</li>
					<li class="nav-item  mt-1 mx-2">
						<a class="nav-link text-dark" href="changepassword.php">Change Password</a>
					</li>
					<li class="nav-item  mt-1 mx-2">
						<a class="nav-link text-dark" href="logout.php">Logout</a>
					</li>





				</ul>
				<center class="h6 font-weight-bold text-color">
				Profile:-	<a href="#" style="text-decoration:none;" class="text-color "><?php echo $_SESSION['user']; ?></a>
				</center>

			</div>
		</div>


	</nav>
