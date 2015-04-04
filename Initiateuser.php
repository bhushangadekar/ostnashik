<?php
	session_start();
    $name=$_SESSION['name'];
	$timeofdeparture="00-00-00";          
    $timeofattendance="00-00-00";
    $absent="Absent";
	$startdate = '2015-01-01';				
    $end_date ='2016-01-01';           		
    include 'config.php'; 
	while (strtotime($startdate) <= strtotime($end_date))
    {
    	$flag=2;
    	$sql2="INSERT INTO attendance(emp, dateofattendance, status,flag,timeofattendance,timeofdeparture)VALUES('$name', '$startdate', '$absent','$flag','$timeofattendance','$timeofdeparture') ";
    	$result2 = $conn->query($sql2);
		$startdate = date ("Y-m-d", strtotime("+1 day", strtotime($startdate)));
    }            
    header('location: controlpanel.php?user=done');
?>
 
