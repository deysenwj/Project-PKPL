<?php
include("config.php");
session_destroy();
header("Location: Login/login.php");
exit;
?>
