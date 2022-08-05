<?php

class Login
{
   
   private $error = "";
 

public function evaluate($data)
          {


               
                 $email =addslashes($data['email']) ;
                 $password=addslashes($data['password']);
                 

              $query = "select * from users where email='$email'limit 1"; 
              

             

             $DB = new Database();
       $result = $DB->read($query);

       if($result)
        {

        $row = $result[0];
        if($password==$row['password'])
        {
           //create session data

       $_SESSION['userid'] = $row['userid'];


        }else
        {
        	$error .="wrong password or email<br>";
        }

        }else
        {
        	$error .="No such email was found<br>";
        }

       return $error;

        	
    

          }
public function check_login($id)
{

   if(is_numeric($id))

   {
$query = "select * from users where userid= '$id' limit 1 "; 
              

             

             $DB = new Database();
       $result = $DB->read($query);

       if($result)
        {

         $user_data=$result[0];
return $user_data;
        }else
{

  header("Location:index.php");
    die;
}

        
}else
{

  header("Location:index.php");
    die;
}

}


}