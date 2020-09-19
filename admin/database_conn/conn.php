<?php
$servername = "";
$username = "root";
$password = "";
$db="u290409886_cetpgassoc";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>