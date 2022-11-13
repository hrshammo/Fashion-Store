<?php
define("CURRENCY", "৳");

$server = "localhost";
$username = "root";
$password = "";
$database = "eco_admin";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {

    die("Connection Error" . mysqli_connect_error());
}
