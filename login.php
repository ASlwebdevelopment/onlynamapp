<?php
session_start();
include("login_class.php");
include("connect.php");

$email="";
$password="";




if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$login= new Login();
$result= $login->evaluate($_POST);


if($result !="")
{

  echo "<br><div style='text-align:center;font-size:15px;color:black;background-color:grey;display:border-box,width:100%;height:250px;'><br><br><br>";
  echo "the following errors occured<br>";
echo$result;
echo "</div>";
}else{
   header("Location: profile.php");
   die;
}


$email =$_POST['email'];
$password=$_POST['password'];



}


?>


<!DOCTYPE html>
<html class="gradient">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OnlyNam</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css
">

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container">
    <div class="navbar-brand"><h1>Only<span class="text-danger">Nam</span></h1></div>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active " aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="signup.php">Sign Up</a>
        <a class="nav-link" href="#">About</a>

      </div>
    </div>
  </div>
</nav>
<header class="page-header  gradient">

  <div class="container pt-3">

    <div class="row align-items-center justify-content-center">

      <div class="col-md-5">
     
<video autoplay loop muted plays-inline class="back-video" style="width: 100%;border-radius: 15px;padding-top: 5px;">
  <source src="vid.mp4" type="">
</video>

    </div>
      <div class="col-md-5">
    
<form method="post">
  <div class="xs-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input name="email" value="<?php echo $email?>" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="xs-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input name="password" value="<?php echo $password?>" type="Password" class="form-control" id="exampleFormControlInput1">
</div>
<div style="margin-bottom: 20px;margin-top: 20px;">
<button type="submit" id="button" class="btn btn-warning">Log in</button></div></form>

 
</div>

</div></div>
      


    </div>
    

  </div>

</header>






<footer class="footer" >
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <h4 class="text-reset fw-bold" href="#">ASL Web Development</h4>
  </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>