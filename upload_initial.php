<?php
session_start();

   if(!isset($_SESSION['login_user'])){
     $msg ="Login to upload video";
      $_SESSION['url']= $_SERVER['REQUEST_URI'];
      header("location:login.php?msg=".$msg);
     
      
   }

 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>upload movie</title>
    <link rel="stylesheet" href="upload_assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom_input/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="custom_input/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="custom_input/css/component.css" />
    <link rel="stylesheet" href="upload_assets/css/styles.css">
    <link href="upload_assets/css/dropzone.css" rel="stylesheet">
    <script src="upload_assets/js/dropzone.js"></script>
  

    <style type="text/css">
    body {
    background-color: #f2f7fb
}

.mt-100 {
    margin-top: 100px
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
    box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.card .card-header {
    background-color: transparent;
    border-bottom: none;
    padding: 18px;
    border-bottom:1px solid #DCDCDC;
}

.card .card-header h5:after {
    content: "";
    background-color: #d2d2d2;
    width: 101px;
    height: 1px;
    position: absolute;
    bottom: 6px;
    left: 20px
}

.card .card-block {
    padding: 1.25rem
}

.dropzone.dz-clickable {
    cursor: pointer
}

.dropzone {
    min-height: 150px;
    border: 1px solid rgba(42, 42, 42, 0.05);
    background: rgba(204, 204, 204, 0.15);
    padding: 20px;
    border-radius: 5px;
    -webkit-box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1);
    box-shadow: inset 0 0 5px 0 rgba(43, 43, 43, 0.1)
}

.m-t-20 {
    margin-top: 20px
}

.btn-primary,
.sweet-alert button.confirm,
.wizard>.actions a {
    background-color: #4099ff;
    border-color: #4099ff;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all ease-in .3s;
    transition: all ease-in .3s
}

.btn {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 15px;
    cursor: pointer
}
    </style>
</head>

<body style="background-color: #271820;">
  

    <div class=" d-flex justify-content-center m-4" >
    <div class="col-md-10">
        <div class="card">
            <div  class="card-header">
                <h5>Upload movies<a href="index.php" style="float:right;text-decoration:none;font-size:24px;color:grey;">×</a></h5>
            </div>
          <form action="upload.php" method="POST" enctype="multipart/form-data"  id="dzone" class="dropzone dz-clickable">
            <div class="dz-default dz-message">
             <div class="card-block">
                 <p class="text-center">&nbsp;<img src="logo and icons/128.png" width="130" height="130" style="margin-bottom: 4px;margin-top:50px;"></p>
                <p class="text-center">Drag and drops video files to upload</p>
                 <p style="margin-top:-13px;font-size:13px;color:grey;" class="text-center">Your cancled videos will be in darft until you publish the  video.</p>
              

                <p style="margin-top:53px;font-size:14px;color:grey;" class="text-center">By submitting your videos to Flying Kites Animation, you acknowledge that you agree with the  <span style="color:#FF0053;">Terms and  Services</span> and <span style="color:#FF0053;">Community Guidelines.</span></p>
                  <p style="margin-top:-14px;margin-bottom:24px;font-size:13px;color:grey;" class="text-center">Please be sure not to violate others copyright and privacy rights. <span style="color:#FF0053;">Learn more</span></p>
               
       
            </div>
            </form>
        </div>
    </div>
    
</div>
     
     <script>



     Dropzone.options.dzone = {
        paramName: "file",
        acceptedFiles: "video/mp4",
        maxFilesize: 1024,
        maxFiles:1,
  },
     </script>
    <script src="upload_assets/js/jquery.min.js"></script>
    <script src="upload_assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="custom_input/js/custom-file-input.js"></script>
</body>

</html>