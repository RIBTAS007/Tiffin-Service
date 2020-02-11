<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
	if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['newpassword'])&&!empty($_POST['newpassword'])&&isset($_POST['cnpassword'])&&!empty($_POST['cnpassword']))
    { 
		$username=trim($_POST['username']);
		$password=$_POST['password'];
		$newpassword=$_POST['newpassword'];
		$cnpassword=$_POST['cnpassword']; 
	  	$query1="SELECT * FROM `customer` WHERE `username`='$username' && `password`='$password' ";
      	if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
				$_SESSION['error2']="incorrectparentdata";
				header('Location: changepassword.php');
			}//rows
			else
			{    if($newpassword!=$cnpassword)
		  			{
						 $_SESSION['error3']="mismatch";
						 header('Location: changepassword.php');
					}
					else
					 {
						 $query="UPDATE `customer` SET `password`='$newpassword' WHERE `username`='$username'";
						 if(mysql_query($query))
						  {
							  $_SESSION['true4']="change";
							  header('Location: user.php');		  
						  }
						 else
						  { 
						   		$_SESSION['error1']="DB ISSUE";
								 header('Location: user.php');
						  }
					 }
			}//rows else
		 }//query
			else
			{ 
				 $_SESSION['error1']="DB ISSUE";
				 header('Location: user.php');
			 }//query else
	}
else
	{ 
	 	 $_SESSION['error4']="fill";
		 header('Location: changepassword.php');
	}
}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>