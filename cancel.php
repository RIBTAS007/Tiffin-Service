<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
	?>
	<html>
       <head>	
         <meta charset="UTF-8">
         <title>CANCEL ORDER</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		 <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
         <link rel="stylesheet" href="css/styleReg.css">
		 <link rel="stylesheet" href="css/styleUser.css">
     </head>
    
	 <body>

         <!--Navigation BAR-->
		  
		 <nav class="navbar">
			 <div class="container-fluid">

				 <!-- Logo -->
				 <div class="navbar-header">
					 <button type="button" class="navbar-toggle" onClick="openNav()" data-target="#mainNavBar">
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
						 <li><a href="viewhistory.php" ><i class="fa fa-home" aria-hidden="true"></i> <b>OrderDetails</b></a></li>
						 <li><a href="cancel.php" ><i class="fa fa-info-circle" aria-hidden="true"></i><b> CancelOrder</b></a></li>
						 <li><a href="changepassword.php"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>ChangePassword</b></a></li>
						 <li><a href="editinfo.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b>EditInfo</b></a></li>
						 <li><a href="logoutcust.php"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>LogOut</b></a></li>
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onClick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="viewhistory.php" onClick="closeNav()"><i class="fa fa-home" aria-hidden="true" ></i><b>OrderDetails</b></a></li>
			     <li><a href="cancel.php" onClick="closeNav()"><i class="fa fa-info-circle" aria-hidden="true"></i><b> CancelOrder</b></a></li>
			     <li><a href="changepassword.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i><b>ChangePassword</b></a></li>
			     <li><a href="editinfo.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
				 <li><a href="logoutcust.php" onClick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
		     </ul>
		 </div>

		
         <!--form-->
		 
		 <h1 style="color:#e22b28;"class="btnpad"><b>CANCEL ORDER</b></h1>
         <div align="center" style="margin-top:30px">
		     <form   action="cancelprocess.php"  onSubmit="return confirm('ARE YOU SURE TO DELTE YOU ORDER');"method="POST">
				 <input type="number"  min="0" name="refid"  placeholder="ENTER YOUR REFID" class="name" required />
				 <input name="submit" style=" border: 1px solid #253737; background:#e22b28; color:white;" class="btn" type="submit" value="CANCEL ORDER" style="cursor:pointer" />
		     </form>
			 
			  <button class="btnpad bttn" onclick="location.href='user.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
		
	     </div>
		 
		 <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            </div>
		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
		 <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     </body>
</html>
<?php
if(isset($_SESSION['error'])&&!empty($_SESSION['error']))
{   	
    echo"<script type='text/javascript'>alert('Please fill values');</script>";
	 $_SESSION['error']="";
}
}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>