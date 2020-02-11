<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
	$username=$_SESSION['username'];
	?>
   
	<html>
     <head>	
         <meta charset="UTF-8">
         <title>Change Password</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		 <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
         
          <script>
			
			function formValidation()  
			 { 
				 var newpassword= document.change.newpassword;
				 var password = document.change.password; 
				 var cnpassword= document.change.cnpassword;
					 if(password_validation1(password,7,14))  
					{  
						if(password_validation2(newpassword,7,14))  
							{  
							  if(password_validation3(cnpassword,7,14))  
									{  
						 			 	return true;
									}
							}
					}
				return false;
			 }
			 function password_validation1(password,mx,my)  
				{  
				var password_len = password.value.length;  
				if (password_len == 0 ||password_len >= my || password_len < mx)  
				{  
				alert("Password should not be empty / length be between "+mx+" to "+my);  
				password.focus();  
				return false;  
				}  
				return true;  
				}
				function password_validation2(newpassword,mx,my)  
				{  
				var newpassword_len = newpassword.value.length;  
				if (newpassword_len == 0 ||newpassword_len >= my || newpassword_len < mx)  
				{  
				alert("New Password should not be empty / length be between "+mx+" to "+my);  
				newpassword.focus();  
				return false;  
				}  
				return true;  
				}
				function password_validation3(cnpassword,mx,my)  
				{  
				var cnpassword_len = cnpassword.value.length;  
				if (cnpassword_len == 0 ||cnpassword_len >= my || cnpassword_len < mx)  
				{  
				alert("Password for confirmation should not be empty / length be between "+mx+" to "+my);  
				cnpassword.focus();  
				return false;  
				}  
				return true;  
				}
			 
			 </script>

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
						 <a href="index.html" class="navbar-brand "><img class="logos" src="css/foodureca.jpg" alt="logo"></a>
						 <a href="index.html" class="navbar-brand ">    
						 <h2 style="color:white;"><b>Foodureca</h2>
					 </div>
				 </div>

				 <!-- Menu Items -->
				 <div class="collapse navbar-collapse" id="mainNavBar"  role="navigation">
					<ul class="nav navbar-nav navbar-right">
						 <li><a href="viewhistory.php" ><i class="fa fa-home" aria-hidden="true"></i> <b>OrderDetails</b></a></li>
						 <li><a href="cancel.php" ><i class="fa fa-info-circle" aria-hidden="true"></i><b> CancelOrder</b></a></li>
						 <li><a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>ChangePassword</b></a></li>
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
			     <li><a href="#" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i><b>ChangePassword</b></a></li>
			     <li><a href="editinfo.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
				 <li><a href="logoutcust.php" onClick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
		     </ul>
		 </div>

		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
         
		  <h1 style="color:#e22b28;"class="btnpad"><b>CHANGE PASSWORD</b></h1>
		   <div align="center" style="margin-top:30px">
			   <form  name="change" onSubmit="return formValidation()" action="changepasswordprocess.php" method="POST"> 
					<input type="text" name="username" value="<?=$username;?>" class="name" style="display:none">
					<input type="password" name="password" placeholder="Old Password" class="name" maxlength="14"  required />
					<input type="password" name="newpassword" placeholder="New Password" class="name" maxlength="14" required />
			<input type="password" name="cnpassword" placeholder="Confirm New Password" class="name" maxlength="14" required />
				  
					<input name="submit"   class="btn" style=" border: 1px solid #253737; background:#e22b28; color:white;" type="submit" value="CHANGE" style="cursor:pointer" />
			 </form>
              <button class="btnpad bttn" onClick="location.href='user.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
		
         </div>
         <div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            
            </div>
     </body>
</html>
    <?php
	if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
{   	
    echo"<script type='text/javascript'>alert('YOU SEEMED TO HAVE ENTERED WRONG CURRENT PASSWORD');</script>";
	 $_SESSION['error2']="";
}
if(isset($_SESSION['error3'])&&!empty($_SESSION['error3']))
{   	
    echo"<script type='text/javascript'>alert('YOUR NEW PASSWORD MISMATCHES DURING CONFIRMATION');</script>";
	 $_SESSION['error3']="";
}
if(isset($_SESSION['error4'])&&!empty($_SESSION['error4']))
{   	
    echo"<script type='text/javascript'>alert('Please fill values to proceed');</script>";
	 $_SESSION['error4']="";
}
}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>
 