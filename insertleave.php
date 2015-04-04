<?php
    		session_start(); 
			date_default_timezone_set("Asia/Kolkata");
            $name=$_POST['name'];				
            $fromdate=$_POST['fromdate'];         
            $todate=$_POST['todate'];			
            $flag=0;
            $timeofattendance="00-00-00";
            $timeofdeparture="00-00-00";
            $status="Leave";				
            include 'config.php';
            while (strtotime($fromdate) <= strtotime($todate))
            {          		
					$sql1="UPDATE attendance SET timeofattendance='$timeofattendance',timeofdeparture='$timeofdeparture',flag='$flag',status='$status'  WHERE emp='$name' && dateofattendance='$fromdate'";
            		$result = $conn->query($sql); 				
					$fromdate = date ("Y-m-d", strtotime("+1 day", strtotime($fromdate)));					
            		
            }
            header('location: ControlPanel.php?leave=done');	
            mysqli_close();				
?>

