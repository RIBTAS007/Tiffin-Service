<?php
require 'session.php';
require 'connectdb.php';
if (loggedin())
{
	if(isset($_POST['time'])&&!empty($_POST['time'])&&isset($_POST['type'])&&!empty($_POST['type']))
	{
		$time=$_POST['time'];
		$type=$_POST['type'];
		if($time=='lunch' && $type=='veg')
		{
		  	$query="SELECT * FROM `item` WHERE `id`='1' ";
			if($result=mysql_query($query))
			{
				$a = mysql_result($result, 0, 'a');
				$b = mysql_result($result, 0, 'b');
				$c = mysql_result($result, 0, 'c');
				$da = mysql_result($result, 0, 'da');
				$d = mysql_result($result, 0, 'd');
				$e = mysql_result($result, 0, 'e');
				$f = mysql_result($result, 0, 'f');	
				$bill=mysql_result($result, 0, 'bill');
			}
		}
		else if($time=='lunch' && $type=='nonveg')
		{
			$query="SELECT * FROM `item` WHERE `id`='2' ";
			if($result=mysql_query($query))
			{
				$a = mysql_result($result, 0, 'a');
				$b = mysql_result($result, 0, 'b');
				$c = mysql_result($result, 0, 'c');
				$da = mysql_result($result, 0, 'da');
				$d = mysql_result($result, 0, 'd');
				$e = mysql_result($result, 0, 'e');
				$f = mysql_result($result, 0, 'f');	
				$bill=mysql_result($result, 0, 'bill');
			}
		}
		else if($time=='dinner' && $type=='veg')
		{
			$query="SELECT * FROM `item` WHERE `id`='3' ";
			if($result=mysql_query($query))
			{
				$a = mysql_result($result, 0, 'a');
				$b = mysql_result($result, 0, 'b');
				$c = mysql_result($result, 0, 'c');
				$da = mysql_result($result, 0, 'da');
				$d = mysql_result($result, 0, 'd');
				$e = mysql_result($result, 0, 'e');
				$f = mysql_result($result, 0, 'f');	
				$bill=mysql_result($result, 0, 'bill');
			}
		}
		else if($time=='dinner' && $type=='nonveg')
		{
			$query="SELECT * FROM `item` WHERE `id`='4' ";
			if($result=mysql_query($query))
			{
				$a = mysql_result($result, 0, 'a');
				$b = mysql_result($result, 0, 'b');
				$c = mysql_result($result, 0, 'c');
				$da = mysql_result($result, 0, 'da');
				$d = mysql_result($result, 0, 'd');
				$e = mysql_result($result, 0, 'e');
				$f = mysql_result($result, 0, 'f');	
				$bill=mysql_result($result, 0, 'bill');
			}
		}?>
		<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>Step 3</title>
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
         
		  <h1 style="color:#e22b28;"class="btnpad"><b>PLACE YOUR ORDER</b></h1>
          <h2 style="color:#e22b28;"class="btnpad">STEP 3</h2>
		  <div align="center" style="margin-top:10px">
			 
			 <table>
			
			     <tr style="color: #e22b28;" >
			         <th style="text-align:center"><b>Sl no.</b></th>
			         <th style="text-align:center"><b>Food Item</b></th>
			     </tr>
			
			     <tr> <td style="text-align:center">1</td><td style="text-align:center"><?=$a;?></td></tr>
			     <tr> <td style="text-align:center">2</td><td style="text-align:center"><?=$b;?></td></tr>
			     <tr> <td style="text-align:center">3</td><td style="text-align:center"><?=$c;?></td></tr>
			     <tr> <td style="text-align:center">4</td><td style="text-align:center"><?=$d;?>(Flavour)</td></tr>
			     <tr> <td style="text-align:center">5</td><td style="text-align:center"><?=$e;?></td></tr>
			     <tr> <td style="text-align:center">6</td><td style="text-align:center"><?=$da;?></td></tr>
				 <tr> <td style="text-align:center">7</td><td style="text-align:center"><?=$f;?></td></tr>
				 <tr style="color: #e22b28;"> <td style="text-align:center"><b>Bill(in Rs.)</b></td><td style="text-align:center;"></b><?=$bill;?></b></td></tr>
			   
			 </table>
			 
			 
			 <form action="step4.php" method="post">
				 <input type="text" name="type" value="<?=$type;?>" style="display:none;"/>
				 <input type="text" name="time" value="<?=$time;?>" style="display:none;"/>
				 <input type="text" name="bill" value="<?=$bill;?>" style="display:none;"/>
				 <button type="submit" class="btnpad bttn" ><h4><b>CONTINUE</b></h4>&nbsp;&nbsp; <i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></button>
			 </form>
		     
			 <button class="button btnpad bttn" onClick="location.href='user.php'; "><i class="fa fa-2x fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;<h4><b>GO BACK TO CHANGE CHOICE</h4></b></button>
				
		 </div>
		 <div style="position:  right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            
            </div>
     </body>
</html>
        <?php
	}
	else
	{
		$_SESSION['error3']="fill";
		header('Location: user.php');
	}
}
else
{
		$_SESSION['true1']="LOGIN";
	    header('Location: userlogin.php');
}
?>