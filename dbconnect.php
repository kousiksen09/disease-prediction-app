<?php

$db_host = "localhost";
$db_name = "detecto";
$db_user = "root";
$db_pass = "";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

?>