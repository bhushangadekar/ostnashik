<?php
   session_start();    
   $name=$_SESSION['name'];
   $password=$_SESSION['password'];            	
   $address=$_SESSION['address'];
   $email=$_SESSION['email'];
   $mobile=$_SESSION['mobile'];  
   $_SESSION['sess_user_id']=1;
   include 'config.php';		
   $sql="INSERT INTO members(username,password,address,email,mobile) VALUES ('$name','$password','$address','$email','$mobile')";
   $result = $conn->query($sql);
   if($result)
   {
	header('location: initiateuser.php');	
   }
   else
   {
    header('location: adduser.php?user=error');
   }				
?>