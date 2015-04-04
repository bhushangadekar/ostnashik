<?php
    //Login Process from database    
       session_start();        
       $username = $_POST['myusername'];
       $password = $_POST['mypassword'];
        
       include 'config.php';     
       $sql = "SELECT id, username, password
       FROM members
       WHERE username = '$username';"; 			
       $result = $conn->query($sql);
	   
	   if ($result->num_rows > 0)
       {
         while($row = $result->fetch_assoc())
         {
			 // Redirect to home page after successful login.							
          	  $_SESSION['sess_user_id'] = $row['id'];
       		  $_SESSION['sess_username'] = $row['username'];	
    		  $_SESSION['sess_passwd'] = $row['password'];
			  session_write_close();
			  if($username==$_SESSION['sess_username'] && $password==$_SESSION['sess_passwd'])
    		  {
    				// on successful Login
    				header('Location: LoginSuccess.php');
    		  }
    	     else
    		 {
    				//on incorrect username or password
    				header('Location: login.php?failed=true');
    		 }			
         }
       }
	   else
	   {
		   header('Location: login.php?nouser=true'); // User not found. So, redirect to login_form again.
	   } 
?>