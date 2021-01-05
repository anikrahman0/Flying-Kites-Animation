<?php 
  include ('header.php');
  if(!isset($_SESSION['login_user'])){
     $msg ="Login to go to dashboard";
       $_SESSION['url']= $_SERVER['REQUEST_URI']; 
      header("location:login.php?msg=".$msg);
     
      
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

  <title>My Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="my dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
  <!-- Custom styles for this template-->
  <link href="my dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body  id="page-top">

   <?php include'user-sidebar.php';?>

    
<div id="load_data"></div>
<div id="load_data_msg"></div>


 <?php include ('footer.php') ?>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="my dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="my dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="my dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="my dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="my dashboard/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="my dashboard/js/demo/chart-area-demo.js"></script>
  <script src="my dashboard/js/demo/chart-pie-demo.js"></script>
<script>


</body>

</html>
