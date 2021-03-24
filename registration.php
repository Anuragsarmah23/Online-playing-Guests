<?php

include('dbconfig.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$password=$_POST['password'];

	$sql = "SELECT * FROM userregistration WHERE email='$email'";
	$result = $con->query($sql);
	if($result->num_rows==0)
	{
		$sql = "INSERT INTO userregistration (name, email, address, gender, phone, password)
		VALUES ('$name', '$email','$address','$gender', '$phone','".md5($password)."')";
		if ($con->query($sql) === TRUE) 
		{
			echo "<script>alert('Registration Successfull!!'); location.href='login.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Duplicate Email ID. Please Use a Different Email ID!!'); location.href='bookingdetails.php';</script>";
	}
}
?>

			

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="css/shop-item.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {color: #0066CC}
-->
</style>
</head>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Paying Guest Accomodation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PG Details
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a href="girlpg.php" class="dropdown-item" href="portfolio-1-col.html">Girls PG</a>
                <a href="boypg.php" class="dropdown-item" href="portfolio-2-col.html">Boys PG</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
			<li class="nav-item active">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">&nbsp;</h1>
          <h1 class="my-4">Login</h1>
          <div class="list-group">
		  
            <a href="login.php" class="list-group-item ">User Login</a>
			<a href="registration.php" class="list-group-item active">User Registration</a>
            <a href="admin" class="list-group-item">Admin Login</a>
            
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
<h1 class="my-4">&nbsp;</h1>
<h1 class="my-4">&nbsp;</h1>
          <div class="card mt-4">
            
            <div class="card-body">
              
 
            <div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2 align="center" class="style1"> User Registration </h2>
   <p align="center">&nbsp;</p>
   </div>
    <div class="col-md-12">
					
						

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									
									<div class="panel-body">
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										




<div class="form-group">
<label class="control-label col-sm-2"><strong>Name : </strong></label>
<div class="col-sm-8">
<input type="text" name="name" id="name"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2"><strong>Email : </strong></label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2"><strong>Phone :</strong></label>
<div class="col-sm-8">
<input type="text" name="phone" id="phone" maxlength="10"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2"><strong>Address :</strong></label>
<div class="col-sm-8">
<input type="text" name="address" id="address"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2"><strong>Gender : </strong></label>
<div class="col-sm-8">
<select name="gender" id="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-2"><strong>Password: </strong></label>
<div class="col-sm-8">
<input type="password" name="password" id="password"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-2"><strong>Confirm Password : </strong></label>
<div class="col-sm-8">
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
</div>
</div>
						



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
    </div>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
             
            </div>
          
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
	</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
