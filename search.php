<?php
include 'header.php'

?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
<style type='text/css'>

body{
	
background-color:#271820;
	
}


a{
	text-decoration:none;
	color:white;
	
}
table{
 
    margin-left:31%;	
}


</style>
</head>

<body>

<br>
<?php

if(isset($_GET['query'])){
$con = mysqli_connect("localhost","root","","flying_kites_animation");

$search = valid($_GET['query']);
$search = mysqli_real_escape_string($con,$search);


if(empty($search))
{
header('location:index.php');
}

else{
if (preg_match("/^[%]*$/",$search)){
	echo "<p style='margin-top:200px;margin-bottom:200px;color:white; font-family: Abel, sans-serif;font-size:25px;margin-left:38%;'>Sorry! <i class='fas fa-frown-open'></i> No result found for your search.<br><br></p>";

}
else{
$query = mysqli_query($con,"SELECT * FROM videos WHERE video_privacy='public' and video_name   LIKE '%".$search."%' OR rel LIKE '%".$search."%' OR director LIKE '%".$search."%' OR cast LIKE '%".$search."%' OR category LIKE '%".$search."%' ");

$num_rows = mysqli_num_rows($query);
if(($num_rows)>=1)
{
	echo "<p style='text-decoration:underline;color:white;font-family: Abel, sans-serif;font-size:20px;margin-left:38%;'>$num_rows results found for $search<br></p>";

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
		
		echo '<table style=" border-collapse: collapse;">
		<tr>
		<td style=" border:none;">
		<a href="play.php?id='.$id.'">
		<img src="'.$image.'">
		</a>
		</td>';
		
		echo '<td style="padding:20px;border:none;color:#808080;font-size:16px;font-family: Abel, sans-serif;" >
		<span style="font-size:20px;color:#87D30B;margin-left:7px;font-family: Abel, sans-serif;">'.substr($video,0,70).'</span>
		<br>&nbsp;&nbsp;Initial release: '. $release.'<br>
		&nbsp;&nbsp;Director: '.$director.'</br>
		&nbsp;&nbsp;Length: '.$movie_length.'</br>
		&nbsp;&nbsp;Cast: '.substr($cast,0,80).'</br>
		&nbsp;&nbsp;Category: '.$category.'
		</td>
		</tr>
		</table>
		<br>';
	}
}
else{
echo "<p style='margin-top:200px;margin-bottom:200px;color:white; font-family: Abel, sans-serif;font-size:25px;margin-left:38%;'>Sorry! <i class='fas fa-frown-open'></i> No result found for your search.<br><br></p>";

}

}
}

}

function valid($data)
{
	
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	$data=htmlentities($data);
	return $data;
	
	
}



?>


</div>
</div>
<?php
include 'footer.php'

?>
</body>
</html>


