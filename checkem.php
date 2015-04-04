<?php
    //Start session
    session_start();
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
    	<div class="col-md-8 column">
        	<div class="col-md-12 column">
                    <h3 class="text-center text-success">
                        Check Attendance Summary !		
                    </h3>
                    <h4 class="text-center text-danger">
                        Enter The Employee Details You want to Check !			
                    </h4>
                    <br>	
                    </br>
                    </br>
                    <div class="formbox">
                        <form name="form" method="post" action="Employee.php">
                            <div class="form-group" > 	
                                <label>Employee Name</label>&nbsp;&nbsp;
                                <input name="name" type="text" id="name" required>
                            </div>
                            <label>Month :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                            </select>
                            <br><br>
                            <button type="submit" class="btn btn-danger">Check</button>				 
                        </form>
                    </div>
                </div>
  		</div>
        <div class="col-md-4 column">
        <br>
         <div class="panel panel-default ">
                            <div class="panel-heading">
                                <h3 class="panel-title" ><b>Latest News</b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                           <marquee onMouseOver="this.setAttribute('scrollamount', 0, 0);" OnMouseOut="this.setAttribute('scrollamount', 6, 0);" direction="up">						
                                                <font color='black'>
                                                <?php
                                                    include 'config.php';								
                                                    $sql="SELECT title,description FROM news ORDER BY dateofpost ASC ";
                                                    $result = $conn->query($sql);			
                                                    if ($result->num_rows > 0)
                                                    {
                                                    	while($row = $result->fetch_assoc())
                                                    	{							
                                                    		echo "<div class='box'><br>&nbsp;&nbsp;<span class='blink'><font class='f1'>". $row["title"]."</font></span><br><br>";							
                                                    		echo "<font class='f2'>&nbsp;".$row["description"]."</li></font>";
                                                    		echo "</div><br>";
                                                    	}
                                                    }
                                                    $conn->close();
                                                    ?>
                                                </font>
                                            </marquee>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                      <div class="panel-footer">
                  </div>
             </div>
             <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" ><b>Visitor Details </b></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                         <b class="text-danger visittext">Total Visitors Of Website  :</b><br><br>
                                         <div class="visitor">
										 <?php
                                         include 'config.php';								
                                         $sql="SELECT id FROM visitors ORDER BY id DESC LIMIT 1";
                                         $result = $conn->query($sql);			
                                         if ($result->num_rows > 0)
                                         {
                                           while($row = $result->fetch_assoc())
                                           {							
                                            echo  "<span class='blink'>".$row["id"]."</span>";							
                                            
                                           }
                                          }
                                          $conn->close(); 
										  ?>										  
                                         </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">                           
                            </div>
                        </div>
        </div>               
    </div>
</div>
</body>
</html>
