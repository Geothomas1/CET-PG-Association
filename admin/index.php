<?php
include("database_conn/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
swal("Oops!", "Something went wrong!", "error"); }

 
</script>
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus="autofocus" name="username">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
              <label for="inputPassword">Password</label>
            </div>
          </div>
         
          <input type="submit" class="btn btn-primary btn-block" name="login" value="Submit">
        </form>
      
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<?php
session_start();
//error_reporting(0);
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
    
$result="select * from tbl_login where username='$user' and password='$pass'";
$res=mysqli_query($conn,$result);
 $num=mysqli_num_rows($res);
 $num1=mysqli_fetch_array($res);
 
 $id=$num1[0];
 $_SESSION['id']=$id;
 $status=$num1[3];
if($num==1 && $status=='admin')
{
echo $_SESSION['id']=$id;
header('location:login.php');
}
else
{
echo "<script type='text/javascript'> myFunction();</script>";
}
}
?>
</body>

</html>
