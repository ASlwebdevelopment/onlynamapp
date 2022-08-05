<?php 

class Signup
{
       private $error="";

      public function evaluate($data)
       {

       foreach ($data as $key => $value) {
        	// code...
            if(empty($value))
            {
            	$this->error= $this->error . $key . "<br>is empty!<br>";
            }


            if($key=="first_name")
            {
            	if(is_numeric($value)){

            		$this->error= $this->error . $key . "<br>can't be a number!<br>";



            	}
if(strstr($value, " ")){

            		$this->error= $this->error . $key . "<br>can't have spaces!<br>";
            	}
            	
            }


            

            if($key=="last_name")
            {
            	if(is_numeric($value)){

            		$this->error= $this->error . $key . "<br>can't be a number!<br>";
            	}
            	
            }

            if(strstr($value, " ")){

            		$this->error= $this->error . $key . "<br>can't have spaces!<br>";
            	}

        } 

        if($this->error=="")
        {

//no error
        	$this->create_user($data);

        }else
        {
        	return $this->error;
        }

       }

         public function create_user($data)
          {


               $first_name=ucfirst($data['first_name']);
                $last_name=ucfirst($data['last_name']);
                $gender=$data['gender'];
                 $email =$data['email'];
                 $password=$data['password'];
                 //create these
                 $url_address = strtolower($last_name) .".". strtolower($first_name);
                 $userid=$this->create_userid();

              $query = "insert into users 
              (userid,first_name,last_name,gender,email,password,url_address) 
              values
              ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";

             

             $DB = new Database();
       $DB->save($query);
          }
 
           
           private function create_userid()
           {
              
            $length=rand(4,19);
            $number = "";
            for ($i=0; $i < $length ; $i++) { 
            	// code...
                 $new_rand =rand(0,9);

            	$number =$number . $new_rand;
            

} return $number;

           }


}