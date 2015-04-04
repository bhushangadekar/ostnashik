<?php
session_start();
session_destroy();
if(isset($_GET['tour']) && $_GET['tour'] == "done")
   	{
    	echo '<script language="javascript">';				
    	echo 'alert(" You Have Successfully Subscribed For Free 2-Hour Support Tour !")';
    	echo '</script>';
    }
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

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
	 <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
     <link rel="stylesheet" type="text/css" href="engine1/style.css" />
     <script type="text/javascript" src="engine1/jquery.js"></script>
     <!-- End WOWSlider.com HEAD section -->
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
	<div class="row clearfix">
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
   		</div>
		</nav>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
        <div class="slider">
            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                    <li><img src="data1/images/1.png" alt="" title="" id="wows1_0"/></li>
                    <li><img src="data1/images/2.jpg" alt="" title="" id="wows1_1"/></li>
                    <li><img src="data1/images/3.jpg" alt="" title="" id="wows1_2"/></li>
                    <li><img src="data1/images/4.jpg" alt="" title="" id="wows1_3"/></li>
                    <li><img src="data1/images/4_0.png" alt="" title="" id="wows1_4"/></li>
                    <li><img src="data1/images/5.jpg" alt="" title="" id="wows1_5"/></li>
                    <li><a href="http://wowslider.com/vf"><img src="data1/images/6.jpg" alt="full screen slider" title="full screen slider" id="wows1_6"/></a></li>
                    <li><img src="data1/images/7.jpg" alt="" title="" id="wows1_7"/></li>
                    </ul>
                </div>
            <div class="ws_bullets">
                 <div>
                  <a href="#" title=""><img src="data1/tooltips/1.png" alt=""/>1</a>
                  <a href="#" title=""><img src="data1/tooltips/2.jpg" alt=""/>2</a>
                  <a href="#" title=""><img src="data1/tooltips/3.jpg" alt=""/>3</a>
                  <a href="#" title=""><img src="data1/tooltips/4.jpg" alt=""/>4</a>
                  <a href="#" title=""><img src="data1/tooltips/4_0.png" alt=""/>5</a>
                  <a href="#" title=""><img src="data1/tooltips/5.jpg" alt=""/>6</a>
                  <a href="#" title="full screen slider"><img src="data1/tooltips/6.jpg" alt="full screen slider"/>7</a>
                  <a href="#" title=""><img src="data1/tooltips/7.jpg" alt=""/>8</a>
                  </div>
            </div>
            <span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
            <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End WOWSlider.com BODY section -->
           </div>
		</div>
	</div>
    <div class="row clearfix">
   	  <div class="col-md-8 column" align="justify" style="line-height:1.5">
        <br><br><br>       
        	<h1 class="text-success"> &nbsp;All Computer Services We Provide! </h1>
            <div class="media">
           <a href="#" class="pull-left"><img src="img/comp.gif" width="200" height="200" class="media-object"></a>
           <div class="media-body" align="justify" >
           <h4 class="media-heading text-danger"><b>Computer Solutions !</b></h4>
           <p> Computer Solution Provides Wide Range Of Services Relating To The IT Industry And Carries Out Virtually All Work Relating To	PCs.</p>
            <p>The Services Listed Below Are Not Exhaustive.Please Ask For Further Information.</p>
            <h4 class="media-heading text-danger" >
            <b><p>Why To Choose Computer Solutions ?</p></b>
            </h4>
            <p>Computer Solutions is  <b> A Reliable,Friendly,Professional Company </b> That Supports Outstanding IT Support Software & Hardware</p>
            <p>It is The Solution To All Your Computer Needs !</p>
            </div>      
        </div>
       <div align="justify">
          <h4 class="media-heading text-danger">
          <b><p>Hardware</p></b>
          </h4><p>Computer Solutions is Able To Support & Supply All Hardware Solutions For Your PC. It is Also Able To Supply PCs Built To Order.The Components Used Are All Top Quality & Branded , Ensuring That You Get First Class PC Fit For Your Requirements.It Also Supplies Computers,Servers,Printers,Hubs,Modems,Peripherals,Monitors etc.For Further Information Please Click Here </p>
       <h4 class="media-heading text-danger"><b><p>Software</p></b></h4>
       <p>Whether You Desire Bespoke Software Or An Off-The Shelf Package. Computer Solutions Develops Databases And Applications When Required.For Further Information Click Here.</p>
       <h4 class="media-heading text-danger"><b><p>Windows Reinstallation</p></b></h4>
       <p>Due To Hardware Changes ,Hard-disk Damage or Virus Corruptions,Your Windows Operating System Can Unfortunately Become Unrecoverable.You Also Might Be  Your Windows Operating System To Be Slow Or Glitchy Due To Damage Or Corruption. If This Happens To Your PC , Dont Worry - We Have The Perfect Solutions Here !</p>
       <h4 class="media-heading text-danger"><b><p>Networking</p></b>
       </h4><p> Computer Solutions Can Design , Install , Maintain and Repair Networks. Networking Your Company's Systems i.e. Computers, Printers, databases etc. Computer Solutions Will Help You Save Time & Money. For Further Information Please Click Here ! </p>
       <h4 class="media-heading text-danger"><b><p>Internet / Wlan</p></b></h4>
       <p> From A Basic Internet Connection To A More Complex Connection e.g. Office Links, Remote Access , Upgrades , Repairs etc. Computer Solutions Is Able To Help . It is Able To Set Up ADSL Or ISDN Connections.</p>
       <h4 class="media-heading text-danger"><b><p>Upgrades & Repairs</p></b></h4>
       <p>A Minor Upgrade Can Bring Your Computer Up To Full Speed , And Enable It To Cope Up With The Demands Of Your Business. Computer Solutions Can Provide Full upgrade Service & Repairs.For More information , Please Click Here !</p>
       <h4 class="media-heading text-danger"><b><p>Support Virtual IT Departments</p></b></h4>
       <p>Throughout Caterham And The Supply Area Computer Solutions is Known For Its professional Friendly Service, And Its Customers Return time & Time Again. Computer Solutions Provides a Virtual IT Department If Desired And Its Work is Second To None. This is A Very Useful Service Often Ussed by Smaller Companies Or a Large Company not Wishing To Pay The Salary Of A Highly Experienced IT Specialist. Computer Solutions Supplies The Highly Experienced IT Specialist At A Fraction Of The Cost Of An In-House Employee.No Retains Are Charged.For More Information, Please Click Here !</p>
        </div>                          
   </div>
   <div class="col-md-4 column">
    <br><br><br><br>
     	<div class="panel panel-default ">
            <div class="panel-heading">
               <h3 class="panel-title" ><b>Services</b></h3>
            </div>
            <div class="panel-body">
                <table class="table">
                   <tr>
                      <td>
                       <b>
                        <ul>
                         <li>IT Sales & Services</li>
                         <li>BPO / KPO Solutions</li>
                         <li>CCTV Surveillances</li>
                         <li>EPBX Services</li>
                         <li>Software Development</li>
                         <li>Web Development</li>
                         <li>GPRS Solutions</li>
                       </ul>
                      </b>
                      </td>
                   </tr>
                </table>
            </div>
            <div class="panel-footer">
            </div>
       </div>
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
														$conn->close();
                                                    }
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
                                         <b class="text-danger visittext">Welcome Visitor, Your Visitor No. :</b><br><br>
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
                            <?php
            				$ip=$_SERVER['REMOTE_ADDR'];
							date_default_timezone_set("Asia/Kolkata");
							$date=date('Y-m-d');
							$time=date('h-i-s');          
            				include 'config.php';             
            				$sql="INSERT INTO visitors(ip_address,timeofvisit,dateofvisit)VALUES('$ip','$time','$date')";
            				$result = $conn->query($sql);	                      
            			    mysqli_close($conn);            
            				?>
                            </div>
                        </div>
        </div>               
    </div><br><br> 
     <div class="row clearfix jumbotron">
    	<div class="col-md-12 column ">    		
				<div class="col-md-4 column">
                	<h5 class="text-info">Company</h5>
                    <h5 class="text-info">About OSTNashik</h5>                   
					<h5 class="text-info">Corporate Social Responsibility</h5>                    
                    <h5 class="text-info">Careers</h5>
                    <h5 class="text-info">Customer Engagement</h5>                    
                </div>
                <div class="col-md-4 column">
                	<h5 class="text-info">Legal & regulatory</h5>
                    <h5 class="text-info">Site Terms</h5>                   
					<h5 class="text-info">TradeMarks</h5>                    
                    <h5 class="text-info">Privacy Statement</h5>
                    <h5 class="text-info">Sales Terms</h5>                    
                </div>
                <div class="col-md-4 column">
                	<h5 class="text-info"><a href="admin.php">Admin Panel</a></h5>
                    <h5 class="text-info">Archieves</h5>                   
					<h5 class="text-info">Events</h5>                    
                    <h5 class="text-info">RSS Feeds</h5>
                    <h5 class="text-info">Support Forum</h5>                    
                </div>	
       </div>
    </div>
</div>
</body>
</html>
