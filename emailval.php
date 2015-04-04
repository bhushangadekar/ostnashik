 <?php
	session_start();      			
	
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['password']= $_POST['password']; 
	$_SESSION['company'] = $_POST['company'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['mobile'] = $_POST['mobile'];
	$_SESSION['phone'] = $_POST['phone'];
	$email =$_POST['email'];  
	if (filter_var($email, FILTER_VALIDATE_EMAIL))
	{
    	header("Location: addtour.php");	
		
	}
	else
	{
		header('Location: freevisit.php?email=invalid');
	}
    ?>