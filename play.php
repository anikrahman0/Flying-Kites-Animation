<?php 
include 'header.php';
$idm = $video = $release = $category = $catch = $subtitle ='';
$con = mysqli_connect("localhost","root","","flying_kites_animation");

if(isset($_GET['id'])){
	
	$id = valid($_GET['id']);
	$query = mysqli_query($con,"SELECT * FROM videos WHERE id = '$id' and video_privacy='public'  ");
	$num_rows = mysqli_num_rows($query);
	
	  while($a = mysqli_fetch_assoc($query))
	     {
		
            $video = $a['video_name'];
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
	       	
            $idm= valid($a['id']); 

	     }
    if(!empty($id)){
	
			if( $id== $idm && preg_match('/^[0-9]*$/', $id) ){

			}

      else{
		   header('location:index.php'); 
		 
	    }
}
		   
else{
	header('location:index.php');	
}		   
	
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
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
 
  <style type="text/css">
  video{
	 object-fit:fill;   
     
	 
  }

  video::cue {
     background-color:black;
	 font-family:Abel, sans-serif;
     color: #8AFF33;
	 font-size: 18px ;
 
   }
  </style>
</head>

<body>

      <div style="margin-top:20px;">
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-8" style="margin-bottom:60px;">
				
				<video  controls autoplay="autoplay" >
				<source src="<?php echo $catch;?>" type="video/mp4" />
				<source src="<?php echo $catch;?>" type="video/webm" />
				<track src="<?php echo $subtitle;?>" kind="subtitles" srclang="en" label="English" default>
				</video><br>
                <span style="font-family: Abel, sans-serif;color:white;font-size:20px;padding:5px;"><?php echo $video.' | '.$category.' | '.$release;?></span>
				</div>
            <div class="col-md-4">
				
<?php
$con = mysqli_connect("localhost","root","","flying_kites_animation");
$query = mysqli_query($con,"SELECT * FROM videos where video_privacy='public' ORDER BY RAND()");

            echo"<span style='font-size:18px;font-family: Abel, sans-serif;color:white;margin-bottom:15px;text-decoration:underline;'>You might  also like</span>";
			while($a = mysqli_fetch_array($query))
			{
				$image = $a['thumbnail'];
				$id = $a['id'];
				$url = $a['video_storage'];		
				$video = $a['video_name'];
				$release = $a['rel'];
				$director = $a['director'];
				$movie_length = $a ['movie_length'];
				$cast =$a['cast'];
				$category=$a['category'];
				
				echo'<table style="border-collapse: collapse;margin-top:20px;">
				<tr>
				<td style=" border:none;">
				<a href="play.php?id='.$id.'">
				<img width="200" src="'.$image.'">
				</a>
				</td>';
				echo '<td style="font-family: Abel, sans-serif;border:none;color:#808080;padding:7px;" >
				
				<span style="font-size:19px;font-family: Abel, sans-serif;font-size:16px;color:#87D30B;">'.substr($video,0,70).'</span>
				<br>'.$category.'<br>
				Release: '.$release.'<br>
				Length: '.$movie_length.'</br>
				Director: '.$director.'</br>
			
				</td>
				</tr>
				</table>
				<br>';
			}?>	
				</div>
            </div>
        </div>
  </div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
<?php include 'footer.php'?>

