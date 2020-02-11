<?php
require 'session.php';
require 'connectdb.php';
if (loggedin())
{
	$username=$_SESSION['username'];
	$query="SELECT * FROM `billrecord` WHERE `username`='$username' ";
	if($result=mysql_query($query))
	{
		$rows=mysql_num_rows($result);
		$rows-=1;
		$id= mysql_result($result, $rows, 'id');
		$username= mysql_result($result, $rows, 'username');
		$bill= mysql_result($result, $rows, 'bill');
		$date= mysql_result($result, $rows, 'date');
		$room= mysql_result($result, $rows, 'room');
		$status= mysql_result($result, $rows, 'status');
		$foodtime= mysql_result($result, $rows, 'foodtime');
		$type= mysql_result($result, $rows, 'type');
		$name= mysql_result($result, $rows, 'name');
		?>
		<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>Step 4</title>
         <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <script>
		 function success()
		 { 
		  alert("ORDER PLACED SUCCESSFULLY");
		 }
		 </script>
         <link rel="stylesheet" href="css/styleUser.css">
     </head>
	 <body onLoad="success()">
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
						   <li><a href="viewhistory.php" onclick="closeNav()"><b><span class="glyphicon glyphicon-list-alt">OrderDetails</b></a></li>
						 <li><a href="cancel.php" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i><b> CancelOrder</b></a></li>
						 <li><a href="changepassword.php" onclick="closeNav()"><i class="fa fa-key" aria-hidden="true"></i><b>ChangePassword</b></a></li>
						 <li><a href="editinfo.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
						 <li><a href="logoutcust.php" onclick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
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
         
		  <h1 style="color:#e22b28;"class="btnpad"><b>YOUR ORDER PLACED SUCCESSFULLY</b></h1>
          <h2 style="color:#e22b28;"class="btnpad">
		      <img style="width:150px;height:150px;" src="css/tick.png" alt="tick image"></img>
		  </h2>
   
         <div align="center" style="margin-top:40px">
        <table>
        <tr style="color:#e22b28;""> <td>REFERENCE ID</td> <td>BILL</td> <td>ROOM</td> <td style="text-align:center">NAME</td> </tr>
         <tr> <td style="text-align:center"><?=$id;?></td> <td>Rs.<?=$bill;?></td> <td style="text-align:center"><?=$room;?></td> <td style="text-align:center"><?=$name;?></td> </tr>
        </table><br><br><br><br>
        <button  class="btnpad "  onClick="window.print()" ><h4><b>PRINT</b></h4></button><br>
        <button class="btnpad bttn" onclick="location.href='user.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
        
		</div>
		
	    <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
            <b> Foodureca &copy;2017 All Rights Reserved </b>
       </div>
        </body>
        </html>
        <?php
	}
	else
	{
		$_SESSION['error1']="DB ISSUE";
		header('Location: user.php');
	}
}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>