<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
?>
	<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>Step 1</title>
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
						 <li><a href="viewhistory.php" ><b><span class="glyphicon glyphicon-list-alt">OrderDetails</b></a></li>
						 <li><a href="cancel.php" ><i class="fa fa-times" aria-hidden="true"></i><b>CancelOrder</b></a></li>
						 <li><a href="changepassword.php"><i class="fa fa-key" aria-hidden="true"></i><b>ChangePassword</b></a></li>
						 <li><a href="editinfo.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b>EditInfo</b></a></li>
						 <li><a href="logoutcust.php"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>LogOut</b></a></li>
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="viewhistory.php" onclick="closeNav()"><span class="glyphicon glyphicon-list-alt"><b>OrderDetails</b></a></li>
			     <li><a href="cancel.php" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i><b> CancelOrder</b></a></li>
			     <li><a href="changepassword.php" onclick="closeNav()"><i class="fa fa-key" aria-hidden="true"></i><b>ChangePassword</b></a></li>
			     <li><a href="editinfo.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
				 <li><a href="logoutcust.php" onclick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
		     </ul>
		 </div>

		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
         
		  <h1 style="color:#e22b28;"class="btnpad"><b>PLACE YOUR ORDER</b></h1>
          <h2 style="color:#e22b28;"class="btnpad">STEP 1</h2>
   
     
			<div align="center" style="margin-top:100px">
			
			
			 <h2 style="color:#e22b28;"class="btnpad">MENU TYPE</h2></br>
			<form action="step2.php" method="post">
			<select name="time" class="step1" required> 
			<option  selected="" value="">Please select type</option>  
			<option  value="lunch">lunch</option>  
			<option  value="dinner">dinner</option> 
			</select>
			</br></br>
			<button type="submit" class="btnpad bttn" ><h4><b>CONTINUE</b></h4>&nbsp;&nbsp; <i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></button>
			</form>
			</div> 
             <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            
            </div>			
    </body>
	</html>

<?php
if(isset($_SESSION['error'])&&!empty($_SESSION['error']))
{   	
    echo"<script type='text/javascript'>alert('YOU HAVE NO ORDER');</script>";
	 $_SESSION['error']="";
}
if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
{   	
    echo"<script type='text/javascript'>alert('THERE EXISTS SOME DATABASE ISSUE');</script>";
	 $_SESSION['error1']="";
}
if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
{   	
    echo"<script type='text/javascript'>alert('THERE IS NO ORDER FOR THIS REFERENCE ID');</script>";
	 $_SESSION['error2']="";
}
if(isset($_SESSION['error3'])&&!empty($_SESSION['error3']))
{   	
    echo"<script type='text/javascript'>alert('PLEASE FILL VALUES TO PROCEED');</script>";
	 $_SESSION['error3']="";
}

if(isset($_SESSION['true2'])&&!empty($_SESSION['true2']))
{   	
    echo"<script type='text/javascript'>alert('THE ORDER HAS ALREADY BEEN RECEIVED');</script>";
	 $_SESSION['true2']="";
}
if(isset($_SESSION['true3'])&&!empty($_SESSION['true3']))
{   	
    echo"<script type='text/javascript'>alert('THE ORDER HAS BEEN DELETED SUCCESSFULLY');</script>";
	 $_SESSION['true3']="";
}
if(isset($_SESSION['true4'])&&!empty($_SESSION['true4']))
{   	
    echo"<script type='text/javascript'>alert('PASSWORD CHANGED SUCCESSFULLY');</script>";
	 $_SESSION['true4']="";
}
if(isset($_SESSION['true5'])&&!empty($_SESSION['true5']))
{   	
    echo"<script type='text/javascript'>alert('DETAILS UPDATED SUCCESSFULLY');</script>";
	 $_SESSION['true5']="";
}
if(isset($_SESSION['lunch'])&&!empty($_SESSION['lunch']))
{   	
    echo"<script type='text/javascript'>alert('LUNCH CAN BE ORDERED FROM 6 AM TO 2 PM ONLY');</script>";
	 $_SESSION['lunch']="";
}
if(isset($_SESSION['dinner'])&&!empty($_SESSION['dinner']))
{   	
    echo"<script type='text/javascript'>alert('DINNER CAN BE ORDERED FROM 4 PM TO 10 PM ONLY');</script>";
	 $_SESSION['true5']="";
}

}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>
