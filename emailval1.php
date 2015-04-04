 <?php
	session_start();      			
	
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['password']= $_POST['password']; 	
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['mobile'] = $_POST['mobile'];	
	$email =$_POST['email'];  	
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL))
	{
    	header("Location: createuser.php");	
		
	}
	else
	{
		header('Location: adduser.php?email=invalid');
	}
 ?>