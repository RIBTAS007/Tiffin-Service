<?php 
require 'adminsession.php';
require 'connectdb.php';
if (loggedin2())
{
 if(isset($_POST['type'])&&!empty($_POST['type']))
 {
	 $type=$_POST['type'];
	 if($type=='veg')
	 header('Location: changeveg.php');
	 else if($type=='nonveg')
	 header('Location: changenonveg.php');
	 if($type=='vegd')
	 header('Location: changevegd.php');
	 else if($type=='nonvegd')
	 header('Location: changenonvegd.php');

 }
 else
 {
	 $_SESSION['error']="fill";
	 header('Location: changemenu.php');
 }
}
else
{
	 $_SESSION['err3']="fill";
	header('Location: adminlogin.php');
}
?>
