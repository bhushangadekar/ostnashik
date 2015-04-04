<?php
session_start();
error_reporting(0); 
?><!DOCTYPE html>
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
             <li><a href=""><button type="button" class="btn btn-toolbar "><?php echo "Welcome, ".$_SESSION['sess_username']; ?></button></a></li>
			 <li><a href="index.php"><button type="button" class="btn btn-danger "><?php echo "Logout"; ?></button></a></li>            </ul>
   			</div>
		</nav>
	<div class="row clearfix">
		<div class="col-md-12 column"> 
        <ul class="nav nav-pills">
           <li class="active" ><a href="Login.php">Home</a></li>
           <li><a href="script.php">Sign Out</a></li>
        </ul>          
		</div>
	</div><br>
    <div class="row clearfix">
		<div class="col-md-12 column"> 
        	<div class="form1">
            	<form method="post" action="summary2.php?#table">
                    <font size="+1" color="#0033CC">Month :</font>
                    <select name="month" >
                    <option VALUE="01" selected="selected"> January</option>
                    <option VALUE="02"> February</option>
                    <option VALUE="03"> March</option>
                    <option VALUE="04"> April</option>
                    <option VALUE="05"> May</option>
                    <option VALUE="06"> June</option>
                    <option VALUE="07"> July </option>
                    <option VALUE="08"> August</option>
                    <option VALUE="09"> September</option>
                    <option VALUE="10"> October</option>
                    <option VALUE="11"> November</option>
                    <option VALUE="12"> December</option>
                 	</select><br><br>
                    <input type="submit" class="btn btn-success" name="submit" value="Submit" >
                 </form>        
            </div> <br><br>  
            <div class="tableid">
            <?php			
            $name=$_SESSION['sess_username'];
            $currentmonth=date('m');                           
            $counter=0;                          
            include 'config.php';                        
            $sql="SELECT dateofattendance,timeofattendance, status,timeofdeparture FROM attendance Where emp='$name' ORDER BY dateofattendance ASC ";
            $result = $conn->query($sql);			
            if ($result->num_rows > 0)		   
            {
            echo "<section id='table'>
				  <table class='table table-bordered table-hover table-condensed'>
				  <tbody><tr><td>";
				  // create the opening table
				  
            echo "<div align='left'>
						<table class='table table-bordered table-hover table-condensed'cellpadding='5' >
						<thead> <tr><th> Date </th><th>IN</th><th>OUT</th><th>Status</th>
								</tr>
						</thead>
						<tbody>";
						while($row = $result->fetch_assoc())
            			{
            				$month= date("m", strtotime( $row["dateofattendance"] ) );		
                			// create the row
                			if($currentmonth == $month)
                			{
                				echo "<tr class='success'><td class='date'>" . $row["dateofattendance"]. "</td><td class='date'>" . $row["timeofattendance"]. "</td><td class='date'>" . $row["timeofdeparture"]. "</td>";
                    			if($row["status"]=='Present')
                    			{
                    				echo "<td class='date'><span class='btn btn-sm btn-success btn-default'>". $row["status"]."</span></td>";
                    			}
								else if($row["status"]=='Leave')
								{
									echo "<td class='date'><span class='btn btn-sm btn-warning btn-default'>". $row["status"]."</span></td>";
								}
                    			else
                    			{
                    				echo "<td class='date'><span class='btn btn-sm btn-danger btn-default'>". $row["status"]."</span></td>"; 
                    			}"</tr>"; 
                    			$counter++;  
                           
                    			// when the counter is 15, close this table and open another
                    			if($counter == 15)
                    			{
									echo "</tbody></table></div>";
                    				echo "</td><td>";// move to the next cell in our wrap table                    				
                    				echo "<table class='table table-bordered table-hover table-condensed'cellpadding='5' >
									<thead>
									<tr>
									<th> Date </th><th>IN</th><th>OUT</th><th>Status</th>
									</tr>
									</thead>
									<tbody>";  
                    			}
                	   }
				}
            // close the last table
           echo "</tbody></table>";		
           // close our wrapper table
           echo "</td></tr></tbody></table></div></section>";
           }
           $conn->close();
           ?>
            
            </div>   
		</div>
	</div>   
</div>
</body>
</html>
