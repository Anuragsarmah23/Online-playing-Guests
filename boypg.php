<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

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
			<li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
 <h1 class="my-4">&nbsp;</h1>
      <h1 class="my-4">PG
       </h1>
	   <div class="row">
	   	<?php 
			include('dbconfig.php');
			$sql = "SELECT * FROM pgdetails WHERE pgtype='boypg'";
			$result = $con->query($sql);
 			while($row = $result->fetch_assoc()) {
			?> 
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a><img class="card-img-top" src="admin/pgimage/<?php echo $row['pgimage']; ?>" alt=""></a>
            <div class="card-body">
			<h4 class="card-title">
                <a href="login.php?id=<?php echo $row['id']; ?>"><?php echo $row['pgname']; ?></a>
              </h4>
              <h4 class="card-title">
                <?php echo $row['pgtype']; ?>
              </h4>
              <p class="card-title">Location - <?php echo $row['pgaddress']; ?> </p>
              <p class="card-title">Fee : <?php echo $row['fee']; ?></p>
              <p class="card-title"><?php echo $row['seater']; ?> Seater
              
            </div>
          </div>
        </div>
        <?php } ?>
       
    </div>
	</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
