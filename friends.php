<div>

<?php
       $image = "user_male.jpg";
       if($friend_ROW['Gender']== "Female")
       {
        $image = "user_female.jpg";
       }
      ?>

	<img src="<?php echo $image?>"> <p><?php echo $friend_ROW['first_name']?></p> </div>