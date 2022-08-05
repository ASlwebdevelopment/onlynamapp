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
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Home | OnlyNam</title>
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


 <div class="container">
    <div class="left-sidebar"></div>
    <div class="main-content">
      <div class="story-gallary">

        <div class="story story1">
          <img src="images/upload.png">
          <p>Post Story</p>
        </div>

        <div class="story story2">
          <img src="image/male.jpg" width="50" height="50" style="height: 45px;">
          <p>lurenzo</p>
        </div>

        <div class="story story3">
          <img src="image/male.jpg" width="50" height="50" style="height: 45px;">
          <p>lurenzo</p>
        </div>

        <div class="story story4">
          <img src="image/male.jpg" width="50" height="50" style="height: 45px;">
          <p>lurenzo</p>
        </div>

        <div class="story story5">
          <img src="image/male.jpg" width="50" height="50" style="height: 45px;">
          <p>lurenzo</p>
        </div>


      </div>

       <div class="write-post-container">

  <div class="user-profile">
    <img src="image/1.jpg" width="50" height="50
    ">
    <div>
      <p><?php echo $user_data['first_name']?></p>
      <small>public<i class='bx bx-world'></i></small>
    </div>
  </div>

  <div class="post-input-container">

    <textarea rows="3" placeholder="Compose new post"></textarea>
    

    <div class="add-post-links">
      <a href="#"><img src="live-video.png">Price</a>
       <a href="#"><img src="upload-image.png">Photo/Video</a>
        <a href="#"><img src="feeling.png">Feeling/Activity</a>
    </div>
  </div>
</div>

<div class="post-container">
  <div class="post-row">
 <div class="user-profile">
    <img src="image/1.jpg" width="50" height="50
    ">
    <div>
      <p>Mpho</p>
      <span>june 6 2022, 16:02</span>
    </div>
  </div>    
    <a href="#"><i class='bx bx-dots-vertical-rounded'></i></a>
  </div>
 
  <p class="post-text">Buy my content now for limited time only 1 pic=N$50 1 vid=N$100 <a href="#">#Nudes</a> <a href="#">#OnlyNam</a></p>
  <img src="post.jpg" class="post-img" id="test18">
  

  <div class="post-row">
    <div class="activity-icons">
     <div><img src="like.png">6400</div>
     <div><img src="comment.png">267</div>
     <div><img src="live-video.png"><button style="background: white;
color: #626262;
cursor: pointer;border-radius: 5px; " onClick="test()">Tip N$100</button></div>
     






      
    </div>

 <div class="post-profile-icon">
        <img src="image/1.jpg" >
        <a href="#"><i class='bx bx-down-arrow'></i></a>
      </div>

</div>
  </div>



<div class="post-container">
  <div class="post-row">
 <div class="user-profile">
    <img src="image/male.jpg" width="50" height="50
    ">
    <div>
      <p>Lurenzo</p>
      <span>june 7 2022, 13:40</span>
    </div>
  </div>    
    <a href="#"><i class='bx bx-dots-vertical-rounded'></i></a>
  </div>
 
  <p class="post-text">😍<a href="#"></a> <a href="#">#OnlyNam</a></p>
  <img src="image/female.jpg" class="post-img-1" >
  

  <div class="post-row">
    <div class="activity-icons">
     <div><img src="like.png">12</div>
     <div><img src="comment.png">1</div>
     <div><img src="live-video.png"><button style="background: white;
color: #626262;
cursor: pointer;border-radius: 5px; " onClick="test()">Tip N$10</button></div>
     






      
    </div>

 <div class="post-profile-icon">
        <img src="image/male.jpg" >
        <a href="#"><i class='bx bx-down-arrow'></i></a>
      </div>

</div>
  </div>


    </div>


    <div class="right-sidebar">
     
     <div class="sidebar-title">
       <h4>Events</h4>
       <a href="#">See all</a>
     </div>
<div class="event">
<div class="left-event">
  <h3>25</h3>
  <span>June</span>
</div>
<div class="right-event">
  <h4>Winter Party</h4>
  <p><i class='bx bx-location-plus'></i>Mandela square</p>
  <a href="#">More info</a>
</div>
</div>


<div class="event">
<div class="left-event">
  <h3>01</h3>
  <span>November</span>
</div>
<div class="right-event">
  <h4>festival</h4>
  <p><i class='bx bx-location-plus'></i>Windhoek,NA</p>
  <a href="#">More info</a>
</div>
</div>



<div class="sidebar-title">
       <h4>Advertisement</h4>
       <a href="#">Close</a>
     </div>
<img src="image/windhoek.jpg" class="site-ads">


  </div>    
 


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

<script>
        function test(){
document.getElementById("test18").style.filter="blur(0)"
        }
      </script>

  

</body>
</html>