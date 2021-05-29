<?php
	

	// Database connection
$con= mysqli_connect('localhost', 'root', '');
        $db='test1';
        
                
                
        if(!$con){
           echo 'Not Connected to the server' ;
        }
        mysqli_select_db($con, $db);
        if(!mysqli_select_db($con, $db)){
            echo 'Database is not selected';
        }
 else {
     if(isset($_POST["submit"])){
         
     
                $firstName =$_post['firstName'];
                $lastName =$_post['lastName'];
                $gender =$_post['gender'];
                $email =$_post['email'];
                $password =$_post['password'];
                $number =$_post['number'];
 
        
	
         $sql="INSERT INTO registration(firstName, lastName, gender, email, password, number) VALUES('$firstName','$lastName','$gender','$email','$password','$number')";
          if(!mysqli_query($con, $sql)){      
              echo 'Not inserted/Not saved';
          }
          else{
              echo 'Inserted/Saved Succesfully!';
          }
          header("refresh:2,url=Form.html");
     }
     
          }	
?>
