<?php
    session_start();
	error_reporting(0);
   
    $name=$_SESSION['name'];
    $password=$_SESSION['password'];
    $company=$_SESSION['company'];	
    $address=$_SESSION['address'];
    $email=$_SESSION['email'];
    $mobile=$_SESSION['mobile'];
    $phone=$_SESSION['phone'];          
    include 'config.php';            
    $sql="INSERT INTO freetours(name,password,company,address,email,mobile,phone)VALUES('$name','$password','$company','$address','$email','$mobile','$phone')";
    $result = $conn->query($sql);
    if($result)
    {
		header('location: index.php?tour=done');	
				
    }
    else
    {
    	header('location: freevisit.php?error=true');	
    }
	mysqli_close();          
?>
