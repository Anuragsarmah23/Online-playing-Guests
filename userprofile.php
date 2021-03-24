

<!DOCTYPE html>
<html lang="en">

  <head>
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PG</title>

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
        <li class="nav-item">
          <a class="nav-link" href="userdeshboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>          </a>        </li>
        
            
        <li class="nav-item active">
          <a class="nav-link" href="userprofile.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile</span></a>        </li>
        <li class="nav-item">
          <a class="nav-link" href="chang_password.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Change Password</span></a>        </li>
			<li class="nav-item">
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

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="userdeshboard.php">User Dashboard</a>            </li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>

          <!-- Icon Cards-->
         <div class="container-fluid"></div>
									

<div class="panel-body">

					
					<h2 class="page-title">My Profile</h2>
					
					<p>&nbsp;	
					<?php 
					include('dbconfig.php');
					
					require('session.php');
					$sql = "SELECT * FROM userregistration WHERE email='".$_SESSION['email']."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=table>
	<tr>
	<th>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	
	<th>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	<th>Phone No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>".$row["name"]."</td>
		<td>".$row["email"]."</td>
		<td>".$row["address"]."</td>
		<td>".$row["gender"]."</td>
		<td>".$row["phone"]."</td>
		</tr>";
    }
	
    echo "</table>";
	
} else {
    echo "0 results";
}
$con->close();		
?>	   </p>
					<p>
					 <a href="updateuser.php" class="btn btn-info">Update</a></p>
</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
            
          </div>

          <!-- Area Chart Example--><!-- DataTables Example -->
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright � Your Website 2018</span>            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>    </a>

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
