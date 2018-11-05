<?php

$servername = "cscott.centralus.cloudapp.azure.com:3306";
$username = "scott";
$password = "Sickandtired1!";

// Creates connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
