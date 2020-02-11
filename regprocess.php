<?php
require 'connectdb.php';
require 'session.php';
if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['name'])&&!empty($_POST['name'])&&isset($_POST['phone'])&&!empty($_POST['phone'])&&isset($_POST['email'])&&!empty($_POST['email'])&&isset($_POST['room'])&&!empty($_POST['room']))
    {
		$username=trim($_POST['username']);
		$password=$_POST['password'];
		$name=trim($_POST['name']);
		$phone=trim($_POST['phone']);
		$email=trim($_POST['email']);
		$room=trim($_POST['room']);
	   	$query1="SELECT * FROM `customer` WHERE `username`='$username' ";
	     if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
			   $query="INSERT INTO `customer`(`id`,`username`,`password`,`name`,`phone`,`room`,`email`) VALUES ('','$username','$password','$name','$phone','$room','$email')";
	           if(mysql_query($query))
	           {
				  $_SESSION['true']="registered";
				   header('Location: userlogin.php');		  
			   }
	            else
	          {
				 $_SESSION['error']="database error";
		      	 header('Location: userreg1.php');		  
	          } 
		    }//rows
		    else
		    {
			  $_SESSION['error1']="exist username";
			  header('Location: userreg1.php');
		    }
		}//result1
		else
		{
			$_SESSION['error']="database error";
		     header('Location: userreg1.php');		 
		}
	}
else
	{ 
	  $_SESSION['error2']="fill";
		header('Location: userreg1.php');		
	}
?>