<div class="post-container">
  <div class="post-row">
 <div class="user-profile">

  <?php
       $image = "user_male.jpg";
       if($Row_USER['Gender']== "Female")
       {
        $image = "user_female.jpg";
       }
      ?>
   <img src="<?php echo $image?>" width="50" height="50
    ">
    <div>
      
      <p><?php echo $Row_USER['first_name']?></p>
      <span><?php echo $ROW['date']?></span>
    </div>
  </div>    
    <a href="#"><i class='bx bx-dots-vertical-rounded'></i></a>
  </div>
 
  <p class="post-text"><?php echo $ROW['post']?> <a href="#">#OnlyNam</a></p>
  <!--<img src="post.jpg" class="post-img" id="test18">-->
  

  <div class="post-row">
    <div class="activity-icons">
     <div><img src="like.png">6400</div>
     <div><img src="comment.png">267</div>
     <div><img src="live-video.png"><button style="background: white;
color: #626262;
cursor: pointer;border-radius: 5px; " onClick="test()">Tip N$100</button></div>
     






      
    </div>

 <div class="post-profile-icon">
        <img src="<?php echo $image?>" >
        <a href="#"><i class='bx bx-down-arrow'></i></a>
      </div>

</div>
  </div>
