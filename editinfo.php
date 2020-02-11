<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
	
	$username=$_SESSION['username'];
	$query= "SELECT * FROM `customer` WHERE `username`='$username' ";
	if($result = mysql_query($query))
	{
		$name = mysql_result($result, 0, 'name');
		$email = mysql_result($result, 0, 'email');
		$phone = mysql_result($result, 0, 'phone');
		$room = mysql_result($result, 0, 'room');
		?>
     
		<html>
       <head>	
         <meta charset="UTF-8">
         <title>Update Details</title>
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
         <script>
		 function formValidation()  
			 {  
				 var name = document.edit.name; 
				 var room=document.edit.room;
				 var email= document.edit.email; 
				 var phone= document.edit.phone;

				if(allLetter1(name))
						{
							if(alphanumeric1(room)) 
							{
								
								if(ValidateEmail(email))
								{
									if(allnumeric(phone))
									{                   
	
									 return true;
									}
								}
							}
						}
				return false;  
				  
				}

				function allLetter(username)  
				{   
				var letters = /^[A-Za-z0-9]+$/;  
				if(username.value.match(letters))  
				{  
				return true;  
				}  
				else  
				{  
				alert('USERNAME name must have alphabet and numeric characters only');  
				username.focus();  
				return false;  
				}  
				} 
				
				function password_validation(password,mx,my)  
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
				
				 function allLetter1(name)  
				{    
				var letters = /^([A-Za-z A-Za-z A-Za-z ]){2,30}$/; 
				if(name.value.match(letters))  
				{  
				return true;  
				}  
				else  
				{  
				alert('Name must have alphabet characters only and a maximum of 30 characters');  
				name.focus();  
				return false;  
				}  
				} 
				function alphanumeric1(room)  
				{   
				var letters = /^[0-9a-zA-Z]+$/;  
				if(room.value.match(letters))  
				{  
				return true;  
				}  
				else  
				{  
				alert('ROOM NO. must have alphanumeric characters only');  
				room.focus();  
				return false;  
				}  
				} 
				function ValidateEmail(email)  
				{  
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
				if(email.value.match(mailformat))  
				{  
				return true;  
				}  
				else  
				{  
				alert("You have entered an invalid email address!");  
				email.focus();  
				return false;  
				}  
				}
				function allnumeric(phone)  
				{   
				var numbers = /^\d{10}$/;  
				if(phone.value.match(numbers))  
				{  
					return true;
				}
				else  
					{  
						alert('Phone must have numeric characters with a minimum of 10 digits. Do not enter + or country code');  
						phone.focus();  
						return false;  
					}  
				} 
		 </script>
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
						 <li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i><b>EditInfo</b></a></li>
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
			     <li><a href="#" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
				 <li><a href="logoutcust.php" onClick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
		     </ul>
		 </div>

		
         <!--form-->
		 
		 <h1 style="color:#e22b28;"class="btnpad"><b>UPDATE INFO</b></h1>
         <div align="center" style="margin-top:30px">
		      <form name="edit" onSubmit="return formValidation();" action="edit.php" method="POST">
				
				<input type="text" name="name" placeholder="Name" class="name" value="<?=$name;?>" maxlength="20" required />
				<input type="email" name="email" placeholder=" email" class="email" value="<?=$email;?>" maxlength="25" required />
			<input type="tel" name="phone" placeholder="Phone no." class="name" value="<?=$phone;?>" maxlength="10" required />
				<input type="text"  name="room" placeholder="Room" class="name" value="<?=$room;?>" maxlength="4" required />
			   
				<input name="submit" class="btn"  style=" border: 1px solid #253737; background:#e22b28; color:white;" type="submit" value="UPDATE" style="cursor:pointer" />
			 </form>
			  <button class="btnpad bttn" onclick="location.href='user.php';"><i class="fa fa-2x fa-home" aria-hidden="true" ></i>&nbsp;&nbsp; <h4><b>GO TO DASHBOARD</b></h4></button>
		      
	     </div>
		 <div style=" right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            
            </div>
		 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
		 <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
