<?php
require 'session.php';
?>
<html>
     <head>	
         <meta charset="UTF-8">
         <title>User Registration</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		 <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
         <link rel="stylesheet" href="css/styleReg.css">
         
		 <script>

			 function formValidation()  
			 {  
			 var username = document.registration.username;
			 var password = document.registration.password; 
			 var name = document.registration.name; 
			 var room=document.registration.room;
			 var email= document.registration.email; 
			 var phone= document.registration.phone;

				if(allLetter(username))  
				{  
					if(password_validation(password,7,14))  
					{  
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
				var letters = /^([A-Za-z. A-Za-z. A-Za-z ]){2,30}$/; 
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
						 <a href="index.html" class="navbar-brand "><img class="logos" src="css/foodureca.jpg" alt="logo"></a>
						 <a href="index.html" class="navbar-brand ">    
						 <h2 style="color:white;"><b>Foodureca</h2>
					 </div>
				 </div>

				 <!-- Menu Items -->
				 <div class="collapse navbar-collapse" id="mainNavBar"  role="navigation">
					<ul class="nav navbar-nav navbar-right">
						 <li><a  href="index.html"><i class="fa fa-home" aria-hidden="true"></i> <b>Home</b></a></li>
						 <li><a  href="userlogin.php"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>Login</b></a></li>
						
						 
						 
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onClick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="index.html" onClick="closeNav()"><i class="fa fa-home" aria-hidden="true" ></i><b>Home</b></a></li>
			     <li><a href="userlogin.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true" ></i><b>Login</b></a></li>
				 
		     </ul>
		 </div>
		
         <!--form-->
		 <form  class="form" id="form1" name="registration" onSubmit="return formValidation();"  action="regprocess.php" method="POST">
				<input name="username" type="text" placeholder="Username" class="name" maxlength="15" required />
				<input type="password" name="password" placeholder="Password" class="name" maxlength="14" required />
				<input type="text" name="name" placeholder="Name" class="name" maxlength="30" required />
				<input type="text"  name="room" placeholder="Room" class="name" maxlength="4" required />
			  <input type="tel" name="phone" placeholder="Phone no." maxlength="10" class="name" required />
					<input type="email" name="email" placeholder=" email" class="email"  required />
					 <p class="name">
				     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 
				     <input type="checkbox" name="checkbox" value="check" style=" width: 20px;  height: 20px;"/>
				       <b style="font-size:13px;"><a href="terms.php" target="_blank">I AGREE TO TERMS AND CONDITIONS</a>
					 </b>
				 </p><br>
				<input name="submit" style=" border: 1px solid #253737; background:#e22b28; color:white;"type="submit" value="REGISTER" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}" style="cursor:pointer" />
				<div class="btnpad" style="font-size:15px;">
	          <a href="userlogin.php">Already have an Account? Click Here!</a>
	        </div>
		 </form>
		 <div style="position:  right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
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
    echo"<script type='text/javascript'>alert('DATABASE ISSSUE ');</script>";
	 $_SESSION['error']="";
}
if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
{   	
    echo"<script type='text/javascript'>alert('USERNAME ALREADY EXISTS');</script>";
	 $_SESSION['error1']="";
}
if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
{   	
    echo"<script type='text/javascript'>alert('REGISTER FOR A NEW ACCOUNT');</script>";
	 $_SESSION['error2']="";
}
?>
