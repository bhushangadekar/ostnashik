<?php
    session_start();
	error_reporting(0);
   
    $title=$_POST['title'];
    $description=$_POST['description'];
    $postdate=$_POST['postdate'];
    $duedate=$_POST['duedate'];            
    include 'config.php';            
    $sql="INSERT INTO news(title,description,dateofpost,duedate)VALUES('$title','$description','$postdate','$duedate')";   
	$result = $conn->query($sql);
    if($result)
    {
		header('location: Controlpanel.php?news=done');			
    }
    else
    {
       header('location: Controlpanel.php?news=error');
    }
	mysqli_close();           
?>
