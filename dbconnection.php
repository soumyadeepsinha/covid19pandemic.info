<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'databasename';     // Enter your db name

// Check connection
if ($con === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
// Attempt to connect to MySQL database
$con = mysqli_connect($server, $user, $password, $db);
}

