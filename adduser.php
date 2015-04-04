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
        	<h3 class="text-center text-success">Add New Employee To OSTNashik !</h3>
            <h4 class="text-center text-danger">New Employees Will Be Created Here , As Their Attendance Records Need To Be Prepared !</h4>          
           <div class="col-md-6">
           		<div class="formbox">
           <form name="form" method="post" action="emailval1.php">
           	  <table class="table borderless">
              	<tr >
                	<td style="border-top: none;"><div class="form-group" ><label>Employee Name  </label></div></td>
                    <td style="border-top: none;"><div class="form-group" ><input name="name" type="text" id="name" required></div></td>
                </tr>
                <tr>
                	<td style="border-top: none;"><div class="form-group" ><label>Password  </label></div></td>
                    <td style="border-top: none;"><div class="form-group" ><input type="password" input name="password" id="password" required></div></td>
                </tr>
                <tr>
                	<td style="border-top: none;"><div class="form-group" ><label>Address  </label></div></td>
                    <td style="border-top: none;"><div class="form-group" ><input name="address" type="text" id="address" required></div></td>
                </tr>
                <tr>
                	<td style="border-top: none;"><div class="form-group" ><label>Email  </label></div></td>
                    <td style="border-top: none;"><div class="form-group" ><input name="email" type="text" id="email" required>
			  									 <?php if(isset($_GET['email']) && $_GET['email'] == "invalid")
              										{
                  									echo "<h5 class='text-danger'>Invalid email specified</h5>";
              										}
              									 ?>
                         </div>
                    </td>
                </tr>
                <tr>
                	<td style="border-top: none;"><div class="form-group" ><label>Mobile  </label></div></td>
                    <td style="border-top: none;"><div class="form-group" ><input type="text"id="mobile" name="mobile" pattern="[789][0-9]{9}" required></div></td>
                </tr>
              	</table>                                   
              <br>
              <button type="submit" class="btn btn-danger">Create User</button>
              </form>
              </div>
           </div>
        </div>       
    </div>
</div>
</body>
</html>
