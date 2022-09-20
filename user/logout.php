<?php
session_start();
unset($_SESSION['user']);
echo "<script>alert('Logout Successfuly....');location.href='../gen/index.php';</script>";
?>
