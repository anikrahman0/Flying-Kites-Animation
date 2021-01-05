<?php 
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flying_kites_animation";
$user = $email = '';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_SESSION['login_user'])){
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from users where email = '$user_check' ");
   
   
	while($a = mysqli_fetch_array($ses_sql))
	{
   $user = $a['name'];
   
   $email = $a['email'];
   $id = $a['id'];
   }
}
 
?>

<!doctype html>
<html lang="en">
<head>

 <title>Flying Kites</title>
<style type="text/css">

#top input[type=search]{
  padding-left:4px;
  width:300px; 
  font-family: Abel, sans-serif;
  border-top-left-radius:2px;
  border-bottom-left-radius:2px;
  border-top-right-radius:0px;
  border-bottom-right-radius:0px;
  box-shadow:none;
  outline:0;
  height:38px;
  border:2px solid white;
  
}
#search{
  border-top-left-radius:0px;
  border-bottom-left-radius:0px;
  color:white;
  background-color:#FF0054;
}
.dropbtn {
 background-color:transparent;
  color: white;
  padding: 13px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
a{
   color:black;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #E7E7E7; text-decoration: none;color:black;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#FF0052;color:white;}
</style>
 </head>
<body style="background-color:#261820;">
<nav style="background-color:#4D273B;" class="navbar navbar-expand-md navbar-dark navbar-fixed scrolling-navbar" >
 <a style="color:white;" class="navbar-brand " href="index.php">
  
 <img class= 'logo' width="35" height="35" src='logo and icons/kite1.png'>
 Flying Kites Animation
</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSC">
 <span class="navbar-toggler-icon"></span>
 </button> 
<div class="collapse navbar-collapse" id="navSC">
 <ul class="navbar-nav mx-auto"> 
 
<li class="nav-item ">
   <form action="search.php" method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control"  value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>" name="query" type="search" placeholder="Search videos" aria-label="Search">
      <button id="search" class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</li>	
	
 </ul>
	
 <ul class="navbar-nav"> 
 <li class="nav-item">
<?php
if(!isset($_SESSION['login_user'])){
     
 echo'<a href="login.php" class="nav-link ml-2 mr-2" style="color:#FF0054;"><img src="logo and icons/user-64.png" style="border-radius:50%;color:#FF0054;" width="35" height="35"></a>';
}
else{
   echo'<div class="dropdown">
  <button class="dropbtn">'.$user.'</button>
  <div class="dropdown-content">
    <a href="my dashboard.php"><i class="fas fa-video"></i> &nbsp;My Videos</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> &nbsp;Logout</a>
    
  </div>
</div>';

}
?>

 </li>
<li class="nav-item">
 <a href="upload_initial.php" class="nav-link ml-2 mr-2" style="color:#FF0054;"><img src="logo and icons/48.png" style="border-radius:50%;color:#FF0054;" width="35" height="35"></a> 
</li>
 </ul>
</div> 
</nav>

</body>
</html>
