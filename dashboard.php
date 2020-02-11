<?php
require 'adminsession.php';
require 'connectdb.php';
if(loggedin2())
{
?>

<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>ADMIN DASHBOARD</title>
         <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="css/styleUser.css">
     </head>
	 <body>
		  <!--Navigation BAR-->
		  
		 <nav class="navbar">
			 <div class="container-fluid">

				 <!-- Logo -->
				 <div class="navbar-header">
					 <button type="button" class="navbar-toggle" onclick="openNav()" data-target="#mainNavBar">
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					 </button>
					 <div id="heads">
						 <a href="#" class="navbar-brand "><img class="logos" src="css/foodureca.jpg" alt="logo"></a>
						 <a href="#" class="navbar-brand ">    
						 <h2 style="color:white;"><b>Foodureca</h2>
					 </div>
				 </div>

				 <!-- Menu Items -->
				 <div class="collapse navbar-collapse" id="mainNavBar"  role="navigation">
					<ul class="nav navbar-nav navbar-right">
						 
						 
						 <li><a href="logoutadmin.php"><i class="fa fa-user-circle" aria-hidden="true"></i>LogOut</a></li>
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         
			     
				 <li><a href="logoutadmin.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i>LogOut</a></li>
		     </ul>
		 </div>

		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
         
		  
   
     
		 <div class="btnpad">
			 <button class="btnpad bttn" onclick="location.href='changemenu.php';"><i class="fa fa-2x fa-list" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>CHANGE MENU</b></h4></button>
		 </div>
		 <div class="btnpad">
			 <button class="btnpad bttn" onclick="location.href='changeprice.php';"><i class="fa fa-2x fa-list" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>CHANGE PRICE</b></h4></button>
		 </div>
		 <div class="btnpad">
			 <button class="btnpad bttn" onclick="location.href='vieworder.php';"><i class="fa fa-2x fa-list" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>VIEW ORDER</b></h4></button>
		 </div>
		 <div class="btnpad">
			  <button class="btnpad bttn" onclick="location.href='changeworkstatus.php';"><i class="fa fa-2x fa-info" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>WORK STATUS</b></h4></button>
		 </div>
         <div class="btnpad">
			  <button class="btnpad bttn" onclick="location.href='viewusername.php';"><i class="fa fa-2x fa-user-circle" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>USER RECORD</b></h4></button>
		 </div>
		  <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            </div>
    </body>
	</html>
<?php
if(isset($_SESSION['true'])&&!empty($_SESSION['true']))
{    
	echo"<script type='text/javascript'>alert('Menu changed');</script>";
	$_SESSION['true']="";
}
if(isset($_SESSION['true1'])&&!empty($_SESSION['true1']))
{   	
    echo"<script type='text/javascript'>alert('Amount of meal changed');</script>";
	 $_SESSION['true1']="";
}
if(isset($_SESSION['true2'])&&!empty($_SESSION['true2']))
{   	
    echo"<script type='text/javascript'>alert('No such reference id order has been received');</script>";
	 $_SESSION['true2']="";
}
if(isset($_SESSION['true3'])&&!empty($_SESSION['true3']))
{   	
    echo"<script type='text/javascript'>alert('Delivery status changed successfully');</script>";
	 $_SESSION['true3']="";
}

}
else
{
	header('Location: adminlogin.php');
}