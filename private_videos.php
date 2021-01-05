<?php 
  include ('header.php');
  if(!isset($_SESSION['login_user'])){
     $msg ="Login to go to view this page";
       $_SESSION['url']= $_SERVER['REQUEST_URI']; 
      header("location:login.php?msg=".$msg);
     
      
   }
   
   else{
	   
	   $con = mysqli_connect("localhost","root","","flying_kites_animation");
	   
	   $user_check = $_SESSION['login_user'];
       $ses_sql = mysqli_query($con,"select * from users where email = '$user_check' ");
   
   
	   while($a = mysqli_fetch_array($ses_sql))
	   {
        $user_id = $a['id'];
       }
	   
       $query = mysqli_query($con,"SELECT * FROM videos  where user_id = '$user_id' and video_privacy='private' order by id desc ");
	   $num_rows = mysqli_num_rows($query);
	
	
   }
 function valid($data)
{	
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	$data=addslashes($data);
	return $data;
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
    <link  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="my dashboard/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="my dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body  id="page-top">
  <!-- Page Wrapper -->
  <div  id="wrapper">
   <?php include'user-sidebar.php';?>
    <!-- End of Sidebar -->
  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content" style="">

        <!-- Topbar --> 

        <!-- End of Topbar --        <!-- Begin Page Content -->
        <div class="container-fluid">

          
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-seconadary">Private videos</h6>
                        </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Cast</th>
                                            <th>Release</th>
                                            <th>Director</th>
                                            <th>Movie Length</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php
									     	$allowedlimit = 15;

										while($a = mysqli_fetch_assoc($query))
										{
                      $video = substr($a['video_name'] ,0 , $allowedlimit);
                      
                      $video = $video.'......';
											$image = $a['thumbnail'];
											$id = $a['id'];
											$url = $a['video_storage'];		
											$release = $a['rel'];
											$director = $a['director'];
											$movie_length = $a ['movie_length'];
											$cast =$a['cast'];
											$category=$a['category'];
											$catch = valid($a ['video_storage']);
											$subtitle = valid($a ['subtitle']);
											$video_privacy =  valid($a ['video_privacy']);      
                      $idm= valid($a['id']); 
                        echo'
                        <tr>
                          <td><img src="'.$image.'"/></td>
                          <td>'.$video.'</td>
                          <td>'.$category.'</td>
                          <td>'.$cast.'</td>
                           <td>'.$release.'</td>
                           <td>'.$director.'</td>
                          <td>'.$movie_length.'</td>
                           <td><a href="video_edit.php?video-id='.$id.'&&user-id='.$user_id.'"><i style="color:#77B230;" class="fas fa-edit"></i></a>
                            &nbsp;<a style="text-decoration:none;" href=""> <i style="color:red;" class="fas fa-trash"></i></a></td>
                        </tr>';
                      }               
                      
                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
      

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
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
    <script src="my dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="my dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="my dashboard/js/demo/datatables-demo.js"></script>
   <script>
$(document).ready(
  function(){
    $('table').DataTable();

  }
);
</script>

</body>

</html>
