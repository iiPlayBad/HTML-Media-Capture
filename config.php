<?php

$host = "localhost";
$user = "epic";
$password = "epic";
$dbname = "videoStorage";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}