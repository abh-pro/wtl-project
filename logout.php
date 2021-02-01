<?php

session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
}
$_SESSION['success'] = "Logged out";
header("location: index.php");
exit();

 ?>
