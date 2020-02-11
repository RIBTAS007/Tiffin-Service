<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{ 
	if(isset($_POST['date'])&&!empty($_POST['date'])&&isset($_POST['foodtime'])&&!empty($_POST['foodtime'])&&isset($_POST['status'])&&!empty($_POST['status']))
	{
		$i=$_POST['date'];
		$mysqldate=date('Y-m-d',strtotime(str_replace('-','/',$i)));
		$foodtime=$_POST['foodtime'];
		$status=$_POST['status'];
		$query="SELECT * FROM `billrecord` WHERE `date`='$mysqldate' && `status`='$status' && `foodtime`='$foodtime' ";
		if($result=mysql_query($query))
		{
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				  $_SESSION['error2']="fill";
				 header('Location: vieworder.php');
			}
			else
			{
				?>
				
			
			<!DOCTYPE html>
<html >
     <head>
         <meta charset="UTF-8">
        
         <title>View Order Process</title>
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
						  <li><a href="viewusername.php"><i class="fa fa-info-circle" aria-hidden="true"></i>UserRecord</a></li>
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
         
		  
         <h1 style="color:#e22b28;"class="btnpad">ORDER DETAILS</h1></br>
     
		  <div align="center" style="margin-top:100px">
              <table>
					<tr style="color:#e22b28; text-align:center">
                        <th>REFERENCE ID</th>
                        <th>NAME</th>
                        <th>STATUS</th>
                        <th>FOOD TYPE</th>
                        <th>FOOD TIME</th>
                       	<th>BILL(IN RS.)</th>
                       	<th>ORDER DATE</th>
                        	<th>ROOM</th>
                     </tr>
                        <?php
               			 while($row1=mysql_fetch_array($result))
						{
							 ?>
                    <tr >
                    <td style="text-align:center"><?php echo $row1['id']; ?></td>
                    <td style="text-align:center"><?php echo $row1['name'];?></td>
                    <td style="text-align:center"><?php echo $row1['status']; ?></td>
                     <td style="text-align:center"><?php echo $row1['type']; ?></td>
                      <td style="text-align:center"><?php echo $row1['foodtime'];?></td>
                      <td style="text-align:center"><?php echo $row1['bill']; ?></td>
                    <td style="text-align:center"><?php  echo date('d/m/Y',strtotime(str_replace('-','/',$row1['date']))); ?></td>
                      <td style="text-align:center"><?php echo $row1['room']; ?></td>
                    </tr>
					<?php
						}
						?>
                     
                     </table>
                     <button class="btnpad bttn" onclick="location.href='dashboard.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
		
         </div>
		  <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            </div>
    </body>
	</html>
            <?php
		}
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			header('Location: vieworder.php');
		}
 	}
 else
 	{
	 $_SESSION['error']="fill";
	 header('Location: vieworder.php');
	}
}
else
{
	 $_SESSION['err3']="fill";
	 header('Location: adminlogin.php');
}
?>
