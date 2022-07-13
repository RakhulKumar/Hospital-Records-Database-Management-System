<?php
/*$username = "root";
$password = "";
$hostname = "localhost";
$database = "clinical_service";*/

//connection to the database
$conn =new mysqli('localhost', 'root', '', 'clinical_service');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>