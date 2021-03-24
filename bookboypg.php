<?php
require('session.php');
//$uid=$_SESSION['email'];
//echo "this is ".$uid.".";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">PG Accomodation System</a>

      

      <!-- Navbar Search -->
      
        <div class="input-group">        </div>
   

      <!-- Navbar -->
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="userdeshboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>          </a>        </li>
        
            
        <li class="nav-item">
          <a class="nav-link" href="userprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile</span></a>        </li>
        <li class="nav-item">
          <a class="nav-link" href="chang_password.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Change Password</span></a>        </li>
			<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Book PG</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            
            <a class="dropdown-item" href="bookboypg.php">Boy's PG</a>
            <a class="dropdown-item" href="bookgirlpg.php">Girl's PG</a>
           
          </div>
        </li>
			<li class="nav-item">
          <a class="nav-link" href="roomdetails.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Room Details</span></a>        </li>
			<li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Logout</span></a>        </li>
      </ul>

      <div id="content-wrapper">
<ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
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
                <a href="bookBiswapg.php?id=<?php echo $row['id']; ?>"><?php echo $row['pgname']; ?></a>
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
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    

    <!-- Logout Modal-->
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
  </body>
</html>
