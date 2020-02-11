<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{
	 if(isset($_POST['bill'])&&!empty($_POST['bill'])&&isset($_POST['id'])&&!empty($_POST['id']))
	 {
		 $bill=$_POST['bill'];
		 $id=$_POST['id'];
		  $query="UPDATE `item` SET `bill`='$bill' WHERE `id`='$id' ";
		 if($result=mysql_query($query))
		 {
			$_SESSION['true1']="changed";
			header('Location: dashboard.php');
		 }
		 else
		 {
			$_SESSION['error1']="DB Issue";
			 header('Location: changeprice.php');
		 }
	 }//isset
	else
	 {
		 $_SESSION['error']="fill";
		 header('Location: changeprice.php');
	 }
}
else
{
	 $_SESSION['err3']="fill";
	 header('Location: adminlogin.php');
}
?>
