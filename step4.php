<?php
require 'session.php';
require 'connectdb.php';
if (loggedin())
{
	if(isset($_POST['time'])&&!empty($_POST['time'])&&isset($_POST['type'])&&!empty($_POST['type'])&&isset($_POST['bill'])&&!empty($_POST['bill']))
	{  
		$username=$_SESSION['username'];
		$query1= "SELECT * FROM `customer` WHERE `username`='$username'";
		if($result1=mysql_query($query1))
		{
			$time=$_POST['time'];
			$type=$_POST['type'];
			$room=mysql_result($result1, 0, 'room');
			$name=mysql_result($result1, 0, 'name');
			date_default_timezone_set('Asia/Kolkata');
			$date=date("Y/m/d");
			$bill=$_POST['bill'];
			$query="INSERT INTO `billrecord`(`id`, `username`, `bill`, `date`, `room`, `foodtime`, `type`,`name`) VALUES ('','$username','$bill','$date','$room','$time','$type','$name')";
			if($result=mysql_query($query))
				{
					header('Location: bill.php');
				}
			else
			{
				$_SESSION['error1']="DB ISSUE";
				header('Location: user.php');
			}	
		}
		else
		{
			$_SESSION['error1']="DB ISSUE";
			header('Location: user.php');
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