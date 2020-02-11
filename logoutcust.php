<?php
require 'session.php';
unset($_SESSION);
session_destroy();
session_write_close();
header('location: userlogin.php');
?>