<?php
require 'session.php';
?>
<html>
     <head>
         <meta charset="UTF-8">
         <title>Login</title>
         <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		 <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="css/styleLogin.css">
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
						
						 <li><a href="userlogin.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b> Login</b></a></li>
						 <li><a href="userreg1.php"><i class="fa fa-user-circle" aria-hidden="true"></i><b> Register</b></a></li>
						 
						 
						 
						 
					</ul>
				 </div>

			 </div>
		 </nav>
			  
		 <!--Side Navigation Bar-->
		 <div id="mySidenav" class="sidenav ">
		     <a href="javascript:void(0)" class="closebtn" onClick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		          <li><a href="index.html" onclick="closeNav()"><i class="fa fa-home" aria-hidden="true" ></i><b>Home</b></a></li>
			      <li><a href="userlogin.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true" ></i><b>Login</b></a></li>
			      <li><a  href="userreg1.php" onclick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>Register</b></a></li>
				  
			    
		     </ul>
		 </div>


		 <!-- data-toggle lets you display modal without any JavaScript -->
			<div class="btnpad">
			      <h1 style="color:#e22b28;">WELCOME! TO THE LOGIN SECTION</h1>
			</div>
			<div class="btnpad">
			     <button type="button" class="bttn" data-toggle="modal" data-target="#popUpWindow"><h1>PLEASE CLICK HERE TO LOGIN</h1></button>
			</div>
			<div class="modal fade" id="popUpWindow">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title" style="color:#e22b28;">User Login</h3>
						</div>

						<!-- body (form) -->
						<div class="modal-body">
							<form role="form" action="loginprocess.php" method="POST">
								<div class="form-group">
									<input type="text"  placeholder="Username" name="username" class="form-control" required>
								</div>
								<div  class="form-group">
									<input type="password"  placeholder="Password"  name="password" class="form-control" required>
								</div>
							
						</div>

						  <!-- button -->
						<div class="modal-footer">
						   <div class="form-group">
							<input  class="btn btn-block" style="background-color:#e22b28;color:white;border:none;cursor:pointer;" type="submit" value="LOGIN">
							</div>
							<div style="text-align:center">
							<a href="adminlogin.php" >Login as Admin</a>
							</div>
						</form>
					    </div>
				    </div>
			    </div>

		    </div>
			<div class="btnpad">
	          <a href="userreg1.php"><h3>Don't have an Account? Click Here!</h3></a>
	        </div>
			<div style="position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#e22b28;font-size:20px;">
                <b> Foodureca &copy;2017 All Rights Reserved </b>
            
            </div>
			
			 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	     	 <script src="js/index.js"></script>
		 
	 </body>
</html>
<?php
if(isset($_SESSION['true'])&&!empty($_SESSION['true']))
{   	
    echo"<script type='text/javascript'>alert('Registerd successfully. Login to continue');</script>";
	 $_SESSION['true']="";
}
if(isset($_SESSION['true1'])&&!empty($_SESSION['true1']))
{   	
    echo"<script type='text/javascript'>alert('PLEASE Login to continue');</script>";
	 $_SESSION['true1']="";
}
if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
{   	
    echo"<script type='text/javascript'>alert('WRONG COMBINATION OF USERNAME AND PASSWORD');</script>";
	 $_SESSION['error1']="";
}
if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
{   	
    echo"<script type='text/javascript'>alert('DATABASE ISSUE');</script>";
	 $_SESSION['error2']="";
}
if(isset($_SESSION['error3'])&&!empty($_SESSION['error3']))
{   	
    echo"<script type='text/javascript'>alert('PLEASE FILL VALUES TO PROCEED');</script>";
	 $_SESSION['error3']="";
}

?>
