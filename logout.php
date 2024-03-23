<?php
session_start();
unset($_SESSION['sid']);
session_destroy();
header("location:libsys.php");
?>