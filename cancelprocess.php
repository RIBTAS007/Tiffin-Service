<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
	if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
		$username=$_SESSION['username'];
		$query1="SELECT * FROM `billrecord` WHERE `id`='$refid' && `username`='$username'";
		if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
				$_SESSION['error2']="wrongvalues";
				header('Location: user.php');
			}
			else
			{
				$id=mysql_result($result1,0,'id');
				$status=mysql_result($result1,0,'status');
				if($status=='delivered')
				{
					$_SESSION['true2']="receivedalready";
					header('Location: user.php');
				}
				else
				{
					$query="DELETE FROM `billrecord` WHERE `id`='$refid' ";
					 if(mysql_query($query))
					 { 
						$_SESSION['true3']="DELETED";
						header('Location: user.php');
					 }
					 else
					 {
							 $_SESSION['error1']="DB ISSUE";
						 header('Location: user.php');
						}
				}
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
		 $_SESSION['error']="fill";
		 header('Location: cancel.php');
	}
}
else
{
	$_SESSION['true1']="LOGIN";
	header('Location: userlogin.php');
}
?>
