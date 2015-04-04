<?php
session_start();    
            $status="Present";
            $name=$_SESSION['sess_username'];
            $dateofattendance=$_SESSION['sess_date'];			
            $timeofattendance=$_SESSION['sess_time'];
            $timeofdeparture="00-00-00";            
            include 'config.php';            
            $sql="SELECT flag FROM attendance WHERE dateofattendance='$dateofattendance' && emp='$name'";
			$result = $conn->query($sql);			
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {							
                    $flag=$row['flag'];
					if($flag==0)
            		{				
            			header('location: summary.php?leave=done');
            		}
					if($flag==2)
            		{	
						$flag=1;			
            			$sql1="UPDATE attendance SET timeofattendance='$timeofattendance',timeofdeparture='$timeofdeparture',flag='$flag',status='Present' WHERE emp='$name' && dateofattendance='$dateofattendance'";
            			$result1 = $conn->query($sql1);  							
            			header('location: summary.php');           			
            		}
	            }
            }
            $conn->close();                    
?>