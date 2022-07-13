
<?php
include 'config.php';
session_start();

unset($_SESSION["username"]);
echo 'You have cleaned session';
header('Location: ../../index.php');
$conn->close();
session_destroy();
?>