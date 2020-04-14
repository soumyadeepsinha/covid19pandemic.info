<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronainfo';

// Attempt to connect to MySQL database
$con = mysqli_connect($server, $user, $password, $db);

// Check connection
if ($con === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
