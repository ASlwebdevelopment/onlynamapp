<?php
session_start();



include("login_class.php");
include("connect.php");
include("user_class.php");
include("post_class.php");

//check if user is loged in 

//isset($_SESSION['userid'])&& 
$login=new Login();
$user_data=$login->check_login($_SESSION['userid']);

//-----------------posting-------------------

if($_SERVER['REQUEST_METHOD']== "POST")
{

  print_r($_POST);
  print_r($_FILES);
}
?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
   <title> My Profile  | Onlynam</title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">




   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
     
        <div class="logo_name">Only<span style="color: red;">Nam</div></span>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="home.php">
          <i class='bx bx-home-alt'></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="profile.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Profile</span>
       </a>
       <span class="tooltip">Profile</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-bell' ></i>
         <span class="links_name">Notifications</span>
       </a>
       <span class="tooltip">Notifications</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-plus-circle' ></i>
         <span class="links_name">New Post</span>
       </a>
       <span class="tooltip">Create Post</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-user-plus' ></i>
         <span class="links_name">Friends</span>
       </a>
       <span class="tooltip">Friends</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-wallet' ></i>
         <span class="links_name">Wallet</span>
       </a>
       <span class="tooltip">Wallet</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="image/1.jpg" alt="profileImg">
           
          <div class="name_job">
             <div class="name"><?php echo $user_data['first_name'] ." ". $user_data['last_name']?></div>
             <a href="#"class="job">Balance: N$1500.00</a>
           </div>
         </div>
         
        <a href="logout.php"> <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>

<!--------------------------------Fucking Profile----------------------------------------->
<form method="post" enctype="mutlipart/form-data">
<div class="profile-container ">
  <!---<img src="images/cover.png" class="cover-img">--->
  <div class="profile-detail">


    <input type="file" name="Choose_profile">
       <input  type="submit" value="Submit">
    </div></div></form>
<!--------------------------------end of profile------------------------------------------>
 
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>