<?php
include 'header.php';

$error ='';
if (isset($_POST['submit']))
	{	  

if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Email or password is invalid";
}
else{
$email = stripcslashes($_POST['email']);
$password = stripcslashes($_POST['password']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$password = md5($password);


$sql = "SELECT email FROM users WHERE email='$email' and Password='$password'  "; 
 
$query = mysqli_query($conn,$sql);

$row_num = mysqli_num_rows($query);

 if ( $row_num > 0)
{

$_SESSION['login_user']= TRUE;
$_SESSION['login_user']= $email;
if(isset($_SESSION['url'])){
header('location:'.$_SESSION['url']);
}
else{
    header('location:my dashboard.php');
}
  }

  else
  {
$error= "There is no user with the email and password";
}
}
}
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="login_assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login_assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="login_assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="login_assets/css/styles.css">
</head>

<body>
    <div class="login-clean" style="background-color:#271820;">
       <div class="text-center text-warning mb-2"> <?php if(isset($_GET['msg'])) echo $_GET['msg'];?></div>
        <form action="login.php" method="POST">
       
            <div style="text-align:center;margin-bottom:30px;">
			 
			<img src="logo and icons/user-64.png">
			<div style="color:red;text-align:center;margin-top:5px;"><?php echo $error;?></div>
			</div>
			
            <div class="form-group">
			<input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div style="text-align:center;margin-bottom:30px;" class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password">
			</div>
            <div class="form-group">
			<button style="background-color:#FF0053;" name="submit" class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
			</form>
           </div>
    <script src="login_assets/js/jquery.min.js"></script>
    <script src="login_assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<?php

include 'footer.php';
?>