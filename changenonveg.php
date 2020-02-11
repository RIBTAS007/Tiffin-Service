<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{
?>
<!--<html>
<head>
</head>
<body>
<form action="changenonvegprocess.php" method="POST">
Roti Type:<br/>
<select name="rotiparent" required>  
<option selected="" value="">(Please select type)</option>  
<option value="roti">roti</option>  
<option value="paratha">paratha</option> 
<option value="naan">naan</option> 
</select>
Main Item:<br/>
<select name="main1"required>  
<option selected="" value="">(Please select type)</option>  
<option value="chicken">chicken</option>  
<option value="mutton">mutton</option> 
<option value="fish">fish</option> 
<option value="egg">egg</option> 
</select>
Side Item:<br/>
<select name="main2" required>  
<option selected="" value="">(Please select type)</option>  
<option value="chilly">chilly</option>  
<option value="salted">salted</option> 
<option value="gravey">gravey</option> 
</select>
Dessert:<br/>
<select name="dessert" required>  
<option selected="" value="">(Please select type)</option>  
<option value="rasogulla">rasogulla</option>  
<option value="custard">custard</option> 
<option value="icecream">icecream</option> 
</select>
<input type="submit" value="update">
</form>
</body>
</html>-->

<html>
			<head>
			 <title>Change NonVeg</title>
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
		     <a href="javascript:void(0)" class="closebtn" onClick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		        <li><a href="changemenu.php" onClick="closeNav()"><span class="glyphicon glyphicon-list-alt">ChangeMenu</a></li>
				<li><a href="changeprice.php" onClick="closeNav()"><span class="glyphicon glyphicon-list-alt">ChangePrice</a></li>
			     <li><a href="vieworder.php" onClick="closeNav()"><span class="glyphicon glyphicon-list-alt">ViewOrder</a></li>
			     <li><a href="changeworkstatus.php" onClick="closeNav()"><i class="fa fa-info-circle" aria-hidden="true"></i>WorkStatus</a></li>
			      <li><a href="viewusername.php" onClick="closeNav()"><i class="fa fa-info-circle" aria-hidden="true"></i>UserRecord</a></li>
				 <li><a href="logoutadmin.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i>LogOut</a></li>
		     </ul>
		 </div>
         
		  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
		 
		  <h1 style="color:#e22b28;"class="btnpad"><b>CHANGE MENU</b></h1>
        
		 <!--form-->
     
         <div align="center" style="margin-top:10px">
            
        
                 <form action="changenonvegprocess.php" method="POST"> 
                 
				     <h2 style="color:#e22b28;"class="btnpad">SELECT ROTI TYPE</h2>
				     <select name="rotiparent" class="step1" required>  
						 <option selected="" value="">(Please select type)</option>  
						 <option value="roti">roti</option>  
						 <option value="paratha">paratha</option> 
						 <option value="naan">naan</option> 
					 </select><br><br>
				
				     <h2 style="color:#e22b28;"class="btnpad">SELECT MAIN ITEM</h2>
					 <select name="main1"class="step1"required>  
							<option selected="" value="">(Please select type)</option>  
							<option value="chicken">chicken</option>  
							<option value="mutton">mutton</option> 
							<option value="fish">fish</option> 
							<option value="egg">egg</option> 
					 </select>
				     <br><br>
				      <h2 style="color:#e22b28;"class="btnpad">SELECT FLAVOUR</h2>
					  <select name="main2" class="step1" required>  
							<option selected="" value="">(Please select type)</option>  
							<option value="chilly">chilly</option>  
							<option value="salted">salted</option> 
							<option value="gravey">gravey</option> 
					 </select>
				      <br><br>
					 <h2 style="color:#e22b28;"class="btnpad">SELECT DESSERT</h2>
					 <select name="dessert" class="step1" required>  
							<option selected="" value="">(Please select type)</option>  
							<option value="rasogulla">rasogulla</option>  
							<option value="custard">custard</option> 
							<option value="icecream">icecream</option> 
					 </select>
					 <br>
				<button type="submit" class="btnpad bttn" ><h4><b>UPDATE</b></h4>&nbsp;&nbsp; <i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></button>
		     </form>
			 <button class="btnpad bttn" onClick="location.href='dashboard.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
		
        
         </div> 
         <div style="position: right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            </div>		 
     </body>
 </html>
<?php
if(isset($_SESSION['error'])&&!empty($_SESSION['error']))
			{
				echo"<script type='text/javascript'>alert('Please fill values to proceed');</script>";
				$_SESSION['error']="";
			}
			if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
			{
				echo"<script type='text/javascript'>alert('Please Co-operate. We have some Database Issues');</script>";
				$_SESSION['error1']="";
			}
}
else
{
	 $_SESSION['err3']="fill";
	 header('Location: adminlogin.php');
}
?>
