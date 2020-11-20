<?php

include ('header.php');
?>


<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="index_assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="index_assets/fonts/fontawesome-all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="index_assets/css/styles.css">

<link rel="shortcut icon" href="" type="image/x-icon">
<link rel="icon" href="logo and icons/favicon.ico">
<style type="text/css">


</style>
 <title>Flying Kites</title>
 </head>
 <body style="background-color:#512C38;">
 <?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flying_kites_animation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from videos where video_privacy ='public' ORDER BY id DESC ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo'  <br> <div style="margin-top:5px;padding: 10px;">
        <div class="container">
            <div class="row">';
  while($a = $result->fetch_assoc()) {
	  
	    $image = $a['thumbnail'];
		$id = $a['id'];
        $url = $a['video_storage'];		
		$video = $a['video_name'];
		$release = $a['rel'];
		$director = $a['director'];
		$movie_length = $a ['movie_length'];
		$cast =$a['cast'];
		$category=$a['category'];
		
		
    echo'          
			       <div class="col-md-12 col-lg-3 col-sm-2" style="margin-bottom: 20px;">
                    <div class="card-group">
                        <div class="card" ><a href="play.php?id='.$id.'"><img class="card-img-top w-100 d-block" data-bs-hover-animate="bounce" src="'.$image.'"></a>
                            <div class="card-body" >
                                <h6 class="text-center card-title" style="color: black;font-weight:bold;font-size:18px;font-family:Abel, sans-serif;">'.$video.'</h6>
                                <p class="text-center card-text" style="background-color: rgba(99,64,64,0);color: #FF0053;font-family:Abel, sans-serif;">&nbsp;<strong>'.$category.'</strong><button class="btn btn-sm shadow-none" type="button" style="background-color: rgba(148,152,156,0);"><a href="play.php?id='.$id.'"><i class="fas fa-play-circle" style="background-color: rgba(255,255,255,0);color: #FF0053;font-size: 18px;"></i></a></button></p>
                                <p class="text-center card-text">
								              <button class="btn btn-primary btn-sm shadow-none" type="button" style="font-family:Abel, sans-serif;margin-right: 5px;filter: sepia(0%);color: rgb(255,255,255);">'.$release.'</button><button class="btn btn-primary btn-sm" type="button" style="font-family:Abel, sans-serif;color: rgb(255,255,255);"><i class="fas fa-clock"></i> '.$movie_length.'</button></p>
                            </div>
                        </div>
                    </div>
                </div>
';	
	
	  
  }
 echo'</div>
      </div>
      </div><br>';
} else {
  echo "";
}
$conn->close();


?>
 <script src="index_assets/js/jquery.min.js"></script>
<script src="index_assets/bootstrap/js/bootstrap.min.js"></script>
<script src="index_assets/js/bs-animation.js"></script>

</body>
</html>
<?php

include 'footer.php'
?>
