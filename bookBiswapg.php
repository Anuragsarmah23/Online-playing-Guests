<?php
include('dbconfig.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$pgtype=$_POST['pgtype'];
$pgname=$_POST['pgname'];
$seater=$_POST['seater'];
$fee=$_POST['fee'];
$stayf=$_POST['stayf'];

$sql = "INSERT INTO `bookingpg` ( `email`, `pgtype`, `pgname`, `seater`, `fee`, `stayfrom`,`status`)
VALUES ('$email', '$pgtype','$pgname','$seater','$fee','$stayf','PENDING')";

if ($con->query($sql) === TRUE) {
echo "<script>alert('PG Booking Request Have Successfully Sent!!'); location.href='./bookboypg.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}
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
      <!-- /.content-wrapper -->
      <div class="col-lg-9">

          <div class="col-md-12">
					
						<h2 class="page-title">Book PG</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
<?php
	$id=$_GET['id'];
	$sql = "SELECT * FROM pgdetails WHERE id='$id'";
	$result = $con->query($sql);
 	$row = $result->fetch_assoc();
?>									
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
																
<div class="form-group">
<label class="col-sm-2 control-label">Email:</label>
<div class="col-sm-8">
<input type="text" name="email" id="email"  class="form-control" value="<?php require('session.php'); echo "".$_SESSION['email'] ?>" readonly="readonly" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">PG Type:</label>
<div class="col-sm-8">
<input type="text" name="pgtype" id="pgtype"  class="form-control" value="<?php echo $row['pgtype']; ?>" readonly="readonly" >
</div>
</div>	
	<div class="form-group">
<label class="col-sm-2 control-label">PG Name:</label>
<div class="col-sm-8">
<input type="text" name="pgname" id="pgname"  class="form-control" value="<?php echo $row['pgname']; ?>" readonly="readonly" >
</div>
</div>										
<div class="form-group">
<label class="col-sm-2 control-label">Seater :</label>
<div class="col-sm-8">
<input type="text" name="seater" id="seater"  class="form-control" value="<?php echo $row['seater']; ?>" readonly="readonly" >
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Fee :</label>
<div class="col-sm-8">
<input type="text" name="fee" id="fee"  class="form-control" value="<?php echo $row['fee']; ?>" readonly="readonly" >
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Stay From</label>
<div class="col-sm-8">
<input type="date" name="stayf" id="stayf"  class="form-control" required >
</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
        <!-- /.col-lg-9 --></div>
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
