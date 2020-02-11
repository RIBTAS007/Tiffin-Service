<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{	
 	 if(isset($_POST['refid'])&&!empty($_POST['refid'])&&isset($_POST['status'])&&!empty($_POST['status']))
	{
		$status=$_POST['status'];
		$refid=$_POST['refid'];
		$query1="SELECT * FROM `billrecord` WHERE  `id`='$refid' ";
		if($result1=mysql_query($query1))
		{
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
				$_SESSION['true2']="noexist";
				header('Location: dashboard.php');
			}
			else
			{
			$query="UPDATE `billrecord` SET `status`='$status' WHERE `id`='$refid'";
			if($result=mysql_query($query))
			{
				$_SESSION['true3']="changed";
				header('Location: dashboard.php');
			}
			else
				{
					$_SESSION['error1']="DB Issue";
					header('Location: changeworkstatus.php');
				}
			}
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			header('Location: changeworkstatus.php');
		}
	}
	else
	{
		$_SESSION['error']="fill";
		header('Location: changeworkstatus.php');
	}
}
else
{
	$_SESSION['err3']="fill";
	header('Location: adminlogin.php');
}
?>
