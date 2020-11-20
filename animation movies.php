<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

<style type="text/css">

.zoomin img { 

	-webkit-transition: all 2s ease;
	-moz-transition: all 2s ease;
	-ms-transition: all 2s ease;
	transition: all 2s ease; 
 } 
 
 
.zoomin img:hover 
 {
	opacity:1;
 }


table{

	border:none;
	padding:20px;

}	
	
	
td{
	color:white  ;
	text-align:center;
	background-color:white;
	font-family: 'Julius Sans One', sans-serif;
	font-size:14px;

}

.list_result{
	
	background-color:#101010;
	width:100%;
	height:90%;
	position:fixed; 
    top:55px;
	border-right:none;
	border-bottom:none;
    overflow:hidden;
	left:0px;
	font-size:12px;	

}
.list_child{
	
	font-size:12px;	
	position: absolute;
    top: 0;
	border:none;
	padding:20px;
    bottom: 0;
    margin:0;
	border-top:none;
	border-bottom:none;
    width:100%;
    overflow-y: scroll;
    left:80;

}

a{
	text-decoration:none;
}

.play{
	
	position:fixed;
	opacity:0.6;
	color:white;
}
	
</style>



<div class='list_result'>
<div class='list_child'>
<?php
$image_name= $video_name ='';
$con = mysqli_connect("localhost","root","","video_search");

$query = mysqli_query($con,"SELECT * FROM video ORDER BY id DESC ");

$num_rows = mysqli_num_rows($query);
if(($num_rows)>=1)
{

	while($a = mysqli_fetch_array($query))
	{
		$id = $a['id'];
		 $id = valid($id);
	    $image_name = $a['image'];
		
	    $length = $a['movie_length'];
        $video_name = $a['video_name'];
		 echo'
           <table style="float:left;"  class="container">
		   
 
 
 <tr class="zoomin"><td> <center><a href="play.php?id='.$id.'"><img align="right" class= "play" title ="play" src="logo and icons/383089-48.png"></a><img src="'. $image_name.'"></center></td> </tr>
 <tr ><td style="border-top:none;border-collapse:collapse; 
border-spacing:0;"> ' . $video_name.' </td></tr><tr><td>'. substr($length,0).'</td></tr> 
   

</table> ';
	}
}



?>

</div>
</div>