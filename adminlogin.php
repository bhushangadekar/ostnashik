<?php
    //Login Process from database    
       session_start();        
       $username = $_POST['myusername'];
       $password = $_POST['mypassword'];
        
       include 'config.php';     
       $sql = "SELECT id, name, password FROM admin WHERE name = '$username'";			
       $result = $conn->query($sql);   
	   if ($result->num_rows > 0)
       {
         while($row = $result->fetch_assoc())
         {
			 // Redirect to home page after successful login.							
          	  $_SESSION['sess_user_id'] = $row['id'];
       		  $_SESSION['sess_username'] = $row['name'];	
    		  $_SESSION['sess_passwd'] = $row['password'];
			  session_write_close();
			  if($username==$_SESSION['sess_username'] && $password==$_SESSION['sess_passwd'])
    		  {
    				// on successful Login
    				header('Location: Controlpanel.php');
    		  }
    	     else
    		 {
    				//on incorrect username or password
    				header('Location: admin.php?failed=true');
    		 }						
         }
       }
	   else
	   {
		   header('Location: admin.php?nouser=true'); // User not found. So, redirect to login_form again.
	   } 
?>