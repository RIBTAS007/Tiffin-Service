<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{
 if(isset($_POST['type'])&&!empty($_POST['type']))
 {
	 $type=$_POST['type'];
	 if($type=='veg')
	 {
		 $query="SELECT * FROM `item` WHERE `id`='1' ";
		 if($result=mysql_query($query))
		 {
			 $bill=mysql_result($result,0,'bill');
			 $id=1;
		}
		else
		{
			$_SESSION['error1']="DB Issue";
		 	header('Location: changeprice.php');
		}
	 }
	 else if($type=='nonveg')
	{
		 $query="SELECT * FROM `item` WHERE `id`='2' ";
		 if($result=mysql_query($query))
		 {
			 $id=2;
			 $bill=mysql_result($result,0,'bill');
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			 header('Location: changeprice.php');
		}
	}
	if($type=='vegd')
	{
		 $query="SELECT * FROM `item` WHERE `id`='3' ";
		 if($result=mysql_query($query))
		 {
			 $id=3;
			 $bill=mysql_result($result,0,'bill');
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			 header('Location: changeprice.php');
		}
	}
	else if($type=='nonvegd')
	{
		 $query="SELECT * FROM `item` WHERE `id`='4' ";
		 if($result=mysql_query($query))
		 {
				$id=4;
				 $bill=mysql_result($result,0,'bill');
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			 header('Location: changeprice.php');
		}
	}?>
	<!--<html>
    <head>
    </head>
    <body>
    <form action="change2.php" method="POST">
    CHANGE BILL<input type="number"  name="bill"  maxlength="3" value="<?=$bill;?>" ><br>
    <input type="number" name="id" value="<?=$id;?>" style="display:none">
    <input type="submit" value="update">
    </form>
    </body>
	</html>-->
	<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>Change Price Process</title>
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
						 <li><a href="changemenu.php" ><span class="glyphicon glyphicon-list-alt">ChangeMenu</a></li>
						 <li><a href="changeprice.php" ><span class="glyphicon glyphicon-list-alt">ChangePrice</a></li>
						 <li><a href="vieworder.php" ><span class="glyphicon glyphicon-list-alt">ViewOrder</a></li>
						 <li><a href="changeworkstatus.php"><i class="fa fa-info-circle" aria-hidden="true"></i>WorkStatus</a></li>
						  <li><a href="viewusername.php" ><i class="fa fa-info-circle" aria-hidden="true"></i>UserRecord</a></li>
						 <li><a href="logoutadmin.php"><i class="fa fa-user-circle" aria-hidden="true"></i>LogOut</a></li>
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="changemenu.php" onclick="closeNav()"><span class="glyphicon glyphicon-list-alt">ChangeMenu</a></li>
				 <li><a href="changeprice.php" onclick="closeNav()"><span class="glyphicon glyphicon-list-alt">ChangePrice</a></li>
			     <li><a href="vieworder.php" onclick="closeNav()"><span class="glyphicon glyphicon-list-alt">ViewOrder</a></li>
			     <li><a href="changeworkstatus.php" onclick="closeNav()"><i class="fa fa-info-circle" aria-hidden="true"></i>WorkStatus</a></li>
			      <li><a href="viewusername.php" onClick="closeNav()"><i class="fa fa-info-circle" aria-hidden="true"></i>UserRecord</a></li>
				 <li><a href="logoutadmin.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i>LogOut</a></li>
		     </ul>
		 </div>

		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
         
		  
         <h1 style="color:#e22b28;"class="btnpad">CHANGE BILL AMOUNT</h1></br>
     
		  <div align="center" style="margin-top:100px">
             <h2 style="color:#e22b28;"class="btnpad">ENTER NEW AMOUNT</h2></br>
        
               <form action="change2.php"  method="POST">
                 
				 <input type="number" class="step1" name="bill" min="40" maxlength="3" value="<?=$bill;?>" ><br>
                 <input type="number" name="id" value="<?=$id;?>" style="display:none">
				<button type="submit" class="btnpad bttn" ><h4><b>UPDATE</b></h4>&nbsp;&nbsp; <i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></button>
		     </form>
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
		 $_SESSION['error']="fill";
		 header('Location: changeprice.php');
	}
}
else
{
	 $_SESSION['err3']="fill";
	 header('Location: adminlogin.php');
}
?>
