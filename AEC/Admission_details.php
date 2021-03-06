<?php
	$dbhost = 'localhost';
	$dbuser = 'admin';
	$dbpass = 'cbit';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,'cbitdb');
	session_start();
	if(!isset($_SESSION['AEC'])){
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
	  <title>AEC</title>
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
							<a class='nav-link' href='AEC.php'>Attendance</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link active ' href='Admission_details.php'>Admission Details</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link ' href='Mid_marks.php'>Mid Marks</a>
						</li>
					</ul>
					<div class='tab-content'>
						<div class='container tab-pane active'><br>
							<div class='container'>
									<form>
										<table class='table'>
											<tbody>
												<tr>
													<th>
														<label for='admission_number'>Admission Number</label>
													</th>
													<td><input type="text" id="admission_number" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>Roll Number</label>
													</th>
													<td><input type="text" name="rollnumber" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>First Name</label>
													</th>
													<td><input type="text" name="Fname" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>Last Name</label>
													</th>
													<td><input type="text" name="Lname" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>Phone Number</label>
													</th>
													<td><input type="text" name="Phno" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>Email ID</label>
													</th>
													<td><input type="text" name="email_id" class='form-control'></td>
												</tr>
												<tr>
													<th>
														<label>Program</label>
													</th>
													<td>
														<select class="form-control" id="program">
														    <option selected="selected">BE</option>
														    <option>MCA</option>
														    <option>MBA</option>
														</select>
													</td>
												</tr>
												<tr>
													<th>
														<label>Branch</label>
													</th>
													<td>
														<select class='form-control'>
															<option>CSE</option>
															<option>ECE</option>
															<option>IT</option>
														</select>
													</td>
												</tr>
												<tr>
													<th>
														<label>Section</label>
													</th>
													<td>
														<select class='form-control'>
															<option>1</option>
															<option>2</option>
															<option>3</option>
														</select>
													</td>
												</tr>
												<tr>
													<th>
														<label>Photo</label>
													</th>
													<td><input class='form-control btn btn-outline-success' type="file" name="photo"></td>
												</tr>
											</tbody>
										</table>
										<hr>
										<center><input type="submit" value="Submit" class="btn btn-outline-success pt-2 pb-2 pl-5 pr-5"></center>
										<hr>
									</form>