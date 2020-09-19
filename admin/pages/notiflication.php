<?php
include("../database_conn/conn.php");
session_start();
$check=$_SESSION['id'];
if($check=='')
{
	
  header("location:../index.php");
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

  <title>Notification</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 

 function myFunction2() { 

swal("Good job!", "Notification Added", "success") }
</script>
    
    
    
    
</head>

<body id="page-top">
    
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../login.php">Admin Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

 <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        <div class="input-group-append">
         
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
       <a class="nav-link" href="../login.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
        
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>ADD</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Admin Screens:</h6>
          <a class="dropdown-item" href="events.php">Events</a>
          <a class="dropdown-item" href="notiflication.php">Notification</a>
         <a class="dropdown-item" href="../qpupload/upload.php">Question Paper</a>
          <a class="dropdown-item" href="#">Projects</a>
            <a class="dropdown-item" href="#">E-book</a>
          <a class="dropdown-item" href="#">E-Direct</a>
            <a class="dropdown-item" href="deleteevent.php">Delete Event</a>
            <a class="dropdown-item" href="deletenotification.php">Delete Notification</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      
        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Notification</div>
      <div class="card-body">
        <form method="post"  enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" required autofocus="autofocus" name="title">
                  <label >Notification Title</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" required name="sd">
                  <label >Short Description(Max 2 Lines)</label>
                </div>
              </div>
            </div>
          </div>
        
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                 <input type="file" name="fileToUpload"/>
                  <label >If File to Upload</label>
                </div>
              </div>
             
            </div>
          </div>
          <input type="submit" name="addevent" class="btn btn-primary btn-block" value="Add Notification">
        </form>
      
      </div>
    </div>
  </div>
<?php
    
    if(isset($_POST['addevent']))
    {
        
        $title=$_POST['title'];//notification title,short dd
        $sd=$_POST['sd'];
        $target_path = "Npdf/";  
       $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
      
       $Filename= basename($target_path);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
        $noti="insert into tbl_notifications(title,sd,npdf) values('$title','$sd','$Filename')";
        $res=mysqli_query($conn,$noti);
        //message code
        if($res)
        {
        echo "<script type='text/javascript'> myFunction2();</script>";
        }
        
        
        
    }
    
    ?>
        
        
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © CET PG ASSOCIATION</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
