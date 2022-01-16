<?php
session_start();
$SESSION['userweb'] = "";
header("location:login.php");
exit;
?>