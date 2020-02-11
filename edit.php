<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
	if((isset($_POST['name'])&&!empty($_POST['name']))&&(isset($_POST['phone'])&&!empty($_POST['phone']))&&(isset($_POST['email'])&&!    empty($_POST['email']))&&(isset($_POST['room'])&&!empty($_POST['room'])))
	{		
			$username=$_SESSION['username'];
			$name= $_POST['name'];
			$email= $_POST['email'];
			$phone= $_POST['phone'];
			$room= $_POST['room'];
			$query = "UPDATE `customer` SET `name`='$name',`phone`='$phone',`email`='$email',`room`='$room' WHERE `username`='$username'";
							if($result = mysql_query($query))
							  {
								  $_SESSION['true5']="updated";
								  header('Location: user.php');
							  }
							else
							  {
								$_SESSION['error1']="DB ISSUE";
								 header('Location: user.php');
							  }
	}
   else
	{
		?>
        <html>
        <head>
        <title> ERROR </title>
        </head>
        <body style="text-align:center; margin-top:100px;">
        <a href="editinfo.php">click here to proceed </a>
        </body>
        <?php
	}
}//logged in
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>