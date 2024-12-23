<?php
$server = "localhost";
$username = 'root';
$password = "";
$database = 'aptech';

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die('ERROR' . mysqli_connect_error());
}
