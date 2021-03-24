
<?php
session_start();
include('dbconfig.php');

	
$message="";
if(isset($_POST['login'])) {
         
        $email=$_POST['email'];
        $password=md5($_POST['password']);
		

	$result = mysqli_query($con,"SELECT * FROM userregistration WHERE email='$email' and password='$password'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["email"] = $row['email'];
	header('Location: userdeshboard.php');
	} else {
	echo "<script>alert('Wrong Email ID or Password!!'); location.href='login.php';</script>";
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

  </head>

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
		  
            <a href="login.php" class="list-group-item active">User Login</a>
			<a href="registration.php" class="list-group-item">User Registration</a>
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
   <h2 align="center"> User Login</h2>
   <p align="center"> Please enter your email and password</p>
   </div>
    <form method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" id="email" name="email" class="form-control border-input"  placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" id="password" name="password" class="form-control border-input"  placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <div class="field-group" align="center" >
		<div><input type="submit" name="login" value="Login" class="btn btn-primary"></span></div>
	</div>
									<br>
									
									<br>
									
                                    <div class="clearfix"></div>
                                </form>
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
