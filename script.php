<?php
    session_start(); 
        date_default_timezone_set("Asia/Kolkata"); 
        $timeofdeparture=date('h-i-s');  
		$time="00-00-00";
		$dateofattendance=$_SESSION['sess_date'];		
        $name=$_SESSION['sess_username'];        
        $_SESSION['sess_out_time'] = $timeofdeparture;        
        include 'config.php';
        $sql1="UPDATE attendance SET timeofdeparture='$time' WHERE timeofdeparture IS NULL ";
        $result = $conn->query($sql1);      
        $sql="UPDATE attendance SET timeofdeparture='$timeofdeparture' WHERE emp='$name' && dateofattendance='$dateofattendance'";					        $result1 = $conn->query($sql);
        if($result1)
        {				
        header('location: summary.php');		
        }
        else
        {
       	header('location: summary.php?error=true');
        }       
?>
   
