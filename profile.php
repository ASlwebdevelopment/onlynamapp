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
$post = new Post();
$id= $_SESSION['userid'];
$result = $post->create_post($id,$_POST);

if($result=="")
{
  header("Location:profile.php");
die;
}else
{

 echo "<br><div style='text-align:center;font-size:15px;color:black;background-color:grey;display:border-box,width:100%;height:250px;'><br><br><br>";
  echo "the following errors occured<br>";
echo$result;
echo "</div>";

}
}

//-------------retrieve post------------

$post = new Post();
$id= $_SESSION['userid'];
$posts = $post->get_post($id);

//collect friends 
$user = new User();
$id= $_SESSION['userid'];
$friends = $user->get_friends($id);


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

<div class="profile-container ">
  <!---<img src="images/cover.png" class="cover-img">--->
  <div class="profile-detail">
    <div class="pd-left">
      <div class="pd-row">
        <span>
        <img src="image/1.jpg" class="pd-img"><br>
        <a style="text-decoration: none;padding-left: 20px;font-size: 12px;color: #1876f2;" href="profile_image.php">Change<i class='bx bx-edit-alt' ></i></a>
      </span>
         <div>
           <h3><?php echo $user_data['first_name'] ." ". $user_data['last_name']?></h3>
           <p>1.5M Friends - 700k Mutual</p>
           
           <img src="images/member-1.png">
           <img src="images/member-2.png">
           <img src="images/member-3.png">
           <img src="images/member-4.png">
             
         </div>
      </div>
    </div>
    <div class="pd-right">
      <button type="button"><img src="edit.png">Edit profile</button>
      <button type="button"><img src="plus.png">Add to story</button>
      
    </div>

  </div>
<div class="more-buttons">

  <a href="Profile.php">Posts</a>
  <a href="#">About</a>
  <a href="#">Friends</a>
  <a href="#">Photos</a>
  <a href="#">Videos</a>

  <a href="#"><img src="images/more.png"></a>
    </div>
<!-------------------------------closing------------------>
<div class="  profile-info">
  <div class="info-col">
    <div class="profile-intro">
      <h3>Intro</h3>
      <p class="intro-input">Content creator - sexy af - </p>
      <hr>
      <ul>
        <li><img src="images/profile-job.png">Content creator at OnlyNam LTD</li>
        <li><img src="images/profile-study.png">Studied at Harvard University</li>
        <li><img src="images/profile-location.png">Lives in Berseba, Namibia</li>
        <li><img src="images/profile-home.png">From Khorixas, Namibia</li>
      </ul>
    </div>
    <div class="profile-intro">
      <div class="title-box">
      <h3>Photos</h3>
      <a href="#">All Photos</a>
    </div>
      <div class="photo-box">
        <div><img src="post.jpg" ></div>
      <div><img src="image/1.jpg"></div>
      <div><img src="cover.jpg" ></div>
      <div><img src="post2.jpg" ></div>
      <div><img src="22.jpg" ></div>
      <div><img src="55.jpg" ></div>
    </div>
    </div>


<!--------friends------------------>

<div class="profile-intro">
      <div class="title-box">
      <h3>Friends</h3>
      <a href="#">All Friends</a>
    </div>
    <p><?php echo  $user_data ['id']?></p>
      <div class="friends-box">
      
      
<?php

if($friends)
{
  foreach ($friends as  $friend_ROW) {
    // code...
    
    include("friends.php");
  }
}

?>

<!------------friends-------------->



    </div>
    </div>



  </div>
<!---------------------->

  <div class="post-col">
<!---------------------------------------------------------post container--->
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

   <form method="post"> <textarea name="post" rows="3" placeholder="Compose new post"></textarea>
    

    <div class="add-post-links">
      <a href="#"><img src="live-video.png">Price</a>
       <a href="#"><img src="upload-image.png">Photo/Video</a>
        <a href="#"><img src="feeling.png">Feeling/Activity</a>
        <button type="submit">Post</button></form>
    </div>
  </div>
</div>

<!-----------------------post---------------->

<?php

if($posts)
{
  foreach ($posts as  $ROW) {
    // code...
    $user=new User();
    $Row_USER = $user->get_user($ROW['userid']);
    include("post.php");
  }
}

?>


<!------------------------post end---------------------->



    </div>

    <!---post-col---->
  </div>
  <!---end--->
</div>





<!-------------------rfhdhsdgjndsg--------------->
</div>






























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

<script>
        function test(){
document.getElementById("test18").style.filter="blur(0)"
        }
      </script>

  

</body>
</html>