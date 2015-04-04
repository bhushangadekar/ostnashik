<?php
    //Start session
    session_start();  
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == ''))
	{
    	header("location: admin.php");
    	exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>OSTNashik !</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body class="bg2">
<nav class="navbar nav-tabs" role="navigation">      
<div class="container bg">
	<div class="row clearfix ">
    			<div class="col-md-12 column">    		
				<div class="col-md-4 column">
                	<a class="navbar-brand" href="#"><img src="img/a.gif" width="300" height="100"> </a>        	                    
                </div>
                <div class="col-md-4 column">
                	                    
                </div>
                <div class="col-md-4 column">
                	<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#"><img src="img/os.gif" width="120" height="120"> </a>
						</li>						
					</ul>                	                   
                </div>	
       			</div>
   			</div>
            <nav class="navbar navbar-default" role="navigation">
   			<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#example-navbar-collapse">
         		<span class="sr-only">Toggle navigation</span>
         		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
         		<span class="icon-bar"></span>
      			</button>      
   			</div>
   			<div class="collapse navbar-collapse" id="example-navbar-collapse">
      		<ul class="nav navbar-nav">
         		<li class="active"><a href="index.php">Home</a></li>
         		<li><a href="whyus.php">Why Us?</a></li>
         		<li><a href="services.php">Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="login.php">Attendance</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="freevisit.php"><span class="blink">Free 2-Hour Support</span></a></li>
             </ul>
             <ul class="nav navbar-nav navbar-right">
             <li><a href="controlpanel.php"><button type="button" class="btn btn-toolbar "><?php echo "Welcome, ".$_SESSION['sess_username']; ?></button></a></li>
			 <li><a href="index.php"><button type="button" class="btn btn-danger "><?php echo "Logout"; ?></button></a></li>            </ul>
   			</div>
		</nav>
    <div class="row clearfix">
    	<div class="col-md-12 column">
        	<div class="admin" >
                <h2 class="text-center text-primary">Comments Summary For OSTNashik ! </h2><br><br><br>
                <?php	
                include 'config.php';			
                $sql="SELECT * FROM comments ORDER BY id DESC ";
                $result = $conn->query($sql);			
                if ($result->num_rows > 0)		   
                {
                echo "<section id='table'><div class='tableid'>";  
                // create the opening table
                echo "<table class='table table-bordered table-hover table-condensed' border='black' cellpadding='5' >
				<thead>
					<tr><th> ID </th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Comment</th>
					</tr>
				</thead><tbody>";						 
                while($row = $result->fetch_assoc())
                {						
                    echo "<tr class='success'>
					<td class='date'>" . $row["id"]. "</td>
					<td class='date'>" . $row["firstname"]. "</td>
					<td class='date'>" . $row["lastname"]. "</td>
					<td class='date'>" . $row["email"]. "</td>
					<td class='date'>" . $row["subject"]. "</td>
					<td class='date'>" . $row["comment"]. "</td>
					</tr>"; 
              	}	
              	// close the last table
              	echo "</tbody></table>";		
              	// close our wrapper table
              	echo "</div></section>";
                }                    
                $conn->close();
                ?>
            </div>
        </div>       
    </div>
</div>
</body>
</html>
