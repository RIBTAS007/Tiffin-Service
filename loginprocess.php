<?php
require 'session.php';
require 'connectdb.php';
if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password']))
    {
	  $password=$_POST['password'];
      $username=$_POST['username'];
	  $query="SELECT * FROM `customer` WHERE `username`='$username' && `password`='$password' ";
      if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['error1']="wrong values";
				 header('Location: userlogin.php');
			}//rows
			else
			{
				$_SESSION['username']=mysql_result($result,0,'username');
				header('Location: user.php');
			}//rows else
	     }//query
	   else
	    {
			 $_SESSION['error2']="query problem";
			 header('Location: userlogin.php');
	     }//query else
	}//isset
	else
	{
		 $_SESSION['error3']="fill";
		 header('Location: userlogin.php');
	}//else isset

?>