<?php
    session_start();
	error_reporting(0);
   
    $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];     
	       
    include 'config.php';            
    $sql="INSERT INTO comments(firstname,lastname,email,subject,comment)VALUES('$firstname','$lastname','$email','$subject','$comment')";
    $result = $conn->query($sql);
    if($result)
    {
		header('location: index.php');	
				
    }
    else
    {
            	echo "ERROR";
    }
	mysqli_close();          
?>
