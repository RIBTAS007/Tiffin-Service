<?php
$host="localhost";
$username1="root";
$password1="";
$database_name="tiffin";
if(!mysql_connect($host,$username1,$password1)||!mysql_select_db($database_name))
{
	die("COULD NOT CONNECT TO THE DATABASE");
}

?>