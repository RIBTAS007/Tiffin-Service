<?php
require 'adminsession.php';
unset($_SESSION);
session_destroy();
session_write_close();
header('location: adminlogin.php');
?>