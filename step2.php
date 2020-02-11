<?php
require 'session.php';
require 'connectdb.php';
if (loggedin())
{
	if(isset($_POST['time'])&&!empty($_POST['time']))
	{
		$time=$_POST['time'];
		date_default_timezone_set('Asia/Kolkata');
		$xyz=date('H');
		 if($time=='lunch')
		{
			if(($xyz>13 && $xyz<24)||($xyz>=0&& $xyz<6))
			{
				$_SESSION['lunch']="notavailable";
				header('Location: user.php');
			}
				
		}
		else if ($time=='dinner')
			{
				if(($xyz>21 && $xyz<24)||($xyz>=0&& $xyz<16))
				{
					$_SESSION['dinner']="notavailable2";
					header('Location: user.php');
				}
			}
		if($time=='lunch'||$time=='dinner')
		 {
		?>
        <html>
			<head>
			 <title>Step 2</title>
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
		     <a href="javascript:void(0)" class="closebtn" onClick="closeNav()" >&times;</a>
		     <ul style="list-style: none;">
		         <li><a href="viewhistory.php" onClick="closeNav()"><b><span class="glyphicon glyphicon-list-alt">OrderDetails</b></a></li>
			     <li><a href="cancel.php" onClick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i><b> CancelOrder</b></a></li>
			     <li><a href="changepassword.php" onClick="closeNav()"><i class="fa fa-key" aria-hidden="true"></i><b>ChangePassword</b></a></li>
			     <li><a href="editinfo.php" onClick="closeNav()"><i class="fa fa-user-circle" aria-hidden="true"></i> <b>EditInfo</b></a></li>
				 <li><a href="logoutcust.php" onClick="closeNav()"><i class="fa fa-address-book-o" aria-hidden="true"></i><b>LogOut</b></a></li>
		     </ul>
		 </div>
         
		  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		 <script src="js/index.js"></script>
		 
		  <h1 style="color:#e22b28;"class="btnpad"><b>PLACE YOUR ORDER</b></h1>
          <h2 style="color:#e22b28;"class="btnpad">STEP 2</h2>
		
     
         <div align="center" style="margin-top:100px">
             <h2 style="color:#e22b28;"class="btnpad">MENU TYPE</h2></br>
        
             <form action="step3.php" method="post">
                 <input type="text"  name="time" value="<?=$time;?>" style="display:none">
				 <select name="type" class="step1" required>  
				     <option selected="" value="">(Please select type)</option>  
				     <option value="veg">veg</option>  
				     <option value="nonveg">nonveg</option> 
				</select><br><br>
				<button type="submit" class="btnpad bttn" ><h4><b>CONTINUE</b></h4>&nbsp;&nbsp; <i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></button>
		     </form>
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
