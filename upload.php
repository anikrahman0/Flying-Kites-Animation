<?php
session_start();

   if(!isset($_SESSION['login_user'])){
     $msg ="Login to upload video";
      $_SESSION['url']= $_SERVER['REQUEST_URI'];
      header("location:login.php?msg=".$msg);
   }

   else{
     
	 
	  $ds= DIRECTORY_SEPARATOR;  //1
 
      $storeFolder = 'videos';   //2
 
      if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
	  $file= $_FILES['file']['name'];
	  $dir = $storeFolder.'/'.$file;
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
	move_uploaded_file($tempFile,$targetFile); //6
	
    $link = mysqli_connect("localhost", "root", "", "flying_kites_animation");
   
     $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select * from users where email = '$user_check' ");
   
   
	while($a = mysqli_fetch_array($ses_sql))
	{
   $user_id = $a['id'];

   }

   
// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 
// Attempt insert query execution
$sql = 'INSERT INTO videos (user_id, video_name, video_storage, video_privacy) VALUES ("'.$user_id.'", "'.$file.'", "'.$dir.'", "private")';
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
   
     
   }


   }



?> 



