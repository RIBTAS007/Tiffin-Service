<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{
	if(isset($_POST['rotiparent'])&&!empty($_POST['rotiparent'])&&isset($_POST['main1'])&&!empty($_POST['main1'])&&isset($_POST['main2'])&&!empty($_POST['main2'])&&isset($_POST['dessert'])&&!empty($_POST['dessert']))
	{
		$rotiparent=$_POST['rotiparent'];
		$main1=$_POST['main1'];
		$main2=$_POST['main2'];
		$dessert=$_POST['dessert'];
		$query="UPDATE `item` SET `b`='$rotiparent',`c`='$main1',`d`='$main2',`f`='$dessert' WHERE `id`='3' ";
		if($result = mysql_query($query))
		{
			$_SESSION['true']="changed";
			header('Location: dashboard.php');
		}
		else
		{
			$_SESSION['error1']="DB Issue";
			header('Location: changevegd.php');
		}
	}
	else
	{
		$_SESSION['error']="fill";
		header('Location: changevegd.php');
	}
}
else
{
	$_SESSION['err3']="fill";
	header('Location: adminlogin.php');
}