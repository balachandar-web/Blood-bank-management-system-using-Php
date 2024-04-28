
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
echo "<script>alert(' You are LoggedOut ');</script>";
echo "<script>window.location.href = 'login.php';</script>";
// header("Location:login.php");
?>

