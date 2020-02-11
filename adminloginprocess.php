<?php
require 'adminsession.php';
require 'connectdb.php';
if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password']))
    {
	  $password=$_POST['password'];
      $username=$_POST['username'];
	  $query=" SELECT * FROM `admin` WHERE `username`='$username' && `password`='$password' ";
      if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['err1']="wrong values";
				 header('Location: adminlogin.php');
			}//rows
			else
			{
				
				$_SESSION['id']=mysql_result($result,0,'id');
				header('Location: dashboard.php');
			}//rows else
	     }//query
	   else
	    {
			 $_SESSION['err2']="query problem";
			 header('Location: adminlogin.php');
	     }//query else
	}//isset
	else
	{
		 $_SESSION['err3']="fill";
		 header('Location: adminlogin.php');
	}//else isset

?>