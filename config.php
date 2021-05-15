<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "griptask1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}

?>
