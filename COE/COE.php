<?php
	$dbhost = 'localhost';
	$dbuser = 'admin';
	$dbpass = 'cbit';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'cbitdb');
	session_start();
	if(!isset($_SESSION['COE'])){
		echo "<script language='javascript'>window.location='../index.php';</script>";
	}
   
	if(! $conn )
	{
		echo "
			<div class='alert alert-danger'>
				<strong>Not connected to database." . mysqli_error();"</strong>
			</div>";
	}										
?>
<!--***********************************************-->
<!--HTML Code-->
<!DOCTYPE html>
<html lang='en'>
	<head>
	  <title>COE</title>
	  <meta charset='utf-8'>
	  <meta name='viewport' content='width=device-width, initial-scale=1'>
	  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'>
	</head>
	<body>
		<div class='container pt-2'>
		  	<div class='row'>
		  		<div class='col-sm-2'>
		  		</div>
		  		<div class='col-sm-8'>
		  			<center>
			  			<!--h5 class='text-primary'> Chaitanya Bharathi Institute of Technology(Autonomous)<br>
			  			<small class='text-info'>Accredited by NBA & NAAC, Approved by A.I.C.T.E., New Delhi, Affliated to Osmania University<br> Chaityana Bharathi(PO),Kokapeta(village), Gandipet, Hyderabad -500075, Telangana, India</small></h5-->
			  			<img class='img-fluid' src='../images/header.jpg'>
		  			</center>
		  		</div>
		  		<div class='col-sm-2 pl-5'>
		  			<a href='../index.php' class='btn btn-danger btn-sm'>Logout</a>
		  		</div>
		  	</div>
		</div>
		<br>
		<div class='container pt-3'>
			<div class='row'>
			  	<div class='col-sm-12'>
			  		<ul class='nav nav-tabs nav-justified'>
					    <li class='nav-item'>
							<a class='nav-link active ' href='principal.php'>Add Marks</a>
						</li>
						<!--li class='nav-item'>
							<a class='nav-link ' href='placement_details.php'>Admission Details</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link ' href='staff_details.php'>Mid Marks</a>
						</li-->
					</ul>
					<div class='tab-content'>
						<div class='container tab-pane active'><br>
							
	    				</div>
	    			</div>
				</div>
			</div>
			<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js'></script>
			  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js'></script>
			</body>
		</html>
?>