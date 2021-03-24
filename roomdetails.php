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
				  <a href="userdeshboard.php">User Dashboard</a>            
				</li>
				<li class="breadcrumb-item active">Room Details</li>
          </ol>
		  <?php 
				include('dbconfig.php');
				$email=$_SESSION['email'];
				$sql = "SELECT * FROM bookingpg WHERE email='$email'";
				$result = $con->query($sql);
				if($result->num_rows==0){
			?>
			<center><h1>You have NOT Book a PG Yet. Bookings are Still Open. Book a PG Before Its Too Late</h1></center>
			<?php }else{ ?>
			<?php
				$sql1 = "SELECT * FROM userregistration WHERE email='$email'";
				$result1 = $con->query($sql1);
				$row1 = $result1->fetch_assoc();
			?>
			<?php
				$sql2 = "SELECT * FROM bookingpg WHERE email='$email'";
				$result2 = $con->query($sql2);
				$row2 = $result2->fetch_assoc();
			?>
			<center><h1>YOUR BOOKING REQUEST IS
			<?php
				if($row2['status']=="PENDING"){ echo "<font color='#FF9900'> PENDING..</font>"; }
				if($row2['status']=="APPROVED"){ echo "<font color='#00CC00'> APPROVED..</font>"; } 
				if($row2['status']=="REJECTED"){ echo "<font color='#FF0000'> REJECTED..</font>"; } 
			?>
			</h1></center>
		<table class=table table-striped table-bordered>
			<thead>
				<tr>
				<th>NAME</th>
				<th>EMAIL ID</th>
				<th>ADDRESS</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td><?php echo ucwords(strtolower($row1["name"])); ?></td>
				<td><?php echo $row1["email"]; ?></td>
				<td><?php echo $row1["address"]; ?></td>
				</tr>
			</tbody>
		</table>
		
		<table class=table table-striped table-bordered>
			<thead>
				<tr>
				<th>GENDER</th>
				<th>CONTACT NUMBER</th>
				<th>PG TYPE</th>
				<th>PG NAME</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td><?php echo ucwords(strtolower($row1["gender"])); ?></td>
				<td><?php echo $row1["phone"]; ?></td>
				<td><?php echo $row2["pgtype"]; ?></td>
				<td><?php echo ucwords(strtolower($row2["pgname"])); ?></td>				
				</tr>
			</tbody>
		</table>
		
		<table class=table table-striped table-bordered>
			<thead>
				<tr>
				<th>SEATER</th>
				<th>FEE</th>
				<th>STAY FROM</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td><?php echo $row2["seater"]; ?></td>
				<td><?php echo number_format((float)$row2["fee"],2,'.',''); ?></td>
				<td><?php echo date("d/m/Y",strtotime($row2["stayfrom"])); ?></td>
				</tr>
			</tbody>
		</table>

		<?php } ?>

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
